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
             <div class="w-full min-h-[calc(100%-80px)] border border-red-500">
                <div class="flex font-semibold">
                  <a href="<?php echo "$url/admin/logistic-one/asset-management/assettypes.php"?>" class="text-xl pt-3 pb-3 pl-3 uppercase">Asset Types/</a>
                  <h2 class="text-xl pt-3 pb-3 uppercase">Contract</h2>
                </div>
              </div>
              <!-- content end -->
      </div>
  </div>
<?php
 include("$dir/layout/header.php")
?>