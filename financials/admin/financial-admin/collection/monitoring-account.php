<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  
?>
 <style>

main { background:#c7d2fe; }
.header {background:white;}
.textColor {color: black;}


@import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
.font-family-karla { font-family: bebas neue; }
.font-family-bebas {font-family: bebas neue;}
.bg-sidebar { background: #3d68ff; }
.cta-btn { color: white; }
.upgrade-btn { background: #1947ee; }
.upgrade-btn:hover { background:#f57f17; }
.active-nav-link { background: #5e35b1; }
.nav-item:hover { background: #5e35b1; }
.account-link:hover { background: #3d68ff; }
</style>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>
<body  class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)]   bg-white">
             
             <h1 class="p-5 font-bold text-xl">Monitoring Account</h1>
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