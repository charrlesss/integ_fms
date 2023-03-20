<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("visible_for_integ.php");

?>

</head>
<body>
<div class="min-h-screen flex ">

      <div id="loading" class="hidden bg-gray-100 backdrop-blur-sm overflow-hidden w-full h-full fixed z-[200] flex justify-center items-center">
          <div class="h-screen bg-white w-full">
              <div class="flex justify-center items-center h-full">
                  <img class="h-16 w-16" src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif" alt="">
              </div>
          </div>
      </div>

    <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow flex flex-col ">
        <?php include("$dir/layout/header-nav.php");?>
            <div class="w-full  flex-1 bg-white  p-4 border border-red-500">
                
            </div>
      </div>
  </div>
<?php
 include("$dir/layout/header.php")
?>