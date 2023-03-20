<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>
</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] bg-gray-200">
                <h2 class="text-xl p-3 pt-8 uppercase font-bold">Asset Types</h2>

                <div class="pl-5 pr-5 pb-10">
                  <div class="grid grid-cols-5 space-x-2">

                    <div class="bg-purple-700 hover:bg-purple-500 hover:shadow-2xl text-slate-100 pl-3 pr-3 p-1 text-sm font-bold rounded-lg uppercase border-2 border-slate-300 shadow-2xl text-center">
                      <a href="<?php echo "$url/admin/logistic-one/asset-management/asset-document.php"?>">Document</a>
                    </div>
                    <div class="bg-purple-700 hover:bg-purple-500 hover:shadow-2xl text-slate-100 pl-3 pr-3 p-1 text-sm font-bold rounded-lg uppercase border-2 border-slate-300 shadow-2xl text-center">
                      <a href="<?php echo "$url/admin/logistic-one/asset-management/asset-contract.php"?>">Contract</a>
                    </div>
                    <div class="bg-purple-700 hover:bg-purple-500 hover:shadow-2xl text-slate-100 pl-3 pr-3 p-1 text-sm font-bold rounded-lg uppercase border-2 border-slate-300 shadow-2xl text-center">
                      <a href="<?php echo "$url/admin/logistic-one/asset-management/asset-products.php"?>">Products</a>
                    </div>
                    <div class="bg-purple-700 hover:bg-purple-500 hover:shadow-2xl text-slate-100 pl-3 pr-3 p-1 text-sm font-bold rounded-lg uppercase border-2 border-slate-300 shadow-2xl text-center">
                      <a href="<?php echo "$url/admin/logistic-one/asset-management/asset-user.php"?>">User</a>
                    </div>
                    <div class="bg-purple-700 hover:bg-purple-500 hover:shadow-2xl text-slate-100 pl-3 pr-3 p-1 text-sm font-bold rounded-lg uppercase border-2 border-slate-300 shadow-2xl text-center">
                      <a href="<?php echo "$url/admin/logistic-one/asset-management/asset-inventory.php"?>">Inventory</a>
                    </div>
                    
                    
                  </div>
                </div>


                <h2 class="text-lg p-3 uppercase font-semibold">Requesting List</h2>
                <div class="grid grid-cols-2">

                  <div class="relative w-full pt-2 pl-5">
                    <div class="relative p-2 border-2 border-t-4 border-gray-400 bg-slate-200 shadow-2xl rounded-md">
                      <table class=" w-full text-xs text-left p-2">
                            <thead class="border-b font-bold uppercase ">
                              <tr>
                                <th>Request Name</th>
                                <th>Type Of Request</th>
                                <th>Standard</th>
                                <th>Purpose</th>
                                <th>Date/Time</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody class="p-5">
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                  </div>


                  <div class="relative w-full pt-2 pl-5">
                    <div class="relative p-2 border-2 border-t-4 border-gray-400 bg-slate-200 shadow-2xl rounded-md">
                      <table class=" w-full text-xs text-left p-2">
                            <thead class="border-b font-bold uppercase ">
                              <tr>
                                <th>Request Name</th>
                                <th>Type Of Request</th>
                                <th>Standard</th>
                                <th>Purpose</th>
                                <th>Date/Time</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody class="p-5">
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
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