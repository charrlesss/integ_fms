<?php 
    $URLTOPAYROOL = "/fms"
 ?>
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
                    <p class="text-center text-sm text-indigo-600 mt-1 font-serif">Financial </p>
                </div>
            </div>
          <div id="sidebar-container">
            <!-- sidebar -->
          </div>
</div>


<script src="<?php echo "$url/js/sidebar.js" ?>"></script>
<script>
        //  class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"
        const sidebarConfig = [
            {
                link:"<?php echo "$url/admin/financial-admin/" ?>",
                title:"Dashboard",
                icon:`<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-indigo-500  group-hover:fill-indigo-500 fill-gray-500"  viewBox="0 0 48 48" >
                        <path d="M0 0h48v48H0z" fill="none"/>
                        <path  d="M6 26h16V6H6v20zm0 16h16V30H6v12zm20 0h16V22H26v20zm0-36v12h16V6H26z"/>
                    </svg>`
            },
            {
                title:"Disbursement",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/financial-admin/disbursement/cash-disburse.php" ?>",
                        title:"Cash Disburse",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/disbursement/cheque-disburse.php" ?>",
                        title:"Cheque Disburse",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/disbursement/bank-transfer.php" ?>",
                        title:"Bank Transfer",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }


                    
                ]
                      
            },
            {
                title:"Budget Management",
                icon:`<svg version="1.1"  class="h-5 w-5 text-gray-500 group-hover:text-indigo-500  group-hover:fill-indigo-500 fill-gray-500"  viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                        <title>moneybag</title>
                        <path  d="M26.282 17.441h7.376v-2.768h-7.376v2.768zM33.604 18.362h-7.322c0 0-12.047 11.874-12.047 23.516 0 12.336 12.622 13.316 12.622 13.316s3.765 0.624 6.107 0c0 0 12.799-1.5 12.799-13.256 0.002-11.76-12.159-23.576-12.159-23.576zM34.146 43.356c-0.296 0.6-0.696 1.102-1.206 1.504-0.508 0.403-1.103 0.705-1.779 0.907-0.086 0.026-0.18 0.036-0.268 0.058v2.047h-1.843v-1.807c-0.023 0.002-0.045 0.006-0.067 0.006-0.523 0-1.009-0.041-1.459-0.126-0.448-0.086-0.844-0.189-1.189-0.307-0.345-0.12-0.632-0.246-0.861-0.377-0.231-0.131-0.398-0.248-0.499-0.349-0.103-0.101-0.174-0.248-0.218-0.439-0.041-0.193-0.064-0.467-0.064-0.827 0-0.242 0.007-0.444 0.024-0.609s0.039-0.296 0.077-0.399c0.036-0.103 0.081-0.174 0.139-0.218 0.058-0.041 0.128-0.064 0.204-0.064 0.111 0 0.264 0.064 0.463 0.193s0.454 0.272 0.767 0.428c0.313 0.157 0.684 0.298 1.119 0.429 0.433 0.127 0.936 0.193 1.506 0.193 0.375 0 0.711-0.045 1.007-0.135s0.549-0.216 0.756-0.381c0.208-0.165 0.366-0.367 0.474-0.609 0.111-0.244 0.165-0.512 0.165-0.812 0-0.343-0.096-0.637-0.281-0.885-0.188-0.246-0.433-0.463-0.733-0.656-0.3-0.191-0.641-0.369-1.024-0.538s-0.778-0.347-1.183-0.532c-0.407-0.188-0.801-0.399-1.183-0.639-0.383-0.238-0.726-0.521-1.026-0.853s-0.544-0.726-0.733-1.178c-0.188-0.452-0.279-0.996-0.279-1.627 0-0.727 0.135-1.365 0.403-1.914 0.27-0.549 0.634-1.007 1.089-1.369 0.457-0.362 0.996-0.634 1.616-0.814 0.319-0.092 0.649-0.159 0.986-0.203v-1.941h1.843v1.939c0.075 0.009 0.148 0.006 0.221 0.017 0.358 0.054 0.696 0.128 1.007 0.221 0.311 0.092 0.589 0.197 0.831 0.313s0.403 0.212 0.48 0.291c0.081 0.077 0.131 0.143 0.161 0.197 0.026 0.054 0.047 0.128 0.069 0.218 0.019 0.090 0.034 0.203 0.039 0.341 0.008 0.135 0.011 0.306 0.011 0.508 0 0.227-0.008 0.42-0.019 0.577-0.011 0.156-0.030 0.285-0.058 0.386-0.026 0.103-0.066 0.176-0.116 0.223s-0.116 0.069-0.204 0.069c-0.084 0-0.223-0.052-0.411-0.161-0.188-0.111-0.418-0.227-0.688-0.354-0.274-0.127-0.589-0.244-0.949-0.351-0.362-0.105-0.756-0.156-1.183-0.156-0.337 0-0.63 0.039-0.879 0.122-0.251 0.081-0.459 0.195-0.628 0.337-0.167 0.144-0.293 0.319-0.373 0.519-0.082 0.201-0.122 0.416-0.122 0.641 0 0.337 0.092 0.628 0.274 0.874s0.429 0.465 0.739 0.656c0.308 0.193 0.658 0.371 1.050 0.538 0.39 0.169 0.788 0.347 1.194 0.532 0.407 0.189 0.803 0.401 1.194 0.639s0.741 0.523 1.044 0.855 0.549 0.722 0.737 1.17c0.188 0.45 0.281 0.977 0.281 1.588-0.002 0.791-0.152 1.489-0.448 2.091zM33.546 13.751l3.746-9.223c0 0-2.363 1.961-3.746 1.961s-3.576-1.903-3.576-1.903-2.362 1.903-3.746 1.903c-1.382 0-3.632-1.845-3.632-1.845l3.804 9.107h7.149z"></path>
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/financial-admin/budget-management/budget-monitoring.php" ?>",
                        title:"Budget Monitoring",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/budget-management/budget-plan.php" ?>",
                        title:"Budget Plan",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/budget-management/budget-request.php" ?>",
                        title:"Budget Request",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/budget-management/loan.php" ?>",
                        title:"Loan",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
            },
            {
                title:"Collection",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="3" x2="12" y2="21" />  <line x1="9" y1="21" x2="15" y2="21" />  <polyline points="3 6 6 7 12 5 18 7 21 6" />  <path d="M6 7l-3 9a5 5 0 0 0 6 0l-3 -9" />  <path d="M18 7l-3 9a5 5 0 0 0 6 0l-3 -9" /></svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/financial-admin/collection/monitoring-account.php" ?>",
                        title:"Monitoring Account",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/collection/collection.php" ?>",
                        title:"Collection",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/collection/bank-statement.php" ?>",
                        title:"Bank Statement",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$URLTOPAYROOL/freght/freight-system/index.php?page=includes/payroll" ?>",
                        title:"Payroll",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
            },
            {
                title:"General Ledger",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/>
                    </svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/financial-admin/general-ledger/chart-account.php" ?>",
                        title:"Chart of Account",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/general-ledger/journal-entry.php" ?>",
                        title:"Journal Entry",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/general-ledger/adjusting-entries.php" ?>",
                        title:"Adjusting Entries",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/general-ledger/financial-statement.php" ?>",
                        title:"Financial Statement",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/general-ledger/closing-entry.php" ?>",
                        title:"Closing Entry",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
            },
            {
                title:"Account Payable/Receivable",
                icon:`<svg class="h-5 w-5 text-gray-500 group-hover:text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="3" x2="12" y2="21" />  <line x1="9" y1="21" x2="15" y2="21" />  <polyline points="3 6 6 7 12 5 18 7 21 6" />  <path d="M6 7l-3 9a5 5 0 0 0 6 0l-3 -9" />  <path d="M18 7l-3 9a5 5 0 0 0 6 0l-3 -9" /></svg>`,
                dropdown:[
                    {
                        link:"<?php echo "$url/admin/financial-admin/account-payable-receivable/monitoring.php" ?>",
                        title:"Monitoring",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/account-payable-receivable/account-payable.php" ?>",
                        title:"Account Payable",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    },
                    {
                        link:"<?php echo "$url/admin/financial-admin/account-payable-receivable/account-receivable.php" ?>",
                        title:"Account Receivable",
                        icon:`<svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>`
                    }
                ]
                      
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