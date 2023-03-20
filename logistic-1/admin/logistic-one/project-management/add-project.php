<?php
include("../../../dotenv.php");

include("$dir/layout/header.php");
include("$dir/admin/not-authenticated_user.php");
include("$dir/admin/visible_user.php");

?>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</head>

<body>

  <?php

include("$dir/admin/logistic-one/project-management/condbproject.php");


  $subject = "";
  $starteddate = "";
  $targetdate = "";
  $stage = "";
  $status ="";
  $description ="";
  $budget = "";

  $errorMessage = "";
  $successMessage = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subject = $_POST["subject"];
    $starteddate = $_POST["starteddate"];
    $targetdate = $_POST["targetdate"];
    $stage = $_POST["stage"];
    $status = $_POST["status"];
    $description = $_POST["description"];
    $budget = $_POST["budget"];

    do {
      if (empty($subject) || empty($starteddate) || empty($targetdate) || empty($stage) || empty($budget) || empty($description)) {
        $errorMessage = "All the Fields are Required";
        break;
      }

      // add new client to database
      $sql = "INSERT INTO projectlist (subject, Starteddate, targetdate, stage, description, status, budget)" .
        "VALUES ('$subject', '$starteddate', '$targetdate', '$stage','$description','$status', '$budget')";
      $result = $connection->query($sql);
      if (!$result) {
        $errorMessage = "Invalid query" . $connection->error;
        break;
      }

      $subject = "";
      $starteddate = "";
      $targetdate = "";
      $stage = "";
      $description = "";
      $budget = "";

      $successMessage = "Project added correctly";

      header("location: $url/admin/logistic-one/project-management/add-project.php");
      exit;
    } while (false);
  }

  ?>
  <div class="min-h-screen flex">
    <?php include("$dir/layout/sidebar-nav.php") ?>
    <div class="bg-indigo-50 flex-grow  ">
      <?php include("$dir/layout/header-nav.php") ?>

      <!-- content start -->
      <div class="w-full min-h-[calc(100%-80px)] bg-gray-200">
        <h2 class="text-xl p-3 uppercase font-bold">New Project</h2>
        <div class="pl-20 pr-20">
          <div class="p-3 w-full border-2 border-t-4 border-gray-400 bg-gray-100 shadow-2xl rounded-md">
            <form method="POST" class="pl-5 rounded-lg relative">

              <?php

              if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning text-center alert-dismissible fade show' role='alert'>
                      <strong>$errorMessage</strong>
                    <button type='button' class='btn-close pl-4 '  data-bs-dismiss='alert' aria-label='close'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-x' viewBox='0 0 16 16'>
                        <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                      </svg>
                    </button>
                </div>
                ";
              }

              ?>

              <div class="row mb-3 justify-center grid grid-cols-3 text-sm ">
                <div class="relative">
                  <i class="col-sm-3 col-form-label pb-1">Project Name</i>
                  <div class="col-sm-6">
                    <input type="text" name="subject" class=" h-9 w-[280px] rounded-md" value="<?php echo $subject; ?>">
                  </div>
                </div>

                <div class="relative">
                  <i class="col-sm-3 col-form-label pb-1">Projected Start Date</i>
                  <div class="col-sm-6">
                    <input type="Date" name="starteddate" class=" h-9 w-[280px] rounded-md" value="<?php echo $starteddate; ?>">
                  </div>
                </div>

                <div class="relative">
                  <i class="col-sm-3 col-form-label pb-1">Project End Date</i>
                  <div class="col-sm-6">
                    <input type="date" name="targetdate" class=" h-9 w-[280px]  rounded-md" value="<?php echo $targetdate; ?>">
                  </div>
                </div>
              </div>


              <div class="row mb-3 justify-center grid grid-cols-3 space-x-8 text-sm">
                  <div class="ralative">
                    <i class="col-sm-3 col-form-label pb-1">Location of Project</i>
                    <div class="col-sm-6">
                      <input type="text" name="stage" class="h-9 w-[310px] rounded-md" value="<?php echo $stage; ?>">
                    </div>
                  </div>

                  <div class="relative">
                    <i class="col-sm-3 col-form-label pb-1">Total Estimated Cost</i>
                    <div class="col-sm-6">
                      <input type="text" name="budget" class="h-9 w-[200px] rounded-md" value="<?php echo $budget; ?>">
                    </div>
                  </div>
                  

              </div>
              <div class="">
                <div class="relative">
                  <i class="col-sm-3 col-form-label pb-1">Description</i>
                  <div class="col-sm-6">
                    <textarea type="text" name="description" class="h-20 text-xs w-[300px] rounded-md" value="<?php echo $description; ?>"></textarea>
                    </div>
                </div>
                <div class="">
                <div class="text-right uppercase font-semibold">
                  <div class="offset-sm-3 col-sm-3">
                    <button type="submit" class="p-1 px-8 uppercase border-2 text-sm text-white bg-blue-600 rounded-md">Submit</button>
                  </div>
                </div>
                </div>
              </div>
                

            </form>

          </div>
        </div>
        <h2 class="text-xl p-3 uppercase pt-10 font-bold">Task List</h2>
        
              <div class="grid grid-cols-2">
                
                <div class="relative w-full pt-2 pl-5">
                  <div class="relative p-2 border-2 border-t-4 border-gray-400 bg-slate-200 shadow-2xl rounded-md">
                    <table class=" w-full text-sm text-left p-2">
                      <thead class="border-b font-semibold  ">
                        <tr>
                          <th>No.</th>
                          <th>Project Name</th>
                          <th>Time</th>
                          <th>Created Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="p-5">
                      <?php

                        include("$dir/admin/logistic-one/project-management/condbproject.php");


                        //Check connection
                        if($connection -> connect_error){
                            die("Connection failed:" . $connection -> error);
                        }

                        // read all row form database table
                        $sql = "SELECT * FROM projectlist";
                        $result = $connection->query($sql);


                        if(!$result){
                            die("Invalid query:" . $connection->error);
                        }
                        // read data of each row
                        while($row = $result->fetch_assoc()){
                            echo "
                          <tr>
                            <td>$row[id]</td>
                            <td>$row[subject]</td>
                            <td>$row[time]</td>
                            <td>$row[created_at]</td>
                            <td>
                              <div class='space-x-2 space-y-2 text-center font-semibold'>
                                <div class='p-1 pl-1 pr-1 border-2 border-purple-300 bg-purple-100 rounded-md'>
                                  <a href=<?php echo '$url/admin/logistic-one/project-management/delete.php'?>Delete</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                            ";
                        }
                        
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="relative w-full pt-2 pl-10 pr-20">
                  <div class="relative p-2 border-2 border-t-4 border-gray-400 bg-slate-200 shadow-2xl rounded-md">
                    <h2 class="text-m p-1 pb-2 uppercase bg-gray-300 rounded-md pl-2 font-bold">Recent</h2>
                    <table class=" w-full text-xs text-left p-3">
                      <thead class="border-b font-semibold uppercase ">
                        <tr>
                          <th>No. #</th>
                          <th>Project Name</th>
                          <th>Status</th>

                        </tr>
                      </thead>
                      <tbody class="p-5">
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>    

              </div>
        
      </div>
      <!-- content end -->
    </div>
  </div>
    <?php
    include("$dir/layout/header.php")
    ?>