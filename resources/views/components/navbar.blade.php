<nav class="bg-black/80 backdrop-blur-md fixed w-full z-50 top-0 border-b border-yellow-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">

            <a href="{{ route('home') }}" class="text-lg sm:text-xl md:text-2xl font-bold text-yellow-400 truncate pr-4">
                <img src="{{ asset('images/logo_top.png') }}"
             alt="Server Logo"
             class="w-30 md:w-30 mb-6 mt-6"
             style="width: 120px;">
            </a>

            <div class="md:hidden">
                <button id="nav-toggle" class="text-yellow-400 focus:outline-none p-2 hover:bg-yellow-500/10 rounded-lg transition">
                    <svg id="hamburger-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <ul class="hidden md:flex space-x-4 lg:space-x-6 items-center text-gray-200">
                <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition text-sm lg:text-base">Home</a></li>
                <li><a href="{{ route('register') }}" class="hover:text-yellow-300 transition text-sm lg:text-base">Register</a></li>
                <li><a href="{{ route('shop') }}" class="hover:text-yellow-300 transition text-sm lg:text-base">Shop</a></li>
                <li><a href="{{ route('rank') }}" class="hover:text-yellow-300 transition text-sm lg:text-base">Rank</a></li>
                <li><a href="{{ route('download') }}" class="hover:text-yellow-300 transition text-sm lg:text-base">Download</a></li>

                @if(Auth::check())
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-yellow-500 text-black font-bold px-3 py-1.5 lg:px-4 lg:py-2 rounded-lg hover:bg-yellow-400 transition text-sm">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="bg-yellow-500 text-black font-bold px-3 py-1.5 lg:px-4 lg:py-2 rounded-lg hover:bg-yellow-400 transition text-sm">
                            Login
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div id="mobile-menu"
     class="md:hidden fixed top-16 left-0 w-full bg-black/95 backdrop-blur-lg border-t border-yellow-500/20 transform -translate-y-full opacity-0 pointer-events-none transition-all duration-300 ease-in-out z-40">
    <ul class="flex flex-col space-y-1 px-6 py-6 text-gray-200">
        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300"><a href="{{ route('home') }}" class="block py-2 text-lg hover:text-yellow-300">Home</a></li>
        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300"><a href="{{ route('register') }}" class="block py-2 text-lg hover:text-yellow-300">Register</a></li>
        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300"><a href="{{ route('shop') }}" class="block py-2 text-lg hover:text-yellow-300">Shop</a></li>
        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300"><a href="{{ route('rank') }}" class="block py-2 text-lg hover:text-yellow-300">Rank</a></li>
        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300 border-b border-yellow-500/10 pb-2"><a href="{{ route('download') }}" class="block py-2 text-lg hover:text-yellow-300">Download</a></li>

        <li class="nav-item opacity-0 -translate-x-4 transition-all duration-300 pt-4">
            @if(Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full bg-yellow-500 text-black font-bold py-3 rounded-lg">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block w-full bg-yellow-500 text-black font-bold py-3 rounded-lg text-center">Login</a>
            @endif
        </li>
    </ul>
</div>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuItems = document.querySelectorAll('.nav-item');

    navToggle.addEventListener('click', () => {
        const isClosed = mobileMenu.classList.contains('-translate-y-full');
        
        if (isClosed) {
            // Open Menu
            mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
            menuItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.remove('opacity-0', '-translate-x-4');
                }, index * 100);
            });
        } else {
            // Close Menu
            closeMenu();
        }
    });

    function closeMenu() {
        mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
        menuItems.forEach(item => {
            item.classList.add('opacity-0', '-translate-x-4');
        });
    }

    // Close menu when clicking a link
    menuItems.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Reset menu on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) closeMenu();
    });
</script>