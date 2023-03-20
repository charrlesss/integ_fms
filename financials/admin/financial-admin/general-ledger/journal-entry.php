<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/visible_user.php");

?>

    <!-- responsive table -->
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
<!-- responsive table -->


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
        .nav-item:hover { background: #5e35b1; }
        .account-link:hover { background:#b39ddb; }   

         /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: black;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: black;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #c7d2fe;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #c7d2fe !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #c7d2fe !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
            
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #5e35b1!important;
            /*bg-indigo-500*/
        }

    </style>
</head>
<body class="bg-purple-200 font-family-karla  select-none">
  
<div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] ">


                <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Journal Entry</h1>

                 <div class="w-full ">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Ledger Table
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-gray-100">
                            <thead class="bg-purple-300 text-black">
                                <tr>
                                    <th class="w-1/4 text-left py-3 px-3 uppercase font-semibold text-sm">Journal Entries</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4 account-link">2-jan-22 / Petty Cash </td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4 account-link">2-june-22 / Cash Sales</td>
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4 account-link">3-july-22 / Account Payable</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4 account-link">4-sept-22 / Account Receivable</td>
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4 account-link">15-Oct-22 / Purchase 10 unit of Laptop</td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4 account-link">20-Feb-22 / Stock Inventory Purchase</td>
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4 account-link">23-Mar-22 / Petty Cash</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="realtive flex justify-end  w-full p-2 h-10  bg-purple-300  font-family-bebas text-md">
                        <button class=" flex items-center p2.5 flex  mx-2 text-2xl px-3 nav-item rounded-lg opacity-100 shadow-lg shadow-purple-900 bg-indigo-100 text-black">
                            
                           Generate ></button>
                          
                    </div>
                </div>

<!-- ___________________________________________________________________________________________________________________________________________ -->



                   <!--Container-->
                   <div class="container w-full md:w-4/5 xl:w-full  mx-auto px-2 py-4">

                    <!--Card-->
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


                        <table id="example" class="stripe hover " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead >
                                <tr >
                                    <th data-priority="1">Date</th>
                                    <th data-priority="2">Transaction Code</th>
                                    <th data-priority="3">Description</th>
                                    <th data-priority="4">Journal Reference</th>
                                    <th data-priority="5">Debit</th>
                                    <th data-priority="6">Credit</th>
                                   
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr >
                                    <td>2-jan-22</td>
                                    <td>1457</td>
                                    <td>Petty Cash</td>
                                    <td>Cash journal</td>
                                    <td>-</td>
                                    <td>200.00</td>
                                   
                                </tr>

                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing) -->

                                <tr >
                                    <td>2-june-22</td>
                                    <td>1458</td>
                                    <td>Cash Sales</td>
                                    <td>Cash journal</td>
                                    <td>2,447.50</td>
                                    <td>-</td>
                                  
                                </tr>

                                <tr>
                                    <td>3-july-22</td>
                                    <td>1459</td>
                                    <td>Account Payable</td>
                                    <td>Cash journal</td>
                                    <td>-</td>
                                    <td>265.00</td>
                                   
                                </tr>

                                <tr>
                                    <td>4-sept-22</td>
                                    <td>1460</td>
                                    <td>Account Receivable</td>
                                    <td>Cash journal</td>
                                    <td>501.25</td>
                                    <td>-</td>
                                    
                                </tr>

                                <tr>
                                    <td>15-Oct-22</td>
                                    <td>1461</td>
                                    <td>Purchase 10 unit of Laptop</td>
                                    <td>Cash journal</td>
                                    <td>-</td>
                                    <td>6,400.00</td>
                                  
                                </tr>


                                <tr>
                                    <td>20-Feb-22</td>
                                    <td>1462</td>
                                    <td>Stock Inventory Purchase</td>
                                    <td>Cash journal</td>
                                    <td>-</td>
                                    <td>1,320.00</td>
                           
                                </tr>

                                <tr>
                                    <td>23-Mar-22</td>
                                    <td>1463</td>
                                    <td>Petty Cash</td>
                                    <td>Cash journal</td>
                                    <td>-</td>
                                    <td>139.00</td>
                                   
                                </tr>

                               
                            </tbody>

                        </table>


                    </div>
                    <!--/Card-->

                </div>
                <!--/container-->

                <!-- Balance sheet________________________________________________________________________________________________ -->
                <div class="realtive flex flex-row flex-wrap flex-grow mt-2  w-full h-auto bg-white rounded font-family-karla"> 
                    <!-- Assets___________________________________________________ -->
                    <div class="w-full md:w-1/2 p-3 flex flex-col"> 
                        <h1 class="font-bold">ASSETS</h1>
                        <hr class="h-1 my-3 bg-gray-500">
                        <!-- Assets -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Cash</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">$ 1,800</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Account Receivable</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">4,600</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Supplies</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">1,100</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Prepaid Insurance</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">1,500</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Equipment</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">25,000</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Accumulated depreciation</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">(7,500)</span>
                            </div>
                        </div>

                        <!--  -->
                        <div class=" flex flex-row flex-wrap mt-20">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start font-bold ">Total Assets</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="font-bold">$26,500</span>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Liabilities ___________________________________________________-->
                    <div class="w-full md:w-1/2 p-3 flex flex-col"> 
                        <h1 class="font-bold">LIABILITIES</h1>
                        <hr class="h-1 my-3 bg-gray-500">
                        <!-- Liabilities  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Notes Paybles</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">$ 5,000</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Account Payable</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">2,500</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Wages Payable</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">1,200</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Unearned Revenues</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">1,300</span>
                            </div>
                        </div>
                        <!--  -->
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start font-bold mx-3">Total Liabilities</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="font-bold">10,000</span>
                            </div>
                        </div>
                        
                        <h1 class="font-bold mt-6">OWNER'S EQUITY</h1>
                        <hr class=" h-1 my-1 bg-gray-500">
                        <div class=" flex flex-row flex-wrap">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start">Owner Investment</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="">16,500</span>
                            </div>
                        </div>

                        <!--  -->
                        <div class=" flex flex-row flex-wrap  mt-5">
                            <div class="w-full md:w-1/2  bg-">
                                <span class="grid justify-items-start font-bold ">Total Liabilities & Owner's Equity</span>
                            </div>
                            <div class="w-full md:w-1/2 text-right">
                                <span class="font-bold">$26,500</span>
                            </div>
                        </div>

                    </div>
                    <!-- ___________________________________________________ -->
                </div>

            </main>

            </div>
              <!-- content end -->
      </div>
  </div>
    

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <script>

        function dropdown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }
        dropdown()

        function aprDropdown() {
            document.querySelector('#submenu1').classList.toggle('hidden');
            document.querySelector('#arrow1').classList.toggle('rotate-0');
        }
        aprDropdown()

        
        function bmDropdown() {
            document.querySelector('#submenu2').classList.toggle('hidden');
            document.querySelector('#arrow2').classList.toggle('rotate-0');
        }
        bmDropdown()

        function cDropdown() {
            document.querySelector('#submenu3').classList.toggle('hidden');
            document.querySelector('#arrow3').classList.toggle('rotate-0');
        }
        cDropdown()

        
        function glDropdown() {
            document.querySelector('#submenu4').classList.toggle('hidden');
            document.querySelector('#arrow4').classList.toggle('rotate-0');
        }
        glDropdown()
        
    </script>

    <!--Responsive table -->
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>
</html>