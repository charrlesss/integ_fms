
<style>
    .active-nav-link { background: #c7d2fe; }
    .nav-item:hover { background: #c7d2fe; }
</style>

<aside class="relative bg-indigo-50 h-screen w-80 hidden sm:block shadow-xl overflow-y-auto">
    <div class="w-[300px] flex-1 relative flex justify-start mb-5 h-[70px] pl-1 pt-1">
        <div  class="flex-1 mr-1 bg-indigo-50 border-indigo-200  flex overflow-hidden  gap-x-3 items-center border relative px-2 py-2 rounded-xl">
            <img class=" rounded-full w-10 h-10 border border-indigo-600 p-2 outline outline-offset-2 outline-indigo-500" src='/Financial/IndexDashboard/images/truck.png' alt="logo">
            <p class=" uppercase text-indigo-800 font-semibold text-xs whitespace-nowrap">Freight Financial</p>
        </div>
    </div>

        <div class="p-6">
            <p class="text-black tracking-[5px] text-center text-2xl item-center font-normal uppercase font-family-bebas">Welcome</p>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center"> -->
                <!-- <img src="logo.png" class=" mt-1/5 h-32 w-32"> -->
            <!-- </button> -->
        </div>
        <!--DashBoard____________________________________________________________________________________________________________________________  -->
        <!-- <div class="p-2.5 mt-3 flex item-center rounded-md px-4 duration-300 cursor-pointer  text-indigo-500">
            <img src="/Financial/IndexDashboard/svg/search2.svg" class="text-sm h-6">
            <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none">
        </div> -->
        <hr class="my-2 text-brown-600">
        <nav class="text-white text-base font-semibold pt-3 " >
            <a href="../IndexDashboard/index.php" class="flex items-center text-sm  text-black py-4 pl-4 nav-item" id='nav-clickable' data-link-active='IndexDashboard'>
                <img src="/Financial/IndexDashboard/svg/dashboard.svg" class="mr-3 text-sm h-5">
                Dashboard
            </a>
        <!--____________________________________________________________________________________________________________________________DashBoard  -->

        <!--Disbursement____________________________________________________________________________________________________________________________  -->
            <div class="flex items-center p2.5 flex item-center px-4 duration-300 nav-item opacity-75  hover:opacity-100 py-4 pl-4  " data-link-active='Disbursement' id='nav-clickable' onclick="dropdown() ">
                <img src="/Financial/IndexDashboard/svg/disbusment.svg" class="mr-3 text-sm h-5">
                <div class="flex justify-between w-full item-left">
                <span class="text-[15px] text-sm text-black">Disbursement</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <img src="/Financial/IndexDashboard/svg/arrowdown.svg" class="mr-3 text-sm h-5">
                    </span>
                </div>
            </div>
            
            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-black" id="submenu">
                <a href="../Disbursement/cashdisbuse.php"><h1 class="cursor-pointer p-2 nav-item mt-1"    data-link-active='cashdisbuse.php' id='nav-clickable-child'>Cash Disburse</h1></a>
                <a href="../Disbursement/chequedisbuse.php"><h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='chequedisbuse.php' id='nav-clickable-child'>Cheque Disburse</h1></a>
                <a href="../Disbursement/banktransfer.php"><h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='banktransfer.php' id='nav-clickable-child'>Bank Transfer</h1></a>
            </div>
        <!--____________________________________________________________________________________________________________________________ Disbursement -->

        <!--Budget Management____________________________________________________________________________________________________________________________  -->
            <div class="flex items-center p2.5 flex item-center px-4 duration-300 nav-item opacity-75  hover:opacity-100 py-4 pl-4"  data-link-active='BudgetManagement' id='nav-clickable' onclick="bmDropdown()">
                <img src="/Financial/IndexDashboard/svg/budgetmanagement.svg" class="mr-3 text-sm h-5">
                <div class="flex justify-between w-full item-left">
                <span class="text-[15px] text-sm text-black">Budget Management</span>
                    <span class="text-sm rotate-180" id="arrow2">
                        <img src="/Financial/IndexDashboard/svg/arrowdown.svg" class="mr-3 text-sm h-5">
                    </span>
                </div>
            </div>
            
            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-black" id="submenu2">
                <a href="../BudgetManagement/budgetmonitoring.php"><h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='budgetmonitoring.php' id='nav-clickable-child'>Budget Monitoring</h1></a>
                <a href="../BudgetManagement/budgetplan.php"><h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='budgetplan.php' id='nav-clickable-child'>Budget Plan</h1></a>
                <a href="../BudgetManagement/budgetrequest.php"><h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='budgetrequest.php' id='nav-clickable-child'>Budget Request</h1></a>
                <a href="../BudgetManagement/loan.php"><h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='loan.php' id='nav-clickable-child'>Loan</h1></a>
            </div>
        <!--____________________________________________________________________________________________________________________________Budget Management  -->

        <!--Collection____________________________________________________________________________________________________________________________  -->
            <div class="flex items-center p2.5 flex item-center px-4 duration-300 nav-item opacity-75  hover:opacity-100 py-4 pl-4" data-link-active='Collection' id='nav-clickable' onclick="cDropdown()">
                <img src="/Financial/IndexDashboard/svg/collection.svg" class="mr-3 text-sm h-5">
                <div class="flex justify-between w-full item-left">
                <span class="text-[15px] text-sm text-black">Collection</span>
                    <span class="text-sm rotate-180" id="arrow3">
                        <img src="/Financial/IndexDashboard/svg/arrowdown.svg" class="mr-3 text-sm h-5">
                    </span>
                </div>
            </div>
            
            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-black" id="submenu3">
                <a href="../Collection/monitoringaccount.php"> <h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='monitoringaccount.php' id='nav-clickable-child'>Monitoring Account</h1></a>
                <a href="../Collection/collection.php"> <h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='collection.php' id='nav-clickable-child'>Collection</h1></a>
                <a href="../Collection/bankstatement.php"> <h1 class="cursor-pointer p-2 nav-item mt-1"  data-link-active='bankstatement.php' id='nav-clickable-child'>Bank Statement</h1></a>
            </div>
        <!--____________________________________________________________________________________________________________________________ Collection -->

        <!--General Ledger____________________________________________________________________________________________________________________________  -->
            <div class="flex items-center p2.5 flex item-center px-4 duration-300 nav-item opacity-75  hover:opacity-100 py-4 pl-4" data-link-active='GeneralLedger'  id='nav-clickable' onclick="glDropdown()">
                <img src="/Financial/IndexDashboard/svg/general.svg" class="mr-3 text-sm h-5">
                <div class="flex justify-between w-full item-left">
                <span class="text-[15px] text-sm text-black">General Ledger</span>
                    <span class="text-sm rotate-180" id="arrow4">
                        <img src="/Financial/IndexDashboard/svg/arrowdown.svg" class="mr-3 text-sm h-4">
                    </span>
                </div>
            </div>
            
            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-black" id="submenu4">
               <a href="../GeneralLedger/chratofaccount.php"> <h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='chratofaccount.php' id='nav-clickable-child'>Chart of Account</h1></a>
               <a href="../GeneralLedger/journalentry.php" > <h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='journalentry.php' id='nav-clickable-child'>Journal Entry</h1></a>
               <a href="../GeneralLedger/adjustingentries.php" > <h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='adjustingentries.php' id='nav-clickable-child'>Adjusting Entries</h1></a>
               <a href="../GeneralLedger/financialstatement.php" > <h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='financialstatement.php' id='nav-clickable-child'>Financial Statement</h1></a>
               <a href="../GeneralLedger/closingentry.php" > <h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='closingentry.php' id='nav-clickable-child'>Closing Entry</h1></a>
            </div>
        <!--____________________________________________________________________________________________________________________________ General Ledger -->
        
        <!--AccountPayable/Receivable____________________________________________________________________________________________________________________________  -->
            <div class="flex items-center p2.5 flex item-center px-4 duration-300 nav-item opacity-75  hover:opacity-100 py-4 pl-4" data-link-active='AccPayableReceivable' id='nav-clickable' onclick="aprDropdown()">
                <img src="/Financial/IndexDashboard/svg/accountpayable.svg" class="mr-3 text-sm h-5">
                <div class="flex justify-between w-full item-left">
                <span class="text-[15px] text-sm text-black">Acc-Payable/Receivable</span>
                    <span class="text-sm rotate-180" id="arrow1">
                        <img src="/Financial/IndexDashboard/svg/arrowdown.svg" class="mr-3 text-sm h-5">
                    </span>
                </div>
            </div>
            
            <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto text-black" id="submenu1">
                <a href="../AccPayableReceivable/monitoring.php"><h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='monitoring.php' id='nav-clickable-child'>Monitoring</h1></a>
                <a href="../AccPayableReceivable/accountpayable.php"><h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='accountpayable.php' id='nav-clickable-child'>Account Payable</h1></a>
                <a href="../AccPayableReceivable/accountreceivable.php"><h1 class="cursor-pointer p-2 nav-item mt-1" data-link-active='accountreceivable.php' id='nav-clickable-child'>Account Receivable</h1></a>
            </div>
        <!--____________________________________________________________________________________________________________________________AccountPayable/Receivable  -->
        </nav>
    </aside>

    <script>

      const parentNav = document.querySelectorAll('#nav-clickable');
      const getDirFilename = window.location.pathname.split('/Financial/')[1].split('/')[0]

      const childNav = document.querySelectorAll('#nav-clickable-child');
      const getDirChildFilename = window.location.pathname.split('/Financial/')[1].split('/')[1]
      parentNav.forEach((el)=>{
            if(el.dataset.linkActive == getDirFilename){
                el.classList.add('active-nav-link')
                return
            }
            el.classList.remove('active-nav-link')
      })

      childNav.forEach((el)=>{
            if(el.dataset.linkActive == getDirChildFilename){
                el.classList.add('active-nav-link')
                return
            }
            el.classList.remove('active-nav-link')
      })

    </script>