<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>
<body>

<body>
    <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>

            <!-- content start -->
            <div class="w-full min-h-[calc(100%-80px)] bg-slate-100">
                  <h2 class="text-2xl p-5 font-bold">Users Account</h2>
                    
                  <!--<div class="p-10">

                    <form class="pl-10 rounded-lg relative bg-slate-200 p-5" method="POST">

                      <div class="flex text-sm mb-3 space-x-3">
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">First Name</h1>
                          <div class="col-sm-6">
                            <input type="text" name="firstname" class="w-[220px] form-control rounded-md" value="<?php echo $firstname; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Last Name</h1>
                          <div class="col-sm-6">
                            <input type="text" name="lastname" class="w-[220px] form-control rounded-md" value="<?php echo $lastname; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Middle Name</h1>
                          <div class="col-sm-6">
                            <input type="text" name="middlename" class="w-[220px] form-control rounded-md" value="<?php echo $middlename; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="flex text-sm mb-3 space-x-3">

                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Gender</h1>
                          <div class="col-sm-6">
                            <input type="text" name="gender" class="w-[80px] form-control rounded-md" value="<?php echo $gender; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Birthday</h1>
                          <div class="col-sm-6">
                            <input type="date" name="birthdate" class="w-[150px] form-control rounded-md" value="<?php echo $birthdate; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Country</h1>
                          <div class="col-sm-6">
                            <input type="text" name="country" class="w-[209px] form-control rounded-md" value="<?php echo $country; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Contact No.</h1>
                          <div class="col-sm-6">
                            <input type="text" name="contact_number" class="w-[209px] form-control rounded-md" value="<?php echo $contact_number; ?>">
                          </div>
                        </div>

                      </div>

                      <div class="flex text-sm mb-3 space-x-3">

                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Email</h1>
                          <div class="col-sm-6">
                            <input type="email" name="email" class="w-[240px] form-control rounded-md" value="<?php echo $email; ?>">
                          </div>
                        </div>
                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Address</h1>
                          <div class="col-sm-6">
                            <input type="text" name="address" class="w-[430px] form-control rounded-md" value="<?php echo $address; ?>">
                          </div>
                        </div>

                      </div>

                      <div class="flex text-sm mb-3 space-x-3">

                        <div class="row">
                          <h1 class="col-sm-3 col-form-label pb-1">Password</h1>
                          <div class="col-sm-6">
                            <input type="text" name="password" class="w-[240px] form-control rounded-md" value="<?php echo $password; ?>">
                          </div>
                        </div>
                          <div class="col-sm-6 pt-8 pl-5">
                            <input type="file" name="profile" class="w-[240px] form-control rounded-md" value="<?php echo $profile; ?>">
                          </div>

                      </div>

                      <div class="row mb-3 pt-8 uppercase font-bold">
                        <div class="offset-sm-3 col-sm-3">
                          <button type="submit" class="p-2 px-[195px] uppercase border-2 bg-blue-400 rounded-xl">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>-->
                  
             </div> 
          
      </div>
  </div>
            <!-- content end -->
  <script>
       $('#created-req-table').DataTable();
  </script>
<?php
 include("$dir/layout/header.php")
?>