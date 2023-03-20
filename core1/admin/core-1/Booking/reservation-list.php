<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  
?>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)]   bg-white">
             
             <h1 class="p-5 font-bold text-xl">Reservation List</h1>
                <div class="relative w-full p-4">
                          <div class="relative overflow-x-scroll">
                              <table id="created-req-table" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body" class="overflow-x-scroll ">
                                                <tr>
                                                    <td>charles1</td>
                                                    <td>charles2</td>
                                                    <td>charles3</td>
                                                    <td>charles4</td>
                                                </tr>
                                                <tr>
                                                    <td>charles1</td>
                                                    <td>charles2</td>
                                                    <td>charles3</td>
                                                    <td>charles4</td>
                                                </tr>
                                                <tr>
                                                    <td>charles1</td>
                                                    <td>charles2</td>
                                                    <td>charles3</td>
                                                    <td>charles4</td>
                                                </tr>
                                                <tr>
                                                    <td>charles1</td>
                                                    <td>charles2</td>
                                                    <td>charles3</td>
                                                    <td>charles4</td>
                                                </tr>
                                                <tr>
                                                    <td>charles1</td>
                                                    <td>charles2</td>
                                                    <td>charles3</td>
                                                    <td>charles4</td>
                                                </tr>
                                        </tbody>
                                      <tfoot>
                                          <tr>
                                          <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
          
              </div>
              <!-- content end -->
      </div>
  </div>

  <script>
       $('#created-req-table').DataTable();
  </script>
<?php
 include("$dir/layout/header.php")
?>