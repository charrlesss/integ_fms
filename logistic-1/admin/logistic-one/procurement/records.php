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
              <h1 class="p-5 font-bold text-xl">Records</h1>

            </div>
              <!-- content end -->
      </div>
  </div>
<?php
 include("$dir/layout/header.php")
?>