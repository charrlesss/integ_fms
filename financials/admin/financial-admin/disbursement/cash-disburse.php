<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

 ?>


    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->


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
        .nav-item:hover { background: #c7d2fe; }
        .account-link:hover { background: #3d68ff; }
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
			background: rgb(196 181 253) !important;
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
			background-color: #5e35b1 !important;
			/*bg-indigo-500*/
		}
    </style>

<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com/3.2.4"></script>
        <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
            },
        };
    </script>
</head>
<body class="bg-purple-200 font-family-karla select-none">

      
<div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] ">

        

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">

                <div class="realtive flex flex-row flex-wrap flex-grow mt-2  w-full h-auto rounded font-family-karla"> 
                    <div class="w-full md:w-1/4 p-3 flex flex-col ">
                        <h1 class="  text-3xl text-black pb-6">Cash Disburse</h1>
                    </div>

                    <div class="w-full md:w-9/12 p-3 flex flex-col ">
                        <div class="realtive w-full p-2 h-10 flex justify-center text-black rounded-lg font-family-bebas text-md bg-purple-300">

                        <!--History Budget Disbursed____________________________________________________________________________________________________________________________ -->

                            <button 
                            
                                class=" flex items-center p2.5 flex item-center mx-2  px-3 nav-item rounded-lg  opacity-100 shadow-lg shadow-purple-500/50 bg-indigo-100 "
                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#historyt"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/history.svg" class="mr-3 text-sm h-5">
                                    History Budget Disbursed
                            
                            </button>

                            <!-- Modal -->
                            <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="historyt"
                                    tabindex="-1"
                                    aria-labelledby="historytLabel"
                                    aria-hidden="true">
                                    <div
                                    data-te-modal-dialog-ref
                                    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[1200px]">
                                    <div
                                        class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
                                        <div
                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <h5
                                            class="text-xl font-medium leading-normal text-gray-800 dark:text-neutral-200"
                                            id="historytLabel">
                                            History Budget Disbursed
                                        </h5>
                                        <button
                                            type="button"
                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                            data-te-modal-dismiss
                                            aria-label="Close">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        </div>
                                        <div class="relative p-4 min-[0px]:overflow-y-auto ">
                                        <p class="px-10 text-center leading-[3rem]">
                                            hdzhshshgsh
                                            
                                        </p>
                                        </div>
                                        <div
                                        class="mt-auto flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <button
                                            type="button"
                                            class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                            data-te-modal-dismiss>
                                            Close
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <!--____________________________________________________________________________________________________________________________ History Budget Disbursed-->


                        <!-- Annual Funds____________________________________________________________________________________________________________________________ -->


                              <button 
                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item text-1xl  px-3 opacity-100 bg-indigo-100 "
                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#annual"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                <img src="../IndexDashboard/svg/disbusment.svg" class="mr-3 text-sm h-5">
                                    Annual Funds
                            
                            </button>

                            <!-- Modal -->
                            <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="annual"
                                    tabindex="-1"
                                    aria-labelledby="annualLabel"
                                    aria-hidden="true">
                                    <div
                                    data-te-modal-dialog-ref
                                    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[1200px]">
                                    <div
                                        class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
                                        <div
                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <h5
                                            class="text-xl font-medium leading-normal text-gray-800 dark:text-neutral-200"
                                            id="annualLabel">
                                            Annual Funds
                                        </h5>
                                        <button
                                            type="button"
                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                            data-te-modal-dismiss
                                            aria-label="Close">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        </div>
                                        <div class="relative p-4 min-[0px]:overflow-y-auto ">
                                        <p class="px-10 text-center leading-[3rem]">
                                           TAetaettateataetaetae
                                        </p>
                                        </div>
                                        <div
                                        class="mt-auto flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <button
                                            type="button"
                                            class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                            data-te-modal-dismiss>
                                            Close
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <!--____________________________________________________________________________________________________________________________  Annual Funds-->

                        <!-- Record To General Ledger____________________________________________________________________________________________________________________________ -->


                            <button 
                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100 bg-indigo-100 "
                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#record"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/general.svg" class="mr-3 text-sm h-5">
                                    Record To General Ledger

                            </button>

                            <!-- Modal -->
                            <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="record"
                                    tabindex="-1"
                                    aria-labelledby="recordLabel"
                                    aria-hidden="true">
                                    <div
                                    data-te-modal-dialog-ref
                                    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[1200px]">
                                    <div
                                        class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
                                        <div
                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <h5
                                            class="text-xl font-medium leading-normal text-gray-800 dark:text-neutral-200"
                                            id="recordLabel">
                                            Record To General Ledger 
                                        </h5>
                                        <button
                                            type="button"
                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                            data-te-modal-dismiss
                                            aria-label="Close">
                                            <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                        </div>
                                        <div class="relative p-4 min-[0px]:overflow-y-auto ">
                                        <p class="px-10 text-center leading-[3rem]">
                                           srgrfgjkylkgylglkjlhjlhjlkkhlklj
                                        </p>
                                        </div>
                                        <div
                                        class="mt-auto flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
                                        <button
                                            type="button"
                                            class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                            data-te-modal-dismiss>
                                            Close
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        <!--____________________________________________________________________________________________________________________________  Record To General Ledger-->

                        </div>
                    </div>
                </div>

                <!-- Content goes here! 😁 -->

                <!--Container-->
                <div class="container w-full md:w-4/5 xl:w-full  mx-auto px-2">

                    <!--Title-->
                    <!-- <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
                        Responsive <a class="underline mx-2" href="https://datatables.net/">DataTables.net</a> Table
                    </h1> -->


                    <!--Card-->
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


                        <table id="example" class="stripe hover " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead >
                                <tr >
                                    <th data-priority="1">Payment Date</th>
                                    <th data-priority="2">Check Number</th>
                                    <th data-priority="3">Payment Account</th>
                                    <th data-priority="4">Payee</th>
                                    <th data-priority="5">Description</th>
                                    <th data-priority="6">Account Coding</th>
                                    <th data-priority="7">Ammount</th>
                                    <th data-priority="8">Account Payable</th>
                                    <th data-priority="9">Cash</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td>2-jan-22</td>
                                    <td>1457</td>
                                    <td>₱500,305.00</td>
                                    <td>Arrow Eectronics</td>
                                    <td>Account Payable</td>
                                    <td>2000</td>
                                    <td></td>
                                    <td>₱500,305.00</td>
                                    <td>(₱500,305.00)</td>
                                </tr>

                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing) -->

                                <tr >
                                    <td>2-jan-22</td>
                                    <td>1458</td>
                                    <td>₱53,032.35</td>
                                    <td>Office Deport</td>
                                    <td>Office Supplies</td>
                                    <td>5408</td>
                                    <td>₱53,032.35</td>
                                    <td></td>
                                    <td>₱53,032.35</td>
                                </tr>

                                <tr>
                                    <td>3-jan-22</td>
                                    <td>1459</td>
                                    <td>₱83,132.00</td>
                                    <td>CBRE</td>
                                    <td>Office Rent</td>
                                    <td>5405</td>
                                    <td>₱83,132.00</td>
                                    <td></td>
                                    <td>₱83,132.00</td>
                                </tr>

                                <tr>
                                    <td>4-jan-22</td>
                                    <td>1460</td>
                                    <td>₱10,502.23</td>
                                    <td>Costco</td>
                                    <td>Office Supplies</td>
                                    <td>5408</td>
                                    <td>₱10,502.23</td>
                                    <td></td>
                                    <td>₱10,502.23</td>
                                </tr>

                                <tr>
                                    <td>15-jan-22</td>
                                    <td>1461</td>
                                    <td>₱1,320,045</td>
                                    <td>JaniKing</td>
                                    <td>Account Payable</td>
                                    <td>5419</td>
                                    <td></td>
                                    <td>₱1,320,045</td>
                                    <td>(₱1,320,045)</td>
                                </tr>


                                <tr>
                                    <td>20-jan-22</td>
                                    <td>1462</td>
                                    <td>₱1,020,345</td>
                                    <td>Best Buy</td>
                                    <td>Account Payable</td>
                                    <td>2000</td>
                                    <td></td>
                                    <td>₱1,020,345</td>
                                    <td>(₱1,020,345)</td>
                                </tr>

                                <tr>
                                    <td>23-jan-22</td>
                                    <td>1463</td>
                                    <td>₱15,602</td>
                                    <td>bank of the phil.</td>
                                    <td>Interest Expense-BofA</td>
                                    <td>9903</td>
                                    <td>₱15,602</td>
                                    <td></td>
                                    <td>₱15,602</td>
                                </tr>

                                <tr>
                                    <td>31-jan-22</td>
                                    <td>1465</td>
                                    <td>₱18,702</td>
                                    <td>Home Depot</td>
                                    <td>Inventory Supplies</td>
                                    <td>8825</td>
                                    <td></td>
                                    <td>₱18,702</td>
                                    <td>(₱18,702)</td>
                                </tr>

                               
                            </tbody>

                        </table>


                    </div>
                    <!--/Card-->

                </div>
                <!--/container-->

                <!-- -create disbursement request table -->
                <div class="w-full h-1/6 mt-12 ">

                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Approved funded budget request
                    </p>

                    <div class="bg-white overflow-y-auto">
                        <table class="min-w-full bg-white ">
                            <thead class="bg-purple-300 text-black">
                                <tr>
						            <th data-priority="1">Department Name</th>
                                    <th class="w-1/4 text-left py-3 px-3 uppercase font-semibold text-sm text-center">Dept Code</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-center">Amount</th>
						            <th data-priority="4">Date</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-100 text-center">
                                <tr>
                                    <td>Core Transaction I</td>
                                    <td>CT0001</td>
                                    <td>1,000,000</td>
						            <td>12/02/22</td>
                                    <td id="id1" class="text-green-600 text-lg font-bold tracking-widest">Approved</td>
                                   
                                    
                                </tr>
                               
                                <tr class="bg-gray-200">
                                    <td>Logistic II</td>
                                    <td>Log0002</td>
                                    <td>750,000</td>
						            <td>12/02/22</td>
                                    <td id="id2" class="text-green-600 text-lg font-bold tracking-widest">Approved</td>
                                    
                                </tr>
            
                                <tr>
                                    <td>Human Resource II</td>
                                    <td>Hr0002</td>
                                    <td>500,000</td>
                                    <td>12/02/22</td>
                                    <td id="id3" class="text-green-600 text-lg font-bold tracking-widest">Approved</td>
                                   
                                </tr>
            
                                <tr class="bg-gray-200">
                                    <td>LogisticI</td>
                                    <td>Log0001</td>
                                    <td>800,000</td>
                                    <td>12/02/22</td>
                                    <td id="id4" class="text-green-600 text-lg font-bold tracking-widest">Approved</td>
                                    
                                </tr>
            
                                
                            </tbody>
                        </table>
                    </div>
            
                </div>
                <!--_______________________________________________________________________________END -create disbursement request table -->

                 <!-- -Create disbursement record table -->
                 <div class=" w-full h-1/6 mt-12 ">

                    <div class=" bg-white overflow-y-auto">
                        <div class="min-w-full py-4 px-3 text-2xl bg-purple-300 text-black">Cash Disbursement Journal</div>
                        <div class="text-center min-w-full py-4 px-3 text-2xl  ">Payment Analysis</div>
                        <table class="min-w-full bg-white ">
                            <thead class="bg-purple-300 text-black">
                                <tr>
						            <th class="border-r-2 border-purple-100" >Department Name</th>
						            <th class="border-r-2 border-purple-100">Check Number</th>
                                    <th class="border-r-2 border-purple-100" >Date</th>
						            <th class="border-r-2 border-purple-100">Ref#</th>
						            <th class="border-r-2 border-purple-100">Description</th>
						            <th class="border-r-2 border-purple-100">Ledger Folio</th>
						            <th class="border-r-2 border-purple-100">Amount</th>
						            <th class="border-r-2 border-purple-100">Accounts Payable</th>
						            <th class="border-r-2 border-purple-100">Cash Purchases</th>
						            <th class="border-r-2 border-purple-100">Others</th>

                                </tr>
                            </thead>
                            <tbody class="bg-gray-100 text-center">
                                <tr>
                                    <td>Core Transaction I</td>
                                    <td>1234</td>
						            <td>12/02/22</td>
                                    <td>4654</td>
                                    <td>Supplier A</td>
                                    <td>AP1</td>
                                    <td>1,000,000</td>
                                    <td>1,000,000</td>
                                    <td></td>
                                    <td></td>

                                </tr>
                               
                                <tr class="bg-gray-200">
                                    <td>Logistic II</td>
                                    <td>2234</td>
						            <td>12/02/22</td>
                                    <td>4152</td>
                                    <td>Cash Purchases</td>
                                    <td>GL4200</td>
                                    <td>750,000</td>
                                    <td></td>
                                    <td>750,000</td>
                                    <td></td>
                                    
                                </tr>
            
                                <tr>
                                    <td>Human Resource II</td>
                                    <td>3234</td>
						            <td>12/02/22</td>
                                    <td>6654</td>
                                    <td>Supplier C</td>
                                    <td>AP2</td>
                                    <td>500,000</td>
                                    <td>500,000</td>
                                    <td></td>
                                    <td></td>
                                </tr>
            
                                <tr class="bg-gray-200">
                                    <td>LogisticI</td>
                                    <td>4234</td>
						            <td>12/02/22</td>
                                    <td>6152</td>
                                    <td>Cash Purchases</td>
                                    <td>GL3400</td>
                                    <td>800,000</td>
                                    <td></td>
                                    <td>800,000</td>
                                    <td></td>
                                </tr>
            
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-row h-1/4  item-center bg-purple-300 min-w-full rounded-b-lg  z-10">
            
                        <div class="flex p2.5 min-w-full h-1/2 mt-4 px-5 text-center text-lg text-black font-semibold   ">
            
                            <button class="flex justify-center w-1/6 rounded-lg mx-1  bg-indigo-100 button2">Edit</button>
                            <button class="flex justify-center w-1/6 rounded-lg mx-1  bg-indigo-100 button2 ">Refresh</button>
                            <button class="flex justify-center w-1/6 rounded-lg mx-1  bg-indigo-100 button2 ">Add</button>
                            <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Send</button>
                            <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Post</button>
                            <button class="flex justify-center w-1/6 rounded-lg mx-1 bg-indigo-100 button2 ">Print</button>
            
                        </div>
                    </div>
            
                </div>
                <!--_______________________________________________________________________________END -Create disbursement record table -->


            </main>
    
        </div>

         
    </div>
     
</div>
</div>
        

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>

var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();

    </script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>   

 <?php
 include("$dir/layout/header.php")
?>