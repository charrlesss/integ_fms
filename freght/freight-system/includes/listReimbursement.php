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
                        Employee List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <colgroup>
                        
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">Employee ID</th>
                                    <th class="text-center">First Name</th>
                                    <th class="text-center">Middle Name</th>
                                    <th class="text-center">Last Name</th>
                                    <th class="text-center">Department</th>
                                    <th class="text-center">Position</th>
                                    <th class="text-center">Status Contractualization</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                               $application = $conn->query("SELECT application.id as emp,application.firstname as fname, application.middlename as mname, application.lastname as lname, departments.departmentName as dep, vacancy.position as pos,recruitment_status.status_label as lbl 
                               FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                               recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'");
                               while($row=$application->fetch_assoc()):
                               ?>
                               <tr>
                                   <td><?php echo $row['emp']?></td>
                                   <td><?php echo $row['fname']?></td>
                                   <td><?php echo $row['mname']?></td>
                                   <td><?php echo $row['lname']?></td>
                                   <td><?php echo $row['dep']?></td>
                                   <td><?php echo $row['pos']?></td>
                                   <td><?php echo $row['lbl']?></td>
                               </tr>
                               <?php endwhile; ?>    
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