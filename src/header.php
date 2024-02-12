<header class="flex w-full items-center justify-between shadow-md bg-white p-2 fixed z-40">
    <!-- logo -->
    <div class="flex items-center space-x-2">
        <button type="button" class="text-3xl" @click="asideOpen = !asideOpen">
            <i class="bx bx-menu"></i>
        </button>
        <div>
            <img src="images/logo.png" class="w-40 cursor-pointer" />
        </div>
    </div>

    <!-- button profile -->
    <div>
        <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
            class="h-9 w-9 overflow-hidden rounded-full">
            <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" />
        </button>

        <!-- dropdown profile -->
        <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
            x-show="profileOpen" x-transition>
            <div class="flex items-center space-x-2 p-2">
                <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                <div class="font-medium">Jean Paul Mithimbo</div>
            </div>

            <div class="flex flex-col space-y-3 p-2">
                <a href="#" class="transition hover:text-yellow-600">Profile</a>
            </div>

            <div class="p-2">
                <button class="flex items-center space-x-2 transition hover:text-yellow-600">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <div><a href=""></a>Deconnexion</div>
                </button>
            </div>
        </div>
    </div>
</header>