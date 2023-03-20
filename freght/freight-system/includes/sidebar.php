


<?php

$url ="/fms"?>
<nav id="sidebar" style="width:500px">
                <!-- Logo with subsystem -->
                    <div class="header-title" style='display:flex; padding:0 5px;'>
                        <img src="<?php  echo "$url/assets/img/logo.png"?>" alt="" style='width:auto; height:100px'>
                        <div style="color:rgb(99 102 241)">
                            <h1 style="font-size:2rem; font-weight:bold">FREIGHT</h1>
                            <p style="font-size:14px">Human Resource 1</p>
                        </div>
                    </div>
                <!-- end of logo part-->
                <ul class="list-unstyled components text-secondary">
                    <li class="">
                        <a href="index.php?page=includes/hr1_dashboard"><i class="fas fa-home"></i>HR Analytics</a>
                    </li>
                    <li class="">
                    <a href="index.php?page=includes/listReimbursement"><i class="fas fa-user-plus"></i>Core Human Capital Management</a>
                    </li>
                    <li class="">
                    <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-home"></i>Time and Attendance</a>
                    <ul class="collapse list-unstyled" id="authmenu">
                        <li>
                            <a href="index.php?page=includes/attendance"><i class="fas fa-lock"></i>Attendance</a>
                        </li>
                        <!-- <li>
                            <a href="index3.php"><i class="fas fa-user-plus"></i>Status Category</a>
                        </li> -->
                    </ul>
                    </li>
                    <!-- <li class="">
                    <a href="#authmenu1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-home"></i>Payroll</a>
                    <ul class="collapse list-unstyled" id="authmenu1">
                        <li>
                        <a href="index4.php"><i class="fas fa-home"></i>Deployment</a>
                        </li>
                        <li>
                        <a href="index7.php"><i class="fas fa-home"></i>List of Employee</a>
                        </li>
                    </ul>
                    </li> -->
                    <li class="">
                    <a href="index.php?page=includes/payroll"><i class="fas fa-home"></i>Payroll </a>
                    </li>
                    <li class="">
                    <a href="index.php?page=includes/compensation"><i class="fas fa-home"></i>Compensation Planning and Administration</a>
                    </li>
                    <li class="">
                    <a href="#authmenu6" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-home"></i>Claims and Reimbursement</a>
                    <ul class="collapse list-unstyled" id="authmenu6">
                        <li>
                        <a href="index.php?page=includes/claimRembur"><i class="fas fa-home"></i>Form</a>
                        </li>
                        <li>
                        <a href="index.php?page=includes/listReimbursement1"><i class="fas fa-home"></i>List of Claims and Reimbursement</a>
                        </li>
                    </ul>
                    </li>
                    <li class="">
                    <a href="index.php?page=includes/leaveMngt"><i class="fas fa-home"></i>Leave Management</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $url."/financials/admin/financial-admin/budget-management/budget-request.php" ?>"><i class="fas fa-home"></i>Request Budget</a>
                    </li>
                </ul>
            </nav>