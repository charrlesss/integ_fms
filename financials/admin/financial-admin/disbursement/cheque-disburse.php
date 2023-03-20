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
        .nav-item:hover { background: #5e35b1; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-purple-200 font-family-karla  select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] border border-red-500">
             <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class=" grid justify-items-stretch  w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Cheque Disburse</h1>

                <!-- Content goes here! 😁 -->

                <!-- <div class="container w-full md:w-3/5 xl:w-full  mx-auto px-2 ">
                    <img src="images/images1.jpeg" class="rounded">
                </div> -->

                <div class="realtive flex justify-self-center  flex-col font-semibold text-center max-w-3xl h-auto bg-white rounded font-family-karla mt-5">

                    <div class="flex flex-grow min-w-full ">
                        <span class="py-4 px-3 text-5xl">Petty Voucher Cash</span>
                        <span class="py-10 px-3">NO: </span>
                        <div class="w-40 h-10 mt-4 mx-2 border-b-2 border-gray-400"></div>
                    </div>

                    <div class="flex flex-grow min-w-full  ">
                        <span class="py-7 px-3 ">Date:</span>
                        <div class="w-8/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                        <div class="w-64 h-12  flex item-left px-2  mx-2 border-2 border-gray-400">Ammount:</div>
                    </div>      

                    <div class="flex flex-grow min-w-full  ">
                        <span class="py-7 px-3 ">Paid To:</span>
                        <div class="w-10/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                    </div>

                    <div class="flex flex-grow min-w-full  ">
                        <span class="py-7 px-3 ">For:</span>
                        <div class="w-6/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                        <span class="py-7 px-3 ">Account:</span>
                        <div class="w-3/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                    </div>

                    <div class="flex flex-grow min-w-full ">
                        <span class="py-2 px-3 ">For:</span>
                        <div class="w-6/12 h-6 mt-1 mx-2 border-b-2 border-gray-400"></div>
                        <span class="py-2 px-3 ">Account:</span>
                        <div class="w-3/12 h-6 mt-1 mx-2 border-b-2 border-gray-400"></div>
                    </div>

                    <div class="flex flex-grow min-w-full  ">
                        <span class="py-7 px-3 ">Received By:</span>
                        <div class="w-4/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                        <span class="py-7 px-3 ">Paid By:</span>
                        <div class="w-3/12 h-11 mt-1 mx-2 border-b-2 border-gray-400"></div>
                    </div>
                </div>
            </main>
    
        </div>
    </div>

  </div>
</div>

 <!-- AlpineJS -->
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

<?php
 include("$dir/layout/header.php")
?>