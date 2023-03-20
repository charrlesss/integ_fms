<?php 
include('db_connect.php');
include 'visible_user_for_integ.php';


?>

<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <span><b>Payroll List</b></span>
                    <?php if($_SESSION['user']['department_id'] == '3'){ ?>
                <a href="#" class="btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-user-shield"></i>Add Payroll</a>
                <?php } ?>
                <div class="modal fade bd-example-modal-xl"  id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">New Payroll</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate accept-charset="utf-8" action="includes/InsertApp.php" method="POST">
                                 <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="" class="control-label">Date From :</label>
                                    <input type="date" class="form-control" name="date_from">
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Date To :</label>
                                    <input type="date" class="form-control" name="date_to">
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Payroll Type :</label>
                                    <select name="type" class="custom-select browser-default" id="">
                                        <option value="1">Monthly</option>
                                        <option value="2">Semi-Monthly</option>
                                    </select>
                                </div>
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
                        
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">Ref No</th>
									<th class="text-center">Date From</th>
									<th class="text-center">Date To</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
									
									$payroll=$conn->query("SELECT * FROM payroll order by date(date_from) desc") or die(mysqli_error());
									while($row=$payroll->fetch_array()){
								?>
                             <tr>
									<td><?php echo $row['ref_no']?></td>
									<td><?php echo date("M d, Y",strtotime($row['date_from'])) ?></td>
									<td><?php echo date("M d, Y",strtotime($row['date_to'])) ?></td>
									<?php if($row['status'] == 0): ?>
									<td class="text-center"><span class="btn btn-sm btn-outline-danger">New</span></td>
									<?php else: ?>
									<td class="text-center"><span class="btn btn-sm btn-outline-success">Calculated</span></td>
									<?php endif ?>
									<td>
                                        <?php if($_SESSION['user']['department_id'] =='3'){?>
                                    <center>
									<?php if($row['status'] == 0): ?>
										 <button class="btn btn-sm btn-outline-primary calculate_payroll" data-id="<?php echo $row['id']?>" type="button">Calculate</button>
									<?php else: ?>
										 <button class="btn btn-sm btn-outline-primary view_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-eye"></i></button>
									<?php endif ?>

										<button class="btn btn-sm btn-outline-primary edit_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-edit"></i></button>
										<button class="btn btn-sm btn-outline-danger remove_payroll" data-id="<?php echo $row['id']?>" type="button"><i class="fa fa-trash"></i></button>
										</center>
                                        <?php }else{?>
                                            <p class='text-center'>Not Available</p>
                                        <?php }?>

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
<script>
    $('.view_payroll').click(function(){
				var $id=$(this).attr('data-id');
				location.href = "index.php?page=includes/payroll_items&id="+$id;
				
			});

     function remove_payroll(id){
			// start_load()
			$.ajax({
				url:'ajax.php?action=delete_payroll',
				method:"POST",
				data:{id:id},
				error:err=>console.log(err),
				success:function(resp){
						if(resp == 1){
							alert("Employee's data successfully deleted","success");
								setTimeout(function(){
								location.reload();

							},0)
						}
					}
			})
		}
    </script>