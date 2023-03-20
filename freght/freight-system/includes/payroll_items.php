<?php include('db_connect.php') ?>
<?php
		$pay = $conn->query("SELECT * FROM payroll where id = ".$_GET['id'])->fetch_array();
		$pt = array(1=>"Monhtly",2=>"Semi-Monthly");
?>
		<div class="container-fluid " >
			<div class="col-lg-12">
				
				<br />
				<br />
				<div class="card">
					<div class="card-header">
						<span><b>Payroll : <?php echo $pay['ref_no'] ?></b></span>
                        <a href="#" class="btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa fa-plus"></i> Re-Caclulate Payroll</a>
						<!-- <button class="btn btn-primary btn-sm btn-block col-md-2 float-right" type="button" id="new_payroll_btn"><span class="fa fa-plus"></span> Re-Caclulate Payroll</button> -->
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
							<p>Payroll Range: <b><?php echo date("M d, Y",strtotime($pay['date_from'])). " - ".date("M d, Y",strtotime($pay['date_to'])) ?></b></p>
							<p>Payroll Type: <b><?php echo $pt[$pay['type']] ?></b></p>
							<button class="btn btn-success btn-sm btn-block col-md-2 float-right" type="button" id="print_btn"><span class="fa fa-print"></span> Print</button>
							</div>
						</div>
						<hr>
						  <table class="table table-bordered table-hover">
                            <!-- <colgroup>
                                <col width="10%">
								<col width="20%">
								<col width="30%">
								<col width="30%">
								<col width="10%">
                            </colgroup> -->
                            <thead>
								<tr>
									<th>Employee No</th>
									<th>Name</th>
									<th>Absent</th>
									<th>Late</th>
									<th>Total Allowance</th>
                                    <th>Total Deduction</th>
                                    <th>Net</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$att=$conn->query("SELECT attendance.empoyee_id,attendance.datetime_log,attendance.log_type,application.id as emp, concat(application.firstname,', ',application.middlename,' ',application.lastname) as ename, recruitment_status.status_label as lbl 
                                    FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                                    recruitment_status ON hiretbl.process_id = recruitment_status.id INNER JOIN attendance ON application.id = attendance.empoyee_id
                                    WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time' order by UNIX_TIMESTAMP(datetime_log) asc") or die(mysqli_error());
									$lt_arr = array(1 => " Time-in AM",2=>"Time-out AM",3 => " Time-in PM",4=>"Time-out PM");
									while($row=$att->fetch_array()){
										$date = date("Y-m-d",strtotime($row['datetime_log']));
										$attendance[$row['empoyee_id']."_".$date]['details'] = array("eid"=>$row['empoyee_id'],"name"=>$row['ename'],"eno"=>$row['emp'],"date"=>$date);
										if($row['log_type'] == 1 || $row['log_type'] == 3){
											if(!isset($attendance[$row['empoyee_id']."_".$date]['log'][$row['log_type']]))
											$attendance[$row['empoyee_id']."_".$date]['log'][$row['log_type']] = array('id'=>$row['emp'],"date" =>  $row['datetime_log']);
										}else{
											$attendance[$row['empoyee_id']."_".$date]['log'][$row['log_type']] =array('id'=>$row['emp'],"date" =>  $row['datetime_log']);
										}
										}
										foreach ($attendance as $key => $value) {
								?>
								<tr>
                                     <td><?php echo $attendance[$key]['details']['eno'] ?></td>
									<!-- <td><?php echo date("M d,Y",strtotime($attendance[$key]['details']['date'])) ?></td> -->
                                    <td><?php echo $attendance[$key]['details']['name'] ?></td>
									<td><?php echo $attendance[$key]['details']['name'] ?></td>
                                    <td><?php echo $attendance[$key]['details']['name'] ?></td>
                                    <td><?php echo $attendance[$key]['details']['name'] ?></td>
                                    <td><?php echo $attendance[$key]['details']['name'] ?></td>
									<td>
										<div class="row">
											
									<?php 
									$att_ids = array();
									foreach($attendance[$key]['log'] as $k => $v) :
									 ?>
									 <div class="col-sm-6" style="">
										<p>
											<small><b><?php echo $lt_arr[$k].": <br/>" ?>
												

											<?php echo (date("h:i A",strtotime($attendance[$key]['log'][$k]['date'])))  ?> </b>
											<span class="badge badge-danger rem_att" data-id="<?php echo $attendance[$key]['log'][$k]['id'] ?>"><i class="fa fa-trash"></i></span>
										</small>
										</p>
										</div>
									<?php endforeach; ?>
										</div>

									</td>
									<td>
										<center>
										<button class="btn btn-sm btn-outline-danger remove_attendance" data-id="<?php echo $key ?>" type="button"><i class="fa fa-trash"></i></button>
										</center>
									</td>
								</tr>
								<?php
										}
								?>
							</tbody>
                        </table>
					</div>
				</div>
			</div>
		</div>
			
		
		
	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){

			

			$('#print_btn').click(function(){
				var nw = window.open("print_payroll.php?id=<?php echo $_GET['id'] ?>","_blank","height=500,width=800")
				setTimeout(function(){
					nw.print()
					setTimeout(function(){
						nw.close()
						},500)
				},1000)
			})

			
			
			$('.view_payroll').click(function(){
				var $id=$(this).attr('data-id');
				uni_modal("Employee Payslip","view_payslip.php?id="+$id,"large")
				
			});
			
			$('#new_payroll_btn').click(function(){
				start_load()
				$.ajax({
					url:'ajax.php?action=calculate_payroll',
					method:"POST",
					data:{id:'<?php echo $_GET['id'] ?>'},
					error:err=>console.log(err),
					success:function(resp){
							if(resp == 1){
								alert_toast("Payroll successfully computed","success");
									setTimeout(function(){
									location.reload();

								},1000)
							}
						}
				})
			})
		});
		function remove_payroll(id){
			start_load()
			$.ajax({
				url:'ajax.php?action=delete_payroll',
				method:"POST",
				data:{id:id},
				error:err=>console.log(err),
				success:function(resp){
						if(resp == 1){
							alert_toast("Employee's data successfully deleted","success");
								setTimeout(function(){
								location.reload();

							},1000)
						}
					}
			})
		}
	</script>
