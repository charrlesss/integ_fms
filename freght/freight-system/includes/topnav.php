<?php
// include 'db_connect.php'
// include_once('User.php');
 
// $user = new User();
 
//     $sql = "SELECT * FROM loguser WHERE id='".$_SESSION['user']."'";
//     $row = $user->details($sql);
// //fetch user data
// $sql = "SELECT * FROM users INNER JOIN student_info ON users.studentNo = student_info.studentNo INNER JOIN old_student ON users.studentNo = old_student.studentNo WHERE users.id = '".$_SESSION['user']."'";
// $row = $user->details($sql);

?>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
                    <button type="button" id="sidebarCollapse" class="btn btn-light">
                        <i class="fas fa-bars"></i><span></span>
                        
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ms-auto">
                                <li class="nav-item dropdown">
                                    <div class="nav-dropdown">
                                        <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="<?php echo "/fms/assets/profile/".$_SESSION['user']['profile'] ?>" alt="asdas" style='border-radius:100%; width:35px; height:35px'>
                                            <span>
                                            <?php echo $_SESSION['user']['firstname'] ?>
                                        </span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>

                                        
                                        </a>
                                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                                <ul class="nav-list">
                                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                                    <div class="dropdown-divider"></div>
                                                    <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                                </ul>
                                            </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </nav>