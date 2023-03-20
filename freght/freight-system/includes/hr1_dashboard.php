<?php
include 'db_connect.php';
include 'visible_user.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>

    <div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a>Welcome back <?php 
                    // echo $row['usern'];
                     ?> !</a>
                </div>
                    <hr>
                        <div class="row ml-2 mr-2">
                            <div class="col-md-3 offset-md-1">
                                <div class="card bg-primary text-white mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <div class="text-white-75 small">
                                                   Number of Employee                            
                                                </div>
                                                <div class="text-lg font-weight-bold">
                                                    <?php 
                                        	            $applicant = $conn->query("SELECT application.id as emp,application.firstname as fname, application.middlename as mname, application.lastname as lname, departments.departmentName as dep, vacancy.position as pos,recruitment_status.status_label as lbl 
                                                        FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                                                        recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'");
                                        	            echo $applicant->num_rows;
                                        	        ?>
                                                </div>
                                            </div>
                                            <i class="fa fa-user-tie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-warning text-white mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <div class="text-white-75 small">
                                                   Number of Leave                            
                                                </div>
                                                <div class="text-lg font-weight-bold">
                                                    <?php 
                                                        $vacancies = $conn->query("SELECT application.id as emp,application.firstname as fname, application.middlename as mname, application.lastname as lname, departments.departmentName as dep, vacancy.position as pos,recruitment_status.status_label as lbl 
                                                        FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                                                        recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'");
                                                        echo $vacancies->num_rows;
                                                    ?>
                                                </div>
                                            </div>
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card bg-warning text-white mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <div class="text-white-75 small">
                                                    Active Vacancies  
                                                                          
                                                </div>
                                                <div class="text-lg font-weight-bold">
                                                    <?php 
                                                        $vacancies = $conn->query("SELECT application.id as emp,application.firstname as fname, application.middlename as mname, application.lastname as lname, departments.departmentName as dep, vacancy.position as pos,recruitment_status.status_label as lbl 
                                                        FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                                                        recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'");
                                                        echo $vacancies->num_rows;
                                                    ?>

                                                   
                                                </div>
                                            </div>
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
