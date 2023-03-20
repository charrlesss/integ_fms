<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
            <div class="w-full min-h-[calc(100%-80px)] bg-gray-200">
                <h1 class="p-5 font-bold text-xl">Invoice / Approve</h1>


            </div>
              <!-- content end -->
      </div>
  </div>

  <script>
       $('#created-req-table').DataTable();
  </script>
<?php
 include("$dir/layout/header.php")
?>