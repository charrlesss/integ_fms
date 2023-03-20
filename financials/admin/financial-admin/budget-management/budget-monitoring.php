<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <!-- Tailwind -->
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

        /* slide */
        .carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
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
<body  class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)]   bg-white">
          <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 ">

              <div class="realtive flex flex-row flex-wrap flex-grow mt-2  w-full h-auto rounded font-family-karla"> 
                    <div class="w-full md:w-1/4 p-3 flex flex-col ">
                        <h1 class="  text-3xl text-black pb-6">Budget Monitoring</h1>
                    </div>

                    <div class="w-full md:w-9/12 p-3 flex flex-col ">
                        <div class="realtive w-full p-2 h-10 flex justify-center font-family-bebas text-black text-md rounded-lg bg-purple-300">

                        <!-- History Budget____________________________________________________________________________________________________________________________ -->
                            <button 
                            
                                class=" flex items-center p2.5 flex item-center mx-2  px-3 nav-item rounded-lg opacity-100 shadow-lg shadow-purple-500/50  bg-indigo-100"
                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#historybudget"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/history.svg" class="mr-3 text-sm h-5">

                                    History Budget

                            </button>

                             <!-- Modal -->
                             <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="historybudget"
                                    tabindex="-1"
                                    aria-labelledby="historybudgetLabel"
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
                                            id="historybudgetLabel">
                                            History Budget
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
                                            BPBOBBOOBOBOBOBOBO
                                            
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
                        <!-- ____________________________________________________________________________________________________________________________End of modal History Budget -->

                        <!-- Allocate____________________________________________________________________________________________________________________________ -->


                              <button 

                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100  bg-indigo-100"
                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#allocate"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/disbusment.svg" class="mr-3 text-sm h-5">
                                    Allocate
                            
                            </button>


                             <!-- Modal -->
                             <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="allocate"
                                    tabindex="-1"
                                    aria-labelledby="allocateLabel"
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
                                            id="allocateLabel">
                                            Allocate
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
                                            TITETITETITETITE
                                            
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
                        <!-- ____________________________________________________________________________________________________________________________ End Of Allocate-->

                        <!-- Notication____________________________________________________________________________________________________________________________ -->

                            <button 

                            class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100  bg-indigo-100"
                            
                            type="button"
                            class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-toggle="modal"
                            data-te-target="#notif"
                            data-te-ripple-init
                            data-te-ripple-color="light">
                                <img src="../IndexDashboard/svg/notif.svg" class="mr-3 text-sm h-5">
                                Notification
                            
                            </button>

                            <!-- Modal -->
                            <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="notif"
                                    tabindex="-1"
                                    aria-labelledby="notifLabel"
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
                                            id="notifLabel">
                                            History Budget
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
                        <!-- ____________________________________________________________________________________________________________________________END OF Notication -->


                        </div>
                    </div>
                </div>

                <!-- Content goes here! 😁 -->

                <div class="h-80">
                    <div class="grid grid-cols-1 md:cols-2 md:grid-cols-3  gap-2 md:gap-2 ">
                        <div class="h-full w-80 rounded-lg border-l-1 border-gray-300 bg-indigo-100">

                            <!--"Container" for the graphs"-->
                            <div class="max-h-sm lg:max-h-3xl xl:max-w-5xl">
        
                                <!--Graph Card-->
        
                                <div class="border-b p-3">
                                    <h5 class="font-bold text-black">Graph</h5>
                                </div>
                                <div class="p-5">
                                    <div class="ct-chart ct-golden-section" id="chart4"></div>
                                </div>
        
                                <!--/Graph Card-->

                            </div>
                        </div>

                        <div class="h-full w-80 rounded-lg border-l-1 border-gray-300 bg-indigo-100">

                            <!--"Container" for the graphs"-->
                            <div class="max-h-sm lg:max-h-3xl xl:max-w-5xl">
        
                                <!--Graph Card-->
        
                                <div class="border-b p-3">
                                    <h5 class="font-bold text-black">Graph</h5>
                                </div>
                                <div class="p-5">
                                    <div class="ct-chart ct-golden-section" id="chart3"></div>
                                </div>
        
                                <!--/Graph Card-->

                            </div>
                        </div>


                        <div class="h-full w-80 rounded-lg  border-l-1  border-red-300 bg-indigo-100">

                            <!--"Container" for the graphs"-->
                            <div class="max-h-sm lg:max-h-3xl xl:max-w-5xl">
        
                                <!--Graph Card-->
        
                                <div class="border-b p-3">
                                    <h5 class="font-bold text-black">Graph</h5>
                                </div>
                                <div class="p-5">
                                    <div class="ct-chart ct-golden-section" id="chart2"></div>
                                </div>
        
                                <!--/Graph Card-->

                            </div>
                        </div>

                    </div>
                </div>

                <!-- SLIDE -->
                <div class="carousel relative shadow-2xl bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full">
                      <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0 bg-purple-300" style="height:140vh;">
                            <div class="">

                                 <!-- table annual baduget -->
                                <div class="w-full ">
                                    <p class="text-xl pb-3 flex items-center">
                                        <i class="fas fa-list mr-3"></i> Annual Budgets
                                    </p>
                                    <div class="bg-white overflow-auto">
                                        <table class="min-w-full bg-white">
                                            <thead class="bg-purple-400 text-white">
                                                <tr>
                                                    <th class="w-1/4 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">INCOME SOURCE</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jan</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Feb</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Mar</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Apr</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">May</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jun</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">jul</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Aug</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Sep</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Oct</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Nov</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Dec</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-gray-700">
                                            
                                                <td class="py-2 px-3 font-bold ">IN HOUSE</td>
                                            </tbody>
                                            <tbody class="text-gray-700">
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">SALES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">FEES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">COMMISSION</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">BENEFITS</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">SERVICE CHARGES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                    
                                                <tr class="bg-gray-100 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100">TOTAL IN HOUSE</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>


                                                <tr class="bg-purple-400 text-white min-w-full">
                                                    <td class="py-2 px-3 font-bold ">BANK</td>
                                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">DIVIDENDS</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">INTEREST</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">REFUNDS</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                <tr class="bg-gray-400 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-gray-100">TOTAL BANKING</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-500 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-400 text-white">TOTAL INCOME</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-600 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-500 text-white">TOTAL EXPENSES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-500 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-400 text-white">YEAR-TO-DATE TOTAL EXPENSES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--END OF ANNUAL  -->

                            </div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                        
                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0 bg-purple-300" style="height:145vh;">
                            <div class="">

                                 <!-- table expenses baduget -->
                                 <div class="w-full ">
                                    <p class="text-xl pb-3 flex items-center">
                                        <i class="fas fa-list mr-3"></i> Expenses
                                    </p>
                                    <div class="bg-white overflow-auto">
                                        <table class="min-w-full bg-white">
                                            <thead class="bg-purple-400 text-white">
                                                <tr>
                                                    <th class="w-1/4 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">EXPENSES - EMPLOYMENT</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jan</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Feb</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Mar</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Apr</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">May</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jun</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">jul</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Aug</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Sep</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Oct</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Nov</th>
                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Dec</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-gray-700">
                                            
                                                <td class="py-2 px-3 font-bold ">PERMANENT</td>
                                            </tbody>
                                            <tbody class="text-gray-700">
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">SALARIES/WAGES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">BONUS PAY</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">INCREASES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">BENEFITS</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">INSURANCE</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">RECRUITMENT</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                    
                                                <tr class="bg-gray-300 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100">TOTAL PERMANENT EMPLOYMENT</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>


                                                <tr class="bg-purple-400 text-white min-w-full">
                                                    <td class="py-2 px-3 font-bold ">CASUAL</td>
                                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OVERTIME</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">CONTRACTOR WAGES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">INCREASES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">BREAKAGE</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td> 
                                                </tr>
                                                <tr class="bg-gray-100">
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">OTHER</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>           
                                                </tr>

                                                <tr class="bg-gray-400 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-gray-200">TOTAL CASUAL EMPLOYMENT</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-500 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-500 text-white">TOTAL EXPENSES - EMPLOYMENT</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-400 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-400 text-white">TOTAL EXPENSES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                                <tr class="bg-gray-500 text-gray-800">
                                                    <td class=" text-right py-2 px-3 font-semibold border-r-2 border-gray-100 bg-purple-500 text-white">YEAR-TO-DATE TOTAL EXPENSES</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">₱-</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                        
                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full text-white text-5xl text-center">Slide 3</div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                
                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>
                        
                    </div>
                </div>
               
                </main>
        
            </div>
                
        </div>
            <!-- content end -->
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script>
        /* Refer to https://gionkunz.github.io/chartist-js/examples.html for setting up the graphs */

        var chartScatter = new Chartist.Line('#chart2', {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
            series: [
                [12, 9, 7, 8, 5, 4, 6, 2, 3, 3, 4, 6],
                [4, 5, 3, 7, 3, 5, 5, 3, 4, 4, 5, 5],
                [5, 3, 4, 5, 6, 3, 3, 4, 5, 6, 3, 4],
                [3, 4, 5, 6, 7, 6, 4, 5, 6, 7, 6, 3]
            ]
        }, {
            low: 0
        });

        chartScatter.on('draw', function(data) {
            if (data.type === 'line' || data.type === 'area') {
                data.element.animate({
                    d: {
                        begin: 500 * data.index,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });

        var chartBar = new Chartist.Bar('#chart3', {
            labels: ['Q1', 'Q2', 'Q3', 'Q4'],
            series: [
                [800000, 1200000, 1400000, 1300000],
                [200000, 400000, 500000, 300000],
                [100000, 200000, 400000, 600000]
            ]
        }, {
            stackBars: true,
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value / 1000) + 'k';
                }
            }
        })

        chartBar.on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                        style: 'stroke-width: 30px'
                    }),
                    data.element.animate({
                        y2: {
                            dur: '0.5s',
                            from: data.y1,
                            to: data.y2
                        }
                    });
            }
        });

        var chartPie = new Chartist.Pie('#chart4', {
            series: [10, 20, 50, 20, 5, 50, 15],
            labels: [1, 2, 3, 4, 5, 6, 7]
        }, {
            donut: true,
            showLabel: true
        });

        chartPie.on('draw', function(data) {
            if (data.type === 'slice') {
                var pathLength = data.element._node.getTotalLength();
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 200,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        fill: 'freeze'
                    }
                };

                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                data.element.animate(animationDefinition, false);
            }
        });
    </script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        
   

  <script>
       $('#created-req-table').DataTable();
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>   

<?php
 include("$dir/layout/header.php")
?>