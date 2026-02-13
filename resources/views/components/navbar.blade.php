<nav class="bg-black/80 backdrop-blur-md fixed w-full z-50 top-0 border-b border-yellow-500/20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <a href="{{ route('home') }}" class="text-2xl font-bold text-yellow-400">
                Pinas Conquer [PVP Server]
            </a>

        <ul class="flex space-x-6 items-center">
            <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition">Home</a></li>
            <li><a href="{{ route('register') }}" class="hover:text-yellow-300 transition">Register</a></li>
            <li><a href="{{ route('shop') }}" class="hover:text-yellow-300 transition">Shop</a></li>
            <li><a href="{{ route('rank') }}" class="hover:text-yellow-300 transition">Rank</a></li>
            <li><a href="{{ route('download') }}" class="hover:text-yellow-300 transition">Download</a></li>

            {{-- Login / Logout --}}
            @if(Auth::check())
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="bg-yellow-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-yellow-400 transition">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}"
                       class="bg-yellow-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-yellow-400 transition">
                        Login
                    </a>
                </li>
            @endif
        </ul>
        </div>
    </div>
</nav>