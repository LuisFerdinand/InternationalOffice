<nav class="bg-gray-800" x-data="{isOpen : false}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
        <div class="flex items-center space-x-1">
          <a href="/"><img class="h-10 w-10" src="https://www.mercubuana.ac.id/user/images/Logo_UMB_Putih_besar.png" alt="International Office Mercu Buana"></a>
          <span class="text-gray-300 text-3xl">|</span>
          <a href="/">
            <p class="rounded-md text-sm font-medium text-gray-300">
              International<br>Office</p>
            </a>
        </div>
          <div class="hidden md:block">
            <div class="ml-20 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
              <x-navlink href="/about" :active="request()->is('about')">About</x-navlink>
              <div class="relative" x-data="{ isDropdownOpen: false }">
                <x-navlink href="#" @click="isDropdownOpen = true" :active="request()->is('internationaloffice')">
                    International Office
                    <svg class="inline-block w-4 h-4 ml-1 transform" :class="{'rotate-180': isDropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </x-navlink>
                
                <div x-show="isDropdownOpen" class="absolute left-0 mt-2 w-100 rounded-md shadow-lg z-10" @click.away="isDropdownOpen = false">
                    <div class="rounded-md text-gray-400 bg-gray-700 shadow-xs">
                        <a href="/studentexchanges" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-700">Student Exchange</a>
                        <a href="/shortcourses" class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-100 hover:text-gray-700">Short Course</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            <div class="sm:flex hidden">
              <x-navlink href="{{ route('dashboard') }}" :active >Dashboard</x-navlink>
              
              @auth
                <form method="POST" action="{{ route('logout') }}" >
                  @csrf
                  <button type="submit" class=" text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Logout</button>
                </form>
              @endauth
            </div>
        


       
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg  :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <ul class="space-y-2 list-none">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <li><x-navlink href="/" :active="request()->is('/')">Home</x-navlink></li>
          <li><x-navlink href="/about" :active="request()->is('about')">About</x-navlink></li>

          <li><div class="relative" x-data="{ isDropdownOpen: false }">
              <x-navlink href="#" @click="isDropdownOpen = !isDropdownOpen" :active="request()->is('internationaloffice')">
                  International Office
                  <svg class="inline-block w-4 h-4 ml-1 transform" :class="{'rotate-180': isDropdownOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
              </x-navlink>

              <div x-show="isDropdownOpen" class="mt-2 rounded-md shadow-lg z-10" @click.away="isDropdownOpen = false">
                  <div class="rounded-md text-gray-400 bg-gray-700 shadow-xs">
                      <a href="/studentexchanges" class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-700">Student Exchange</a>
                      <a href="/shortcourses" class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-700">Short Course</a>
                  </div>
              </div>
          </div></li>
          <li><x-navlink href="{{ route('dashboard') }}" :active>Dashboard</x-navlink></li>
          <li><form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class=" text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Logout</button>
          </form></li>
        </ul>
    </div>
</div>

  </nav>