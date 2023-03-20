<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

  
?>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>

        main { background:#c7d2fe; }
        header {background:white;}
        .textColor {color: black;}


        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: bebas neue; }
        .font-family-bebas {font-family: bebas neue;}
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: white; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background:#f57f17; }
        .active-nav-link { background: #5e35b1; }
        .nav-item:hover { background: #c7d2fe; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)]   bg-white">
          <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Account Payable</h1>

                <!-- Content goes here! 😁 -->

                <!-- table Payble -->
                <div class="w-full ">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Ledger Payable
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">

                            <div class="flex flex-row w-full bg-gray-100 h-16  text-black ">
                                <div class="w-2/6 ">
                                    <div class="text-left text-lg  uppercase my-4 px-2">Current Date: 02/10/23</div>
                                </div>
                                <div class="w-28 px-2 py-2">Total Dues Till Date:</div>
                                <div class="max-w-full px-2 py-5 bg-gray-200 text-green-400">₱ 68,200.00</div>
                                <div class="w-1/3 bg-gray-200"></div>
                            </div>

                            <thead class="bg-purple-300 text-white">
                                <tr>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Date</th>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Invoice Number</th>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Supplier Name</th>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Total Amount</th>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Due Date</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Balance Due</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment Date</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment 1</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment Date</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment 2</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment Date</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Payment 3</th>
                                 
                                </tr>
                            </thead>
                            <tbody class="text-gray-900">
                            
                                <td class="py-1 px-3 font-bold "></td>
                            </tbody>
                            <tbody class="text-gray-700">
                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">02/10/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">1-1005</td>
                                    <td class=" text-center border-r-2 border-gray-100">Supplier 1</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 25,700.00 </td>
                                    <td class=" text-center border-r-2 border-gray-100">02/29/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 7,200.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">02/25/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 10,500.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">02/29/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 3,000.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">05/10/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 5,000.00</td>
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">201.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">256X5</td>
                                    <td class=" text-center border-r-2 border-gray-100">Supplier 2</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 123,000.00 </td>
                                    <td class=" text-center border-r-2 border-gray-100">11/24/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 61,000.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">10/15/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 25,000.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">10/20/2023</td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 15,000.00</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ 22,000.00</td>
                                </tr>

                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>
                               
                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>

                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100">₱ -</td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                    <td class=" text-center border-r-2 border-gray-100"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                    <div class="realtive flex justify-end  w-full p-2 h-10  bg-purple-300  font-family-bebas text-md">
                        <button class=" flex items-center p2.5 flex  mx-2 text-2xl px-3 nav-item rounded-lg opacity-100 shadow-lg shadow-purple-900 bg-indigo-100 text-black">
                            
                            Post to Journal ></button>
                          
                    </div>
                </div>
                
            </main>
    
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