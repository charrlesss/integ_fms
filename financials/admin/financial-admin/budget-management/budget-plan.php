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
        .font-family-karla { font-family: bebas neue;}
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
<body  class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] border border-red-500">
                <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                        <main class="w-full flex-grow p-6">
                            <h1 class="text-3xl text-black pb-6">Budget Plan</h1>

                            <!-- Content goes here! 😁 -->
                        </main>
                
                    </div>
            
            
            </div>
              <!-- content end -->
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

  
<?php
 include("$dir/layout/header.php")
?>