<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_for_not_integ.php");

?>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
     <!-- Tailwind -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

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
    .account-link:hover { background: #3d68ff; }
    .button:hover { background: #aa1111; }
    .button1:hover { background: #018608; }
    .button2:hover { background: #c7d2fe; text-decoration:underline;}


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
        background-color: #c7d2fe ;
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
        background:#c7d2fe !important;
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
        background-color: #667eea !important;
        /*bg-indigo-500*/
    }

</style>

</head>
<body  class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)]   bg-white">
                      
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Budget Request</h1>
                        <!-- Content goes here! 😁 -->

                        <div class="relative flex flex-col text-center w-full h-auto bg-white rounded font-family-karla">

                            <h1 class=" text-black text-3xl  p2.5 px-3 py-4">BUDGET REQUEST FORM</h1>
                            <hr class="my-3 text-gray-800">

                            <div class=" relative px-6 item-center md:w-1/8 md:h-16">
                                <h1 class="  text-black text-1xl  p2.5 px-3 py-4 italic">
                                    This form must be completed and signed by the Controller before the request will be considered for
                                    funding by the President. Upon approval by the President, the form must be returned to the Controller
                                    before any budget transfers will be completed.
                                </h1>
                            </div>

                            <div class=" relative px-6 item-center md:w-1/8 md:h-16 py-6 " >
                                <h1 class=" relative px-6 item-center md:w-1/8 md:h-16  text-black text-1xl  p2.5 px-3 py-4 ">
                                    The following department requests additional budget funds for its fiscal year 2022-2023 budget
                                indicated below: 
                                </h1>
                            </div>

                            <div class="relative flex flex-row ">
                                <input class="border-solid border-2 border-gray-500 outline-none rounded py-2 px-3 my-5 ml-6 w-3/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="Department Name" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                                <input class="border-solid border-2 border-gray-500 outline-none rounded py-2 px-3 my-5 ml-6 w-3/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="Dept Code" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                                <input class="border-solid border-2 border-gray-500 outline-none rounded py-2 px-3 my-5 ml-6 w-3/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="Amount" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                            </div>


                            <div class="relative my-8 px-6 flex flex-col item-center md:w-1/8 md:h-30 text-black font-family-karla ">
                                <span class="  text-left">Additional funding requested for the following purpose: 
                                    <div class="w-full">
                                        <div class="relative w-full min-w-[200px] h-60 ">
                                            <textarea class=" border-solid border-2 border-gray-500 peer h-full  w-full resize-none rounded-[7px] border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline-none transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50 relative"
                                            placeholder="Write Your Purpose Here: "></textarea>
                                        </div>
                                    </div>
                                </span>
                            </div>

                            <div class=" relative  px-6 item-center md:w-1/8 md:h-16 " >
                                <h1 class="text-left ">
                                    Allocate requested funds to the following GL accounts if approved: 
                                </h1>
                            </div>

                            <div class=" relative px-6 flex item-center md:w-1/8 md:h-16 " >
                                <h1 class="text-left ">
                                    Account #  (####-##-####-####-####)  
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>

                                </h1>
                                <div class="w-20 h-14  mx-2   "></div>

                                <h2 class="text-top py-0">
                                    Amount ($#,###.##)  
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>
                                    <div class="w-50 h-3  mx-2 border-b-2 border-gray-400"></div>

                                </h2>
                            </div>

                            <div class=" relative px-6 mt-8 flex item-center md:w-1/8 md:h-26 text-black font-family-karla ">
                                <span class=" py-9">Signature of requester: </span>
                                <!-- <div class="w-60 h-14  mx-2 border-b-2 border-gray-400 "></div> -->

                                <input type="file" class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-3 my-5 ml-6 w-4/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                                <span class=" py-9 px-5">Date:</span>
                                <input type="date" class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-1 my-5 w-4/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                            </div>
                            
                            <div class="  px-6 flex item-center md:w-1/8 md:h-16 text-black font-family-karla">
                                <span class=" py-9">Controller’s Acknowledgement: </span>
                                <input class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-3 my-5 ml-6 w-3/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />

                                <span class=" py-9 px-5">Date:</span>
                                <input type="date" class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-1 my-5 w-3/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                            </div>

                            <div class=" relative py-4 px-6 flex flex-col item-center md:w-1/8 md:h-16 text-black font-family-karla">
                                <div class="w-full h-2   border-b-2 border-gray-800 "></div>
                                <div class="w-full h-2  border-b-2 border-gray-800 "></div>
                            </div>
                            
                            <div class=" relative  px-6 item-center md:w-1/8 md:h-16 " >
                                <h1 class="text-left ">
                                    The above request for additional budget funds is: 
                                </h1>
                            </div>
        
                            <div class=" relative flex  px-6 item-center md:w-1/8 md:h-6" >
                                <input type="checkbox" class="w-10 h-5 border-solid border-2 border-gray-500 outline-none  checkbox1">
                                <h1 class="text-left ">
                                    Approved. (Transfer the approved amount from the President’s Contingencies). 
                                </h1>
                            </div>

                            <div class=" relative flex  px-6 item-center md:w-1/8 md:h-6" >
                                <input type="checkbox" class="w-10 h-5 border-b-2 border-gray-400  checkbox1">
                                <h1 class="text-left ">
                                    Additional Funding is for Current Year Only
                                </h1>
                            </div>

                            <div class=" relative flex  px-6 item-center md:w-1/8 md:h-6" >
                                <input type="checkbox" class="w-10 h-5 border-b-2 border-gray-400  checkbox1">
                                <h1 class="text-left ">
                                    Additional Funding is for Current and Future Years 
                                </h1>
                            </div>

                            <div class=" relative flex  px-6 item-center md:w-1/8 md:h-6" >
                                <input type="checkbox" class="w-10 h-5 border-b-2 border-gray-400  checkbox1">
                                <h1 class="text-left ">
                                    Not Approved.
                                </h1>
                            </div>

                            <div class="  px-6 flex item-center md:w-1/8 md:h-20 text-black font-family-karla">
                                <span class=" py-9">President’s Signature: </span>
                                <input type="file" class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-3 my-5 ml-6 w-4/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />

                                <span class=" py-9 px-5">Date:</span>
                                <input type="date" class="border-solid border-2 border-gray-500 outline-none rounded h-12 py-2 px-1 my-5 w-4/12 focus:border-2 focus:border-blue-500" 
                                    type="text" 
                                    placeholder="" 
                                    @media (min-width: 768px) class="w-1/2" 
                                    @media (min-width: 1024px) class="w-1/3" 
                                />
                            </div>

                            <hr class="my-3 text-gray-800">
                            <h1 class=" text-black text-3xl  p2.5 px-3 py-4"></h1>
                            <div class="relative w-full p-2 h-10 flex justify-center font-family-bebas text-md">
                                <button class=" flex items-center p2.5 flex item-center mx-2 text-2xl px-3 nav-item rounded-lg opacity-100 shadow-lg shadow-purple-500/50 bg-indigo-100 text-black">
                                    
                                    SEND TO></button>
                                <button class="flex items-center p2.5 flex item-center rounded-lg mx-2 text-2xl   nav-item  px-3 opacity-100 bg-indigo-100 text-black">
                                    <img src="../IndexDashboard/svg/disbusment.svg" class="mr-3 text-sm h-5">
                                    
                                    PRINT</button>
                            </div>

                        </div>
                        <!-- END OF REQUEST FORM ________________________________________________________________________________________________________________________________________________________-->

            <!--Container-->
            <div class="container w-full md:w-4/5 xl:w-full  mx-auto px-2 mt-8">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white text-center">

                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">Department Name</th>
                                <th data-priority="2">Dept Code</th>
                                <th data-priority="3">Amount</th>
                                <th data-priority="4">Date</th>
                                <th data-priority="5">Status</th>
                                <th data-priority="6">Action</th>
                                <!-- <th data-priority="6">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Human Resource II</td>
                                    <td>Hr0002</td>
                                    <td>500,000</td>
                                    <td>12/02/22</td>
                                    <td id="id1" class="text-green-600 text-lg font-bold tracking-widest text-center">Pending.....</td>

                                <!--Action____________________________________________________-->
                                <td class="flex justify-center relative min-w-full p2.5 w-20 ">
                                       <?php  if($_SESSION['user']['department_id'] == '7'){?>
                                            <button onclick="textRejected03()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">View</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                        <?php }?>
                                    </td>
                                <!--____________________________________________________Action-->
                                </tr>

                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

                                <tr>
                                    <td>LogisticI</td>
                                    <td>Log0001</td>
                                    <td>800,000</td>
                                    <td>12/02/22</td>
                                    <td id="id2" class="text-green-600 text-lg font-bold tracking-widest text-center">Pending.....</td>

                                <!--Action____________________________________________________-->
                                <td class="flex justify-center relative min-w-full p2.5 w-20 ">
                                       <?php  if($_SESSION['user']['department_id'] == '7'){?>
                                            <button onclick="textRejected03()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">View</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                        <?php }?>
                                    </td>
                                <!--____________________________________________________Action-->
                                
                                </tr>

                                <tr>
                                    <td>Logistic II</td>
                                    <td>Log0002</td>
                                    <td>750,000</td>
                                    <td>12/02/22</td>
                                    <td id="id3" class="text-green-600 text-lg font-bold tracking-widest text-center">Pending.....</td>
                                <!--Action____________________________________________________-->

                                <td class="flex justify-center relative min-w-full p2.5 w-20 ">
                                       <?php  if($_SESSION['user']['department_id'] == '7'){?>
                                            <button onclick="textRejected03()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">View</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                        <?php }?>
                                    </td>
                                <!--____________________________________________________Action-->
                                    
                                </tr>

                                <tr>
                                    <td>Core Transaction I</td>
                                    <td>CT0001</td>
                                    <td>1,000,000</td>
                                    <td>12/02/22</td>
                                    <td id="id4" class="text-green-600 text-lg font-bold tracking-widest text-center">Pending.....</td>
                                <!--Action____________________________________________________-->
                                    
                                    <td class="flex justify-center relative min-w-full p2.5 w-20 ">
                                       <?php  if($_SESSION['user']['department_id'] == '7'){?>
                                            <button onclick="textRejected03()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">View</button>
                                            <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                        <?php }?>
                                    </td>
                                <!--____________________________________________________Action-->

                                </tr>
                            </tbody>

                        </table>

                        
                        <div class="flex flex-row h-1/6  item-center bg-purple-300 min-w-full rounded-b-lg  z-10 p-2 mt-4">
                             <?php  if($_SESSION['user']['department_id'] == '7'){?>
                                <div class="flex p2.5 min-w-full h-1/2 mt-4 px-5 text-center text-lg  font-semibold   ">
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2">Edit</button>
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Refresh</button>
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Add</button>
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Send</button>
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Post</button>
                                    <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Print</button>
                                 </div>
                            <?php }?>
                        </div>

                    </div>
                    <!--/Card-->


                </div>
                <!--/container-->
                
            <!-- hahahahah
                <div class="w-full h-1/6 mt-12 ">

                    <div class="bg-white overflow-y-auto">
                        <table class="min-w-full bg-white  ">
                            <thead class="bg-purple-300 text-black ">
                                <tr>
                                    <th class="w-1/4 text-left py-3 px-3 uppercase font-semibold text-sm text-center">Dept Code</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-center">Amount</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-center">Status</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-200 text-center">
                                <tr>
                                    <td>CT0001</td>
                                    <td>1,000,000</td>
                                    <td id="id1" class="text-green-600 text-lg font-bold tracking-widest">Pending.....</td>
                                    <td class="flex justify-center relative min-w-full p2.5 w-20 ml-4  ">
                                        <button onclick="textRejected()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                        <button onclick="textApproved()" class="flex-item-center   w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                    </td>
                                    
                                </tr>
                            
                                <tr class="bg-gray-100">
                                    <td>Log0002</td>
                                    <td>750,000</td>
                                    <td id="id2" class="text-green-600 text-lg font-bold tracking-widest">Pending.....</td>
                                    <td class="flex justify-center relative min-w-full p2.5 w-20 ml-4 ">
                                        <button onclick="textRejected01()"  class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                        <button onclick="textApproved01()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Hr0002</td>
                                    <td>500,000</td>
                                    <td id="id3" class="text-green-600 text-lg font-bold tracking-widest">Pending.....</td>
                                    <td class="flex justify-center relative min-w-full p2.5 w-20 ml-4 ">
                                        <button onclick="textRejected02()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                        <button onclick="textApproved02()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                    </td>
                                </tr>

                                <tr class="bg-gray-100">
                                    <td>Log0001</td>
                                    <td>800,000</td>
                                    <td id="id4" class="text-green-600 text-lg font-bold tracking-widest">Pending.....</td>
                                    <td class="flex justify-center relative min-w-full p2.5 w-20 ml-4 ">
                                        <button onclick="textRejected03()" class="flex-item-center  w-24  mx-2 text-lg button rounded-md opacity-100 shadow-lg shadow-red-500/50 bg-red-500 text-white">Reject</button>
                                        <button onclick="textApproved03()" class="flex-item-center    w-24  mx-2 text-lg button1 rounded-md opacity-100 shadow-lg shadow-green-500/50 bg-green-500 text-white">Approve</button>
                                    </td>
                                </tr>

                            
                                </tbody>
                            </table>
                        </div>
                       
                    </div> -->
                    </main>
            
                </div>                  


         </div>
             <!-- content end -->
    </div>
</div>



<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<script>

var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();


            [...document.getElementsByClassName("checkbox1")].forEach((parameter1, parameter2)=> {

parameter1.addEventListener("change",() => {func1(parameter1,parameter2);});

});

function func1(tite,parameter3) {

console.log(tite);

if (parameter3 < 3) {
    document.getElementsByClassName("checkbox1")[0].checked = true;
    document.getElementsByClassName("checkbox1")[1].checked = true;
    document.getElementsByClassName("checkbox1")[2].checked = true;
    document.getElementsByClassName("checkbox1")[3].checked = false;
}


else {

    if (tite.checked == true) {
        document.getElementsByClassName("checkbox1")[0].checked = false;
        document.getElementsByClassName("checkbox1")[1].checked = false;
        document.getElementsByClassName("checkbox1")[2].checked = false;
    }
}
}
    </script>

<script>
        function textRejected() {
            document.getElementById("id1").innerHTML = "Rejected";
            document.getElementById("id1").style.color = "red";
        }

        function textApproved() {
            document.getElementById("id1").innerHTML = "Approved";
            document.getElementById("id1").style.color = "Green";
        }

        function textRejected01() {
            document.getElementById("id2").innerHTML = "Rejected";
            document.getElementById("id2").style.color = "red";
        }

        function textApproved01() {
            document.getElementById("id2").innerHTML = "Approved";
            document.getElementById("id2").style.color = "Green";
        }

        function textRejected02() {
            document.getElementById("id3").innerHTML = "Rejected";
            document.getElementById("id3").style.color = "red";
        }

        function textApproved02() {
            document.getElementById("id3").innerHTML = "Approved";
            document.getElementById("id3").style.color = "Green";
        }

        function textRejected03() {
            document.getElementById("id4").innerHTML = "Rejected";
            document.getElementById("id4").style.color = "red";
        }

        function textApproved03() {
            document.getElementById("id4").innerHTML = "Approved";
            document.getElementById("id4").style.color = "Green";
        }
    </script>

    



    

                          
<?php
 include("$dir/layout/header.php")
?>