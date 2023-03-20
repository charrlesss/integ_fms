<?php
  include("../../dotenv.php");
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
             <div class="w-full min-h-[calc(100%-80px)] border border-red-500">
              
             <div class="relative">
                    <div class="font-bold text-lg">#8</div>
                  </div>
                </div>
                <!-- User Info -->
                <div class="flex flex-row items-center mb-3">
                  <div class="group relative flex flex-row items-center ml-0 mr-3">
                    <img src="src/img/avatar/avatar9.jpg" class="w-20 rounded-full">
                    <!-- btn action -->
                    <a href="#" class="absolute hidden group-hover:block left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 p-1 px-2 rounded bg-cyan-500 hover:bg-cyan-600 text-cyan-100 text-sm"><i class="bx bx-envelope mr-1 inline"></i>Chat</a>
                  </div>
                  <div class="relative flex-1 ml-2">
                    <p class="mb-2 flex flex-row justify-between">
                      <span>Sales: 142</span><span>Target: 140</span>
                    </p>
                    <p class="mb-4 flex flex-row justify-between">
                      <span>Revenue: 2880$</span><span aria-label="Change over last month" data-microtip-position="top" role="tooltip">Changes: <span class="text-green-600">18%</span></span>
                    </p>
                    <!-- progress -->
                    <div class="relative flex w-full h-4 overflow-hidden bg-cyan-200 rounded">
                      <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-cyan-500" role="progressbar" style="width: 102%;" aria-valuenow="102" aria-valuemin="0" aria-valuemax="100"><span class="absolute left-1/2 transform -translate-x-1/2 text-slate-50">102%</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex-shrink max-w-full px-3 md:px-4 w-full sm:w-1/2 md:w-full lg:w-1/2 mb-6">
              <!-- box profile -->
              <div class="relative p-4 bg-white dark:bg-slate-900 rounded shadow-lg shadow-cyan-100/10 dark:shadow-cyan-700/10 h-full">
                <div class="flex flex-row items-center justify-between mb-2">
                  <h2 class="font-bold text-lg mb-2">Albert Josh</h2>
                  <div class="relative">
                    <div class="font-bold text-lg">#9</div>
                  </div>
                </div>
                <!-- User Info -->
                <div class="flex flex-row items-center mb-3">
                  <div class="group relative flex flex-row items-center ml-0 mr-3">
                    <img src="src/img/avatar/avatar10.jpg" class="w-20 rounded-full">
                    <!-- btn action -->
                    <a href="#" class="absolute hidden group-hover:block left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 p-1 px-2 rounded bg-cyan-500 hover:bg-cyan-600 text-cyan-100 text-sm"><i class="bx bx-envelope mr-1 inline"></i>Chat</a>
                  </div>
                  <div class="relative flex-1 ml-2">
                    <p class="mb-2 flex flex-row justify-between">
                      <span>Sales: 138</span><span>Target: 140</span>
                    </p>
                    <p class="mb-4 flex flex-row justify-between">
                      <span>Revenue: 2680$</span><span aria-label="Change over last month" data-microtip-position="top" role="tooltip">Changes: <span class="text-green-600">4%</span></span>
                    </p>
                    <!-- progress -->
                    <div class="relative flex w-full h-4 overflow-hidden bg-yellow-200 rounded">
                      <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-yellow-500" role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="absolute left-1/2 transform -translate-x-1/2 text-slate-50">98%</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex-shrink max-w-full px-3 md:px-4 w-full sm:w-1/2 md:w-full lg:w-1/2 mb-6">
              <!-- box profile -->
              <div class="relative p-4 bg-white dark:bg-slate-900 rounded shadow-lg shadow-cyan-100/10 dark:shadow-cyan-700/10 h-full">
                <div class="flex flex-row items-center justify-between mb-2">
                  <h2 class="font-bold text-lg mb-2">Ben James</h2>
                  <div class="relative">
                    <div class="font-bold text-lg">#10</div>
                  </div>
                </div>
                <!-- User Info -->
                <div class="flex flex-row items-center mb-3">
                  <div class="group relative flex flex-row items-center ml-0 mr-3">
                    <img src="src/img/avatar/avatar11.jpg" class="w-20 rounded-full">
                    <!-- btn action -->
                    <a href="#" class="absolute hidden group-hover:block left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 p-1 px-2 rounded bg-cyan-500 hover:bg-cyan-600 text-cyan-100 text-sm"><i class="bx bx-envelope mr-1 inline"></i>Chat</a>
                  </div>
                  <div class="relative flex-1 ml-2">
                    <p class="mb-2 flex flex-row justify-between">
                      <span>Sales: 128</span><span>Target: 140</span>
                    </p>
                    <p class="mb-4 flex flex-row justify-between">
                      <span>Revenue: 2480$</span><span aria-label="Change over last month" data-microtip-position="top" role="tooltip">Changes: <span class="text-pink-600">14%</span></span>
                    </p>
                    <!-- progress -->
                    <div class="relative flex w-full h-4 overflow-hidden bg-pink-200 rounded">
                      <div class="flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap bg-pink-500" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="absolute left-1/2 transform -translate-x-1/2 text-slate-50">85%</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

            </div>
      </div>
  </div>
<?php
 include("$dir/layout/header.php")
?>