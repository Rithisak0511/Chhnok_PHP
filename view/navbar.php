<?php
// Navbar Component
echo '
<nav class="bg-[#202020] p-4 border-b-2 border-[#aaf153] ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile Menu Button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="relative inline-flex items-center justify-center rounded-2xl p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo and Navigation Links -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <h1 class="text-[#aaf153] text-2xl font-bold"><a href="home.php">BYE</a></h1>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="home.php" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 px-3 py-2 rounded-2xl text-sm font-medium">Home</a>
                        <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 px-3 py-2 rounded-2xl text-sm font-medium">About</a>
                        <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 px-3 py-2 rounded-2xl text-sm font-medium">Services</a>
                        <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 px-3 py-2 rounded-2xl text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>

            <!-- User Menu -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="relative p-1 text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#aaf153" class="icon icon-tabler icon-tabler-bell">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" />
                        <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" />
                    </svg>
                </button>
                <div class="relative ml-3">
                    <button type="button" class="relative flex rounded-full text-sm focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                    </button>
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right bg-[#202020] py-2 shadow-lg ring-1 ring-black/5 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" id="user-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-[#aaf153] hover:bg-[#202020] hover:text-gray-200" role="menuitem">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[#aaf153] hover:bg-[#202020] hover:text-gray-200" role="menuitem">Wallet</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[#aaf153] hover:bg-[#202020] hover:text-gray-200" role="menuitem">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-[#aaf153] hover:bg-[#202020] hover:text-gray-200" role="menuitem">Sign out</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Mobile Menu -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 block px-3 py-2 text-base font-medium">Home</a>
                <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 block px-3 py-2 text-base font-medium">About</a>
                <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 block px-3 py-2 text-base font-medium">Services</a>
                <a href="#" class="text-[#aaf153] hover:bg-[#202020] hover:text-gray-200 block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </div>
</nav>';
?>

<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    document.getElementById('user-menu-button').addEventListener('click', function () {
        const userMenu = document.getElementById('user-menu');
        userMenu.classList.toggle('hidden');
    });
</script>
