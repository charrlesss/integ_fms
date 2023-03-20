<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");
  $REQTOBENDOR = '/fms';
?>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
            <div class="w-full min-h-[calc(100%-80px)] bg-gray-200">
              <h1 class="p-4 pt-5 font-bold text-xl">Review Of Request</h1>

                <div class="relative w-full pt-5 pl-20 pr-20">
                  <div class="relative p-5 border-2 border-t-4 border-gray-400 bg-gray-300 shadow-2xl rounded-md">
                    <table class=" w-full text-sm text-left p-2">
                      <thead class="border-b font-m uppercase ">
                        <tr>
                          <th>Req. #</th>
                          <th>Customer Name</th>
                          <th>Deparment</th>
                          <th>Item Needs</th>
                          <th>Quantity</th>
                          <th>Req. Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="p-5">
                        <tr>
                          <td>FM1</td>
                          <td>David Parker</td>
                          <td>Core 1</td>
                          <td>Tables</td>
                          <td>10pcs</td>
                          <td>March 15, 2023</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <h1 class="p-4 pt-20 font-bold text-xl">Supplier</h1>
                    
                    <div class="p-3 pr-10 text-sm w-full h-auto flex justify-end ">
                        <div class="flex gap-x-4">
                        <a class="bg-blue-600 shadow-2xl p-3 text-white rounded-md font-semibold" href="<?php echo "$REQTOBENDOR/logistic-2/Pages/Vendor-Portal/Supplier.php"?>">
                        Request Supplier
                        </a>
                        <a class="bg-blue-600 shadow-2xl p-3 text-white rounded-md font-semibold" href="<?php echo "$REQTOBENDOR/logistic-2/Pages/Vendor-Portal/Posted_products.php"?>">
                         View Supplier
                        </a>
                        </div>
                    </div>
                
                <div class="relative w-full pt-5 pl-10 pr-10">
                  <div class="relative p-5 border-2 border-t-4 border-gray-400 bg-gray-300 shadow-2xl rounded-md">
                    <table id="created-req-table" class="w-full text-sm text-left p-2">
                      <thead class="border-b font-m uppercase ">
                        <tr>
                          <th>Req. #</th>
                          <th>Contact Name</th>
                          <th>Company Deparment</th>
                          <th>Types Of Supply</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Time/Date</th>
                          <th>Purpose</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="table-body" class="p-5">
                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "fms_integ";
                        
                          // Craete connection
                          $connection = new mysqli($servername, $username, $password, $database);

                          //Check connection
                          if($connection -> connect_error){
                            die("Connection failed:" . $connection -> error);
                          }

                          // read all row form database table
                          $sql = "SELECT * FROM supplier";
                          $result = $connection->query($sql);
                         

                          if(!$result){
                             die("Invalid query:" . $connection->error);
                          }

                           // read data of each row
                           while($row = $result->fetch_assoc()){
                            echo "
                          <tr>
                            <td class='pt-5 pb-2'>$row[id]</td>
                            <td class='pt-5 pb-2'>$row[firstname]$row[lastname]</td>
                            <td class='pt-5 pb-2'>$row[company_deparment]</td>
                            <td class='pt-5 pb-2'>$row[types_of_supply]</td>
                            <td class='pt-5 pb-2'>$row[contact_number]</td>
                            <td class='pt-5 pb-2'>$row[email]</td>
                            <td class='pt-5 pb-2'>$row[address]</td>
                            <td class='pt-5 pb-2'>$row[time] / $row[date]</td>
                            <td class='pt-5 pb-2'>$row[purpose]</td>
                            <td>
                                <div class='text-center font-semibold'>
                                    <div class='p-2 pl-2 pr-2 border-2 border-gray-400 bg-gray-300 rounded-md'>
                                        <a href=''>View</a>
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