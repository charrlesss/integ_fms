<?php  $TOLEGAL ="/fms"; ?>
<div id="backgroud-modal-active" class="md:hidden hidden absolute inset-0 bg-gray-500 opacity-30 z-[100] "></div>
<div id="sidebar" class="z-[101] md:relative absolute py-12 bg-white min-h-screen transition-all ease-in-out md:w-[300px] w-[280px] shadow-lg">
            <div class="flex space-2 items-center border-b-2 pb-4 px-5 ">
                <div id="toggle-sidebar-mobile" class="md:hidden absolute top-5 right-2 flex items-center  cursor-pointer">
                    <svg class="h-5 w-5 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </div>
                <div>
                    <img src="<?php  echo "$url/assets/img/logo.png" ?>" alt="logo" class="rounded-full">
                </div>
                <div class="ml-3">
                    <h1 class="text-3xl font-bold text-indigo-600">FREIGHT</h1>
                    <p class="text-center text-sm text-indigo-600 mt-1 font-serif">Logistic 1 </p>
                </div>
            </div>
          <div id="sidebar-container">
            <!-- sidebar -->
          </div>
</div>


<script src="<?php echo "$url/js/sidebar.js" ?>"></script>
<script>
        // icon = class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"
        const sidebarConfig = [
            {
                link:"<?php echo "$url/admin/logistic-one/" ?>",
                title:"dashboard",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>`
            },
            {   
                title:"Project Management",
                icon:`<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-500 group-hover:text-indigo-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/logistic-one/project-management/add-project.php" ?>",
                        title:"Task",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/logistic-one/project-management/project-list.php" ?>",
                        title:"Project List",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }


                    
                ]
                      
            },
            {
                title:"Asset Management",
                icon:`<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-500 group-hover:text-indigo-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/logistic-one/asset-management/assettypes.php" ?>",
                        title:"All Types",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`,
                    },
                    {
                        link:"<?php echo "$url/admin/logistic-one/asset-management/assetlocation.php" ?>",
                        title:"All Location",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
            },
            {
                title:"Warehouse",
                icon:`<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-500 group-hover:text-indigo-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/logistic-one/warehouse/delivery-orders.php" ?>",
                        title:"Delivery Orders",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/logistic-one/warehouse/inventory.php" ?>",
                        title:"Inventory",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                
                      
            },
            {
                title:"Procurement",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/logistic-one/procurement/review.php" ?>",
                        title:"Review Of Request",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/logistic-one/procurement/invoice.php" ?>",
                        title:"Invoice Approval",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/logistic-one/procurement/records.php" ?>",
                        title:"Records",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
            },
            {
                title:"Contracts",
                icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`,
                link:"<?php echo "$TOLEGAL/admin/administrative/legal-management/legal-documents.php" ?>",
            },
            {
                title:"Request Budget",
                icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`,
                link:"<?php echo "$TOLEGAL/financials/admin/financial-admin/budget-management/budget-request.php" ?>",
            }
          
        ]
            
        $(function(){
            init(sidebarConfig,'sidebar-container')

            if(window.innerWidth <= 750){
                $('#toggle-sidebar-mobile').click()
            }else{
                $('#toggle-sidebar').dblclick()
            }
            window.addEventListener('resize',function (){
            if(window.innerWidth <= 750){
                $("#sidebar")[0].classList.add ('md:w-0')
                $("#sidebar")[0].classList.add('w-0')
                $('#sidebar').children().hide()
                $("#backgroud-modal-active")[0].classList.add('hidden')
            }else{
                $("#sidebar")[0].classList.remove ('md:w-0')
                $("#sidebar")[0].classList.remove('w-0')
                $('#sidebar').children().show()

                }
            })
            
        })

</script>