<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <a href="/"><img class="h-10 w-10" src="https://www.mercubuana.ac.id/user/images/Logo_UMB_Putih_besar.png" alt="International Office Mercu Buana"></a>
                    <span class="text-gray-300 text-2xl">|</span>
                <a href="/">
                    <p class="rounded-md text-sm font-medium text-gray-300">International<br>Office</p>
                </a>
            </div>
            <!-- Navbar links -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Short Courses Link -->
                    <a href="{{ route('courses.index') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Short Courses</a>
                    <a href="{{ route('exchanges.index') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Student Exchanges</a>
                    <a href="{{ route('dashboard') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-500 hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
