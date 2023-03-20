<?php
include ('db_connect.php');

$ss = $conn->query("SELECT * FROM departments");
while($row=$ss->fetch_assoc()){
    $sta[$row['deptId']] = $row['departmentName'];    
}
$stusss = $conn->query("SELECT * FROM recruitment_status WHERE id = '12' OR id= '13' OR id='14' OR id='15'");
while($row=$stusss->fetch_assoc()){
    $ssd[$row['id']] = $row['status_label'];    
}



?>



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-header">
           Claims and Reimbursement list
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <colgroup>
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="text-center">Reimbursement ID</th>
                            <th class="text-center">ID</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Middle Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Notes</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $stats = $conn->query("SELECT * FROM recruitment_status order by id asc");
                        $stat_arr[0] = "New";
                        while ($row = $stats->fetch_assoc()) {
                            $stat_arr[$row['id']] = $row['status_label'];
                        }
                        $awhere = '';
                        if(isset($_GET['pid']) && $_GET['pid'] >= 0){
                            $awhere = " where a.process_id = '".$_GET['pid']."' ";
                        }
                        if(isset($_GET['position_id']) && $_GET['position_id'] > 0){
                            if(empty($awhere))
                            $awhere = " where a.position_id = '".$_GET['position_id']."' ";
                            else
                            $awhere .= " and a.position_id = '".$_GET['position_id']."' ";

                        }
                        $application = $conn->query("SELECT application.id as id, application.firstname as fname, application.middlename as mname, application.lastname as lname, 
                        recruitment_status.status_label as lbl,claims.title as tt,claims.dateReimbursment as dd,claims.amt as amt,
                        claims.note as note,claims.statu_claims as sc,claims.claimId as ci FROM hiretbl INNER JOIN 
                        application ON hiretbl.id = application.id INNER JOIN 
                        recruitment_status ON hiretbl.process_id = recruitment_status.id INNER JOIN claims ON hiretbl.id = claims.id ");
                        while($row=$application->fetch_assoc()):
                        ?>
                        <tr>
                            <td class="text-center" ><?php echo $row['ci'] ?></td>
                            <td class="text-center" ><?php echo $row['id'] ?></td>
                            <td><?php echo $row['fname']?></td>
                            <td><?php echo $row['mname']?></td>
                            <td><?php echo $row['lname']?></td>
                            <td><?php echo $row['tt']?></td>
                            <td><?php echo $row['dd']?></td>
                            <td><?php echo $row['amt']?></td>
                            <td><?php echo $row['note']?></td>
                            <td><?php echo $row['sc']?></td>
                            <!-- <td><?php echo $stat_arr[$row['process_id']] ?></td> -->
                            <td class="text-center">
                            <!-- <a href="#" data-id='<?php echo $row['id']?>' class="userinfo btn btn-outline-warning btn-rounded"><i class="fas fa-eye"></i></a> -->
                            <a href="#" data-id='<?php echo $row['id']?>'class="deletebtn btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <!-- <form action="includes/insertHire.php" method="POST"> -->
                            <!-- <button type="submit"  name="add" class="btn btn-primary">Confirm</button> -->
                            <!-- <a href="#" name="add"data-id='<?php echo $row['id']?>'class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a> -->
                        <!-- </form> -->
                        </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Hired</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="manage-claims1">
                <div class="modal-body">
                    <div class="row form-group">
                            <div class="col-md-4">
                                <label for="" class="control-label">ID</label>
                                <input type="text" id="cid" name="cid" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="control-label">ID</label>
                                <input type="text" id="hid" name="hid" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="control-label">First Name</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="control-label">Middle Name</label>
                                <input type="text" id="mname" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="control-label">Last Name</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                            
                            <div class="col-md-4">
                                <label for="" class="control-label">title</label>
                                <input type="text" id="pos" name="pos" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="control-label">date</label>
                                <input type="text" id="date" name="date" class="form-control">
                            </div>
                            <div class="col-md-4">
                            <label for="exampleFormControlTextarea1">Notes</label>
                                <textarea class="form-control" id="note" name="note" id="exampleFormControlTextarea1" rows="3" required></textarea>

                        </div>
                            <!-- <div class="col-md-4">
                                <label for="" class="control-label">Department</label>
                                <select class="form-select" aria-label="Default select example" name="dept_id">
                                                <?php foreach($sta as $k => $v): ?>
						                        <option value="<?php echo $k ?>" <?php echo isset($process_id) && $process_id == $k ? "selected" : '' ?>><?php echo $v ?></option>
					                        <?php endforeach; ?>
                                                </select>
                            </div> -->
                            <div class="col-md-4">
                            <label for="exampleFormControlInput2">Status</label>
                            <select name="cars" id="cars" class="form-control">
                            <option value="pending">pending</option>
                            <option value="approved">approved</option>
                            </select>
                            </div>
                    </div>
                    <input type="hidden" name="delete_id" id="delete_id">
                    
                    <!-- <h4>Do you want to Delete this Data ??</h4> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" > Cancel</button>
                    <button type="submit" name="addHired" class="btn btn-primary edit_scat"data-status_label="<?php echo $row['status'] ?>" >Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/datatables/datatables.min.js"></script>
<script src="assets/js/initiate-datatables.js"></script>
<!-- <script>
    $(document).ready(function{
        $('.deployinfo').on('click',function(){
            $('#deploymodal').modal('show');
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                $('#lname').val(data[1]);
        })
    })
</script> -->

<script>
$('table').dataTable()


        $('.deletebtn').on('click',function(){
                $('#deletemodal').modal('show');
                
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();
                console.log(data);
                $('#cid').val(data[0]);
                $('#hid').val(data[1]);
                $('#fname').val(data[2]);
                $('#mname').val(data[3]);
                $('#lname').val(data[4]);
                $('#pos').val(data[5]); 
                $('#date').val(data[6]);
                $("#note").val(data[7]);
                $("#cars").val(data[8]);
        });


        $('#manage-claims1').submit(function(e){
		e.preventDefault()
		// start_load()
		$.ajax({
			url:'ajax.php?action=update_reimbursement',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})

    </script>