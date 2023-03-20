<header class="w-full items-center bg-blue-50 py-2 px-6 hidden sm:flex">
        <!-- <div class="w-1/2">
            <img src="images/logo1.png" class=" ml-1 h-12 w-40">
            
        </div> -->
        <div class="container flex  justify-between ml-1 md:h-16">
            <h1 class="relative z-30 mt-4  font-semibold text-brown-700 text-2xl font-family-bebas">
                
            </h1>
        </div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <!-- <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400"> -->
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                <a href="../LoginForm/loginform.php" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
            </div>
        </div>
</header>