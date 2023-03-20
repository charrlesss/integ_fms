<?php 
include('db_connect.php');
include 'visible_user.php';


?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       Attendance List
					   <a href="#" class="btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa fa-plus"></i> Add Attendance</a>

					   <div class="modal fade bd-example-modal-xl"  id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">New Time Record/s</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate accept-charset="utf-8" action="includes/InsertApp.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo isset($id)? $id : '' ?>">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Employee</label>
                                                    <select class="form-control" name="employee_id" required="">
                                                        <option value="" ></option>
														<?php 
											$employee = $conn->query("SELECT application.id as emp, concat(application.firstname,', ',application.middlename,' ',application.lastname) as ename, recruitment_status.status_label as lbl 
											FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
											recruitment_status ON hiretbl.process_id = recruitment_status.id 
											WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'  order by concat(lastname,', ',firstname,' ',middlename) asc");
										while($row = $employee->fetch_assoc()):
										?>
											<option value="<?php echo $row['id'] ?>"><?php echo $row['ename'] . ' | '. $row['emp'] ?></option>
										<?php endwhile; ?>
                                                    </select>
                                            </div>
                                        </div>
										<div class="col-md-3">
										<label for="" class="control-label">Type</label>
										<select id="type"  class="form-control">
											<option value="1">Time-in AM</option>
											<option value="2">Time-out AM</option>
											<option value="3">Time-in PM</option>
											<option value="4">Tim-out PM</option>
										</select>
									</div>
									<div class="col-md-3">
				<label for="" class="control-label">Date</label>
				<input type="text" id="adate" class="form-control datetimepicker" autocomplete="off">
			</div>
			<div class="col-md-2">
				<label for="" class="control-label">&nbsp</label>
				<button class="btn btn-primary btn-block btn-sm" type="button" id="add_list"> Add to List</button>
			</div>	
			<hr>
		<div class="row">
			<table class="table table-bordered" id="attendance-list">
				<thead>
					<tr>
						<th class="text-center">
							Employee
						</th>
						<th class="text-center">
							Type
						</th>
						<th class="text-center">
							Date
						</th>
						<th class="text-center">
							
						</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
                                        <!-- <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required="" value="<?php echo isset($lastname) ? $lastname:''  ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required="" value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" required="" value="">
                                            </div>
                                        </div> -->
                                        <!-- <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select browser-default select2 form-control" name="status">
                                                <option <?php echo isset($gender) && $gender == 'Male' ? "selected" : '' ?>>Male</option>
					                            <option <?php echo isset($gender) && $gender == 'Female' ? "selected" : '' ?>>Female</option>
                                                </select>                                           
                                             </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required="" value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Contact</label>
                                                <input type="text" class="form-control" name="contact" required="" value="">
                                            </div>
                                        </div> -->
                                        <!-- <div class="row form-group">
                                             <label for="" class="control-label">Address</label>
                                             <textarea name="address" class="form-control" id="" cols="30" rows="3" required=""></textarea>
                                        </div>
                                        <div class="row form-group">
                                             <label for="" class="control-label">Cover Letter</label>
                                             <textarea name="cover_letter" class="form-control" id="" cols="30" rows="3" placeholder ="(Optional)"required=""></textarea>
                                        </div>
                                        <div class="row form-group">
                                            <div class="input-group col-md-10 mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="">Resume</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="resume" onchange="displayfname(this,$(this))" name="resume" accept="application/msword,text/plain, application/pdf">
			                                    <label class="custom-file-label" for="resume">
                                                    <?php echo isset($pname) ? $pname:'Choose file'  ?>
                                                </label></div>
                                            </div>
                                        </div> -->
                                    <br>
                                        <button type="submit" class="btn btn-primary" name="insertData"><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <colgroup>
                                <col width="10%">
								<col width="20%">
								<col width="30%">
								<col width="30%">
								<col width="10%">
                            </colgroup>
                            <thead>
								<tr>
									<th>Date</th>
									<th>Employee No</th>
									<th>Name</th>
									<th>Time Record</th>
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
									<td><?php echo date("M d,Y",strtotime($attendance[$key]['details']['date'])) ?></td>
									<td><?php echo $attendance[$key]['details']['eno'] ?></td>
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
    </div>
</div>


<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/datatables/datatables.min.js"></script>
<script src="assets/js/initiate-datatables.js"></script>
<script>
    $('table').dataTable()
</script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#new_attendance_btn').click(function(){
				uni_modal("New Time Record/s","manage_attendance.php",'mid-large')
			})
		});
</script>