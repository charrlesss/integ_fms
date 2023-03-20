<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src="jscript/js0001.js"></script>
<link rel="stylesheet" type="text/css" href="collection css/css0001.css" />

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
        .nav-item:hover { background:  #c7d2fe; }
        .account-link:hover { background: #3d68ff; }


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
            <main class="w-full flex-grow p-6">

                <div class="realtive flex flex-row flex-wrap flex-grow mt-2  w-full h-auto rounded font-family-karla"> 
                    <div class="w-full md:w-1/4 p-3 flex flex-col ">
                        <h1 class="text-3xl text-black pb-6">Collection</h1>
                    </div>

                    <div class="w-full md:w-9/12 p-3 flex flex-col ">
                        <div class="realtive w-full p-2 h-10 flex justify-center font-family-bebas text-md rounded-lg bg-purple-300 ">

                        
                         <!-- HISTORY SALE___________________________________________________________________________________________________________________________________ -->

                         <button 
                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100 bg-indigo-100 text-black"

                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#historysale"
                                data-te-ripple-init
                                data-te-ripple-color="light">
                                
                                <img src="../IndexDashboard/svg/history.svg" class="mr-3 text-sm h-5">


                                    History Sales
                            
                        </button>

                            <!-- Modal -->
                            <div
                                data-te-modal-init
                                class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                id="historysale"
                                tabindex="-1"
                                aria-labelledby="historysaleLabel"
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
                                        id="historysaleLabel">
                                        History Sales
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
                                        <!-- Lorem ipsum, dolor sit amet consectetur adipisicing elit.dsadnasldhkashdkjasghdkjsagdjgsj -->

                             
                                    </p>
                                    </div>

                                    <div class="flex justify-center">
                                        <div>
                                            <div class="relative" data-te-dropdown-ref>
                                            <button
                                                class="flex items-center whitespace-nowrap rounded bg-purple-300 px-8 pt-2.5 pb-2 text-md font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out nav-item hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-200 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-400 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none"
                                                type="button"
                                                id="dropdownMenuButton1"
                                                data-te-dropdown-toggle-ref
                                                aria-expanded="false"
                                                data-te-ripple-init
                                                data-te-ripple-color="light">
                                                CHOOSE HISTORY SALES
                                                <span class="ml-6 w-6">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 18 18"
                                                    fill="currentColor"
                                                    class="h-5 w-5">
                                                    <path
                                                    fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                    clip-rule="evenodd" />
                                                </svg>
                                                </span>
                                            </button>
                                            <ul
                                                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                                aria-labelledby="dropdownMenuButton1"
                                                data-te-dropdown-menu-ref>
                                                <li>

                                                <!-- _______________________________________________________________ -->
                                                <button
                                                    class="block  w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black nav-item active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 nav-item"
                                                    data-te-dropdown-item-ref
                                                    type="button"
                                                    class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                                    data-te-toggle="modal"
                                                    data-te-target="#bobotanga"
                                                    data-te-ripple-init
                                                    data-te-ripple-color="light">
                                                    CORE TRANSACTION I
                                                </button>

                                                    <!-- Modal -->
                                                    <div
                                                    data-te-modal-init
                                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                                    id="bobotanga"
                                                    tabindex="-1"
                                                    aria-labelledby="bobotangaLabel"
                                                    aria-hidden="true">
                                                    <div
                                                        data-te-modal-dialog-ref
                                                        class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                                                        <div
                                                        class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                        <div
                                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                            <h5
                                                            class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                            id="bobotangaLabel">
                                                            Modal title
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
                                                        <div class="relative overflow-y-auto p-4">
                                                            <p>
                                                            This is some placeholder content to show the scrolling behavior
                                                            for modals. We use repeated line breaks to demonstrate how
                                                            content can exceed minimum inner height, thereby showing inner
                                                            scrolling. When content becomes longer than the predefined
                                                            max-height of modal, content will be cropped and scrollable
                                                            within the modal.
                                                            </p>
                                                            <div style="height:800px;"></div>
                                                            <p>This content should appear at the bottom after you scroll.</p>
                                                        </div>
                                                        <div
                                                            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                            <button
                                                            type="button"
                                                            class="inline-block rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                                            data-te-modal-dismiss
                                                            data-te-ripple-init
                                                            data-te-ripple-color="light">
                                                            Close
                                                            </button>
                                                            <button
                                                            type="button"
                                                            class="ml-1 inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                                            data-te-ripple-init
                                                            data-te-ripple-color="light">
                                                            Save changes
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <!-- _______________________________________________________________ -->
                                                </li>

                                        

                                                <li>
                                                <a
                                                    class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black nav-item active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 nav-item"
                                                    href="#"
                                                    data-te-dropdown-item-ref
                                                    >ASSET MANAGEMENT</a
                                                >
                                                </li>
                                                <li>
                                                <a
                                                    class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-black nav-item active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 nav-item"
                                                    href="#"
                                                    data-te-dropdown-item-ref
                                                    >LOGISTIC</a
                                                >
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
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
                        <!-- ___________________________________________________________________________________________________________________________________end of HISTORY SALE -->

                        <!-- pending sales modal___________________________________________________________________________________________________________________________________________ -->
                             <button
                             
                                class=" flex items-center p2.5 flex item-center mx-2  px-3 nav-item rounded-lg opacity-100 shadow-lg shadow-purple-500/50 bg-indigo-100 text-black"

                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#pendingsales"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/history.svg" class="mr-3 text-sm h-5">

                                    Pending Sales
                            
                            </button>

                                 <!-- Modal -->
                                 <div
                                      data-te-modal-init
                                      class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                      id="pendingsales"
                                      tabindex="-1"
                                      aria-labelledby="pendingsalesLabel"
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
                                              id="pendingsalesLabel">
                                              Pending Sales
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
                                              Lorem ipsum, dolor sit amet consectetur adipisicing elit.

                                              <!-- table Sqles Reports -->
                                                <div class="w-full ">
                                                    <p class="text-xl pb-3 flex items-center">
                                                        <i class="fas fa-list mr-3"></i> Sales Reports
                                                    </p>
                                                    <div class="bg-white overflow-auto">
                                                        <table class="min-w-full bg-white">
                                                            <thead class="bg-purple-300 text-black">
                                                                <tr>
                                                                    <th class="w-1/6 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Department Name</th>
                                                                    <th class="w-1/8 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Product Name</th>
                                                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jan-15</th>
                                                                    <th class=" text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Feb-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Mar-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Apr-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">May-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jun-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">jul-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Aug-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Sep-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Oct-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Nov-15</th>
                                                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Dec-15</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-gray-200">
                                                            
                                                                <td class="py-1 px-3 font-bold "></td>
                                                            </tbody>
                                                            <tbody class="text-gray-700">
                                                                <tr class="bg-gray-200">
                                                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item1</td>
                                                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                                                        <span class="border-b-2 border-gray-100">Total</span>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>40,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>40,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>40,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>40,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>40,000</div>
                                                                    </td>
                                                                    <td class=" text-left border-r-2 border-gray-100">
                                                                        <div>1000</div>
                                                                        <div>500</div>
                                                                        <div>50,000</div>
                                                                    </td>
                                                                
                                            
                                                                    </td>           
                                                                </tr>
                                                                <tr class="bg-gray-100">
                                                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item2</td>
                                                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                                                        <span class="border-b-2 border-gray-100">Total</span>
                                                                    </td>
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
                                                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item3</td>
                                                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                                                        <span class="border-b-2 border-gray-100">Total</span>
                                                                    </td>
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

                            <!-- ___________________________________________________________________________________________________________________________________end of pending sales -->

                            <!-- incoming sales___________________________________________________________________________________________________________________________________ -->

                            <button 
                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100 bg-indigo-100 text-black"

                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#incomingsales"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/disbusment.svg" class="mr-3 text-sm h-5">

                                    Incoming Sales
                            
                            </button>

                                <!-- Modal -->
                                <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="incomingsales"
                                    tabindex="-1"
                                    aria-labelledby="incomingsalesLabel"
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
                                            id="incomingsalesLabel">
                                            Incoming Sales
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
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.dsadnasldhkashdkjasghdkjsagdjgsj
                                            
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
                            <!-- ___________________________________________________________________________________________________________________________________end of incoming sales -->


                            <!-- Transmit Data___________________________________________________________________________________________________________________________________ -->

                            
                            <button 
                                class="flex items-center p2.5 flex item-center rounded-lg mx-2  nav-item  px-3 opacity-100 bg-indigo-100 text-black"

                                type="button"
                                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-toggle="modal"
                                data-te-target="#transmitdata"
                                data-te-ripple-init
                                data-te-ripple-color="light">

                                <img src="../IndexDashboard/svg/collection.svg" class="mr-3 text-sm h-5">
                                    Transmit Data
                            
                            
                            </button>

                            <!-- Modal -->
                            <div
                                    data-te-modal-init
                                    class="fixed top-0 left-0 z-[1055] hidden h-full w-full  overflow-y-auto overflow-x-hidden outline-none"
                                    id="transmitdata"
                                    tabindex="-1"
                                    aria-labelledby="transmitdataLabel"
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
                                            id="transmitdataLabel">
                                            Transmit Data
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
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.dsadnasldhkashdkjasghdkjsagdjgsj
                                            
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
                            <!-- ___________________________________________________________________________________________________________________________________end of incoming sales -->
                            
                        </div>
                    </div>
                </div>

                <!-- Content goes here! 😁 -->

                <!-- table Sqles Reports -->
                <div class="w-full ">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Sales Reports
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-purple-300 text-black">
                                <tr>
                                    <th class="w-1/6 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Department Name</th>
                                    <th class="w-1/8 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Product Name</th>
                                    <th class="w-1/12 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jan-15</th>
                                    <th class=" text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Feb-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Mar-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Apr-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">May-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Jun-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">jul-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Aug-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Sep-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Oct-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Nov-15</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Dec-15</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-200">
                            
                                <td class="py-1 px-3 font-bold "></td>
                            </tbody>
                            <tbody class="text-gray-700">
                                <tr class="bg-gray-200">
                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item1</td>
                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                        <span class="border-b-2 border-gray-100">Total</span>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>40,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>40,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>40,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>40,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>40,000</div>
                                    </td>
                                    <td class=" text-left border-r-2 border-gray-100">
                                        <div>1000</div>
                                        <div>500</div>
                                        <div>50,000</div>
                                    </td>
                                 
            
                                    </td>           
                                </tr>
                                <tr class="bg-gray-100">
                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item2</td>
                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                        <span class="border-b-2 border-gray-100">Total</span>
                                    </td>
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
                                    <td class="text-left py-2 px-3 border-r-2 border-gray-100">Core Transaction I</td>
                                    <td class=" text-left py-2 px-3 border-r-2 border-gray-100">Item3</td>
                                    <td class="flex flex-col text-left  border-r-2 border-gray-100">
                                        <span class="border-b-2 border-gray-100">Price per unit</span>
                                        <span class="border-b-2 border-gray-100">Unit sold</span>
                                        <span class="border-b-2 border-gray-100">Total</span>
                                    </td>
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

                <!-- table Denomination -->
                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Denomination
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-purple-300 text-black">
                                <tr>
                                    <th class="w-1/6 text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Ammount</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">1000</th>
                                    <th class=" text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">500</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">100</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">50</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">20</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">10</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">5</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">2</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">1</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Total Check</th>
                                    <th class="text-left py-2 px-3 uppercase font-semibold text-sm border-r-2 border-gray-100">Balance</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                            
                                <td class="py-1 px-3 font-bold "></td>
                            </tbody>
                            <tbody class="text-gray-700">
                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">999.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">4</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">999</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">201.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">201</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">302.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">3</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">302</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">403.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">4</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">403</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>
                               
                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">504.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">504</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">605.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">605</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-100">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">706.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">2</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">706</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>

                                <tr class=" bg-gray-200">
                                    <td class=" text-center py-2 px-3 border-r-2 border-gray-100">807.00</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">3</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">1</td>
                                    <td class=" text-center border-r-2 border-gray-100">0</td>
                                    <td class=" text-center border-r-2 border-gray-100">807</td>
                                    <td class=" text-center border-r-2 border-gray-100">-</td>
                                    </td>           
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>

                <div class="flex flex-row flex-wrap flex-grow mt-2">
                    <div class="w-full md:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-gray-900 border border-gray-800 rounded shadow">
                            <div class="border-b border-gray-800 p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5">
                                <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-7"), {
                                        "type": "bar",
                                        "data": {
                                            "labels": ["January", "February", "March", "April"],
                                            "datasets": [{
                                                "label": "Page Impressions",
                                                "data": [10, 20, 30, 40],
                                                "borderColor": "rgb(255, 99, 132)",
                                                "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                            }, {
                                                "label": "Adsense Clicks",
                                                "data": [5, 15, 10, 30],
                                                "type": "line",
                                                "fill": false,
                                                "borderColor": "rgb(54, 162, 235)"
                                            }]
                                        },
                                        "options": {
                                            "scales": {
                                                "yAxes": [{
                                                    "ticks": {
                                                        "beginAtZero": true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <!--/Graph Card-->
                    </div>


                    <div class="w-full md:w-1/2 p-3">
                        <!--Graph Card-->
                        <div class="bg-gray-900 border border-gray-800 rounded shadow">
                            <div class="border-b border-gray-800 p-3">
                                <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                            </div>
                            <div class="p-5">
                                <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                                <script>
                                    new Chart(document.getElementById("chartjs-0"), {
                                        "type": "line",
                                        "data": {
                                        "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                        "datasets": [{
                                                        "label": "Views",
                                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                                        "fill": false,
                                                        "borderColor": "rgb(75, 192, 192)",
                                                        "lineTension": 0.1
                                                    }]
                                                },
                                                "options": {}
                                            });
                                        </script>
                                    </div>
                                </div>
                                <!--/Graph Card-->
                            </div>
                        </div>
                    </main>
            
                </div>
          
              </div>
              <!-- content end -->
      </div>
  </div>

     <!-- AlpineJS -->
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>   
<?php
 include("$dir/layout/header.php")
?>