<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>
 <style>

main { background:#c7d2fe; }
.header {background:white;}
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
<body class="bg-purple-200 font-family-karla select-none">
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
             <div class="w-full min-h-[calc(100%-80px)] border border-red-500">
             financial-statement
              </div>
              <!-- content end -->
      </div>
  </div>
<?php
 include("$dir/layout/header.php")
?>