<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freignt Financial System</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>

        main { background:#c7d2fe }
        .header {background:#eef2ff;}

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: bebas neue; }
        .font-family-bebas {font-family: bebas neue;}
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: white; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background:#f57f17; }
        /* .active-nav-link { background: #5e35b1; } */
        .nav-item:hover { background: #5e35b1; }
        .account-link:hover { background: #3d68ff; }

        .textColor {color: black}
    </style>
</head>
<body class=" font-family-karla flex select-none">

<!--SideBar____________________________________________________________________________________________________________________________________________________________________________  -->
    <?php include('./sidebar.php') ?>
<!-- End Of SideBar__________________________________________________________________________________________________________________________________________________________ -->

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <?php include('./desktop-header.php') ?>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full  py-5 px-6 sm:hidden select-none" id="header">
            <div class="flex items-center justify-between">
                <a href="#" class="textColor text-3xl font-semibold uppercase hover:text-gray-600">Freight Financial System</a>
                <button @click="isOpen = !isOpen" class="textColor text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.php" class="flex items-center active-nav-link textColor py-2 pl-4 nav-item">
                    <img src="svg/dashboard.svg" class="mr-3 text-sm h-5">
                    Dashboard
                </a>
                <a href="../Disbursement/cashdisbuse.php" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <img src="svg/disbusment.svg" class="mr-3 text-sm h-5">
                    Disbursement
                </a>
                <a href="../BudgetManagement/budgetrequest.php" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <img src="svg/budgetmanagement.svg" class="mr-3 text-sm h-5">
                    Budget Management
                </a>
                <a href="../Collection/collection.php" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <img src="svg/collection.svg" class="mr-3 text-sm h-5">
                    Collection
                </a>
                <a href="../GeneralLedger/journalentry.php" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <img src="svg/general.svg" class="mr-3 text-sm h-5">
                    General Ledger
                </a>
                <a href="../AccPayableReceivable/accountpayable.php" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <img src="svg/accountpayable.svg" class="mr-3 text-sm h-5">
                    AccountPayable/Receivable
                </a>
                <a href="#" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center textColor opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 ">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
                
                <div class="flex flex-wrap mt-6">
                    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-plus mr-3"></i> Monthly Reports
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="chartOne" width="400" height="200"></canvas>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-check mr-3"></i> Resolved Reports
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="chartTwo" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!--basta -->
                <div class="p-8">
                    <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-12">
                        <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                            <div class="w-3/5 flex justify-start bg">

                                <ul>
                                    <li class="font-bold text-gray-400">Todays Money</li>
                                    <li class="font-extrabold text-slate-800 text-xl">₱10,000,000</li>
                                    <li><span class="text-green-400 font-bold">+34</span><span class="text-gray-400">Since Yesterday</span></li>
                                    <li></li>
                                </ul>

                            </div>

                            <div class="w-2/5 flex justify-end">
                                <div class="bg-red-500 rounded-full p-2">
                                svg
                                </div>

                            </div>
                        </div>

                            <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                                <div class="w-3/5 flex justify-start">

                                    <ul>
                                        <li class="font-bold text-gray-400">Sales</li>
                                        <li class="font-extrabold text-slate-800 text-xl">₱2,000,000</li>
                                        <li><span class="text-green-400 font-bold">70%</span><span class="text-gray-400">Last 24 hours</span></li>
                                        <li></li>
                                    </ul>

                                </div>

                                <div class="w-2/5 flex justify-end">
                                    <div class="bg-purple-500 rounded-full p-2">
                                    svg
                                    </div>

                                </div>
                            </div>

                            <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                                <div class="w-3/5 flex justify-start">

                                    <ul>
                                        <li class="font-bold text-gray-400">Revenue</li>
                                        <li class="font-extrabold text-slate-800 text-xl">₱5,000,000</li>
                                        <li><span class="text-green-400 font-bold">80%</span><span class="text-gray-400">Last 24 hours</span></li>
                                        <li></li>
                                    </ul>

                                </div>

                                <div class="w-2/5 flex justify-end">
                                    <div class="bg-green-500 rounded-full p-2">
                                    svg
                                    </div>

                                </div>
                            </div>

                            <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                                <div class="w-3/5 flex justify-start">

                                    <ul>
                                        <li class="font-bold text-gray-400">Expenses</li>
                                        <li class="font-extrabold text-slate-800 text-xl">₱4,000,000</li>
                                        <li><span class="text-green-400 font-bold">60%</span><span class="text-gray-400">Last 24 hours</span></li>
                                        <li></li>
                                    </ul>

                                </div>

                                <div class="w-2/5 flex justify-end">
                                    <div class="bg-yellow-500 rounded-full p-2">
                                    svg
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
                <!-- END OF BASTA -->
    
                <!-- <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Recent Orders
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/4 text-left py-3 px-3 uppercase font-semibold text-sm">Product</th>
                                    <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">Tracking ID</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">12315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-green-300">Approved</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">212315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-red-300">Pending</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">312315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-green-300">Approved</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">412315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-blue-300">Deliverd</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">512315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-red-300">Pending</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">612315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-red-300">Pending</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr>
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">712315254</td>
                                    <td class="text-left py-3 px-4">Oct. 15,2022</td>
                                    <td class="text-left py-3 px-4 bg-blue-300">Deliverd</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="w-1/4 text-left py-3 px-4">Laptop</td>
                                    <td class="w-1/4 text-left py-3 px-4">812315254</td>
                                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">Oct. 15,2022</a></td>
                                    <td class="text-left py-3 px-4 bg-green-300">Approved</td>
                                    <td class="text-left py-3 px-4 text-blue-400 cursor-pointer hover:underline">Details</td>              
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->
            </main>
    <!-- 
            <footer class="w-full bg-white text-right p-4 italic">
                Sagot Ko Padala Mo!.
            </footer> -->
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>

        window.addEventListener('keyup',ev => {

            if(ev.key === 'PrintScreen') {
                navigator.clipboard.writeText('');
                alert("ScreenShot Disabled");
            }
            navigator.clipboard.writeText('');

        });

        window.addEventListener('blurr',ev => {

            navigator.clipboard.writeText('');

        });
                // navigator.clipboard.writeText('');


        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        function dropdown() {
            document.querySelector('#submenu').classList.toggle('hidden');
            document.querySelector('#arrow').classList.toggle('rotate-0');
        }
        dropdown()

        function aprDropdown() {
            document.querySelector('#submenu1').classList.toggle('hidden');
            document.querySelector('#arrow1').classList.toggle('rotate-0');
        }
        aprDropdown()

        
        function bmDropdown() {
            document.querySelector('#submenu2').classList.toggle('hidden');
            document.querySelector('#arrow2').classList.toggle('rotate-0');
        }
        bmDropdown()

        function cDropdown() {
            document.querySelector('#submenu3').classList.toggle('hidden');
            document.querySelector('#arrow3').classList.toggle('rotate-0');
        }
        cDropdown()

        
        function glDropdown() {
            document.querySelector('#submenu4').classList.toggle('hidden');
            document.querySelector('#arrow4').classList.toggle('rotate-0');
        }
        glDropdown()
    </script>
</body>
</html>