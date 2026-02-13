@extends('layouts.app')

@section('title', 'Home - Conquer Online')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative h-screen bg-cover bg-center"
    style="background-image: url('{{ asset('images/hero.jpg') }}');">

    <div class="absolute inset-0 bg-black/75"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">

        {{-- LOGO --}}
        <img src="{{ asset('images/logo.png') }}"
             alt="Server Logo"
             class="w-100 md:w-100 mb-6 drop-shadow-[0_0_25px_rgba(255,215,0,0.8)]">
        
        {{-- Online Players Counter --}}
        <div class="relative bg-black/80 px-6 py-3 rounded-xl shadow-xl bottm-4 mb-6">
            <div class="text-yellow-400 text-3xl md:text-4xl font-extrabold tracking-wider animate-pulse drop-shadow-lg">
                Online : <span id="online-counter">100 Players</span>
            </div>
            {{-- Optional glowing effect --}}
            <div class="absolute inset-0 rounded-xl bg-yellow-400/10 blur-2xl"></div>
        </div>

        {{-- TITLE --}}
        <h1 class="text-5xl md:text-7xl font-extrabold text-yellow-400 mb-6">
            Conquer The Battlefield
        </h1>

        {{-- SUBTITLE --}}
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-8">
            Custom PvP. Competitive Guild Wars. Balanced Damage.
            Experience the ultimate Conquer Online private server.
        </p>

        {{-- BUTTONS --}}
        <div class="flex gap-6 flex-wrap justify-center">
            <a href="{{ route('register') }}"
               class="bg-yellow-500 text-black px-8 py-3 rounded-xl text-lg font-bold hover:bg-yellow-400 transition">
                Join Now
            </a>

            <a href="{{ route('rank') }}"
               class="border border-yellow-500 text-yellow-400 px-8 py-3 rounded-xl text-lg font-bold hover:bg-yellow-500 hover:text-black transition">
                View Rankings
            </a>
        </div>

    </div>
</section>

{{-- ================= SOCIAL MEDIA SECTION ================= --}}
<section class="py-20 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-yellow-400 mb-8 text-center">Social Media</h2>
        <div class="grid md:grid-cols-2 gap-10">

            {{-- FACEBOOK --}}
            <div class="bg-gray-900 p-6 rounded-2xl border border-blue-500/30 hover:border-blue-400 transition">
                <h3 class="text-2xl font-bold text-blue-400 mb-4">Facebook Page</h3>
                <p class="text-gray-400 mb-4">
                    Stay updated with server events, updates, and announcements.
                </p>
                {{-- Facebook iframe embed --}}
                <div class="overflow-hidden rounded-lg border border-blue-500 mb-4">
                    <iframe 
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FYOUR_PAGE&tabs=timeline&width=340&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" 
                        height="200" 
                        style="border:none;overflow:hidden" 
                        scrolling="no" 
                        frameborder="0" 
                        allowfullscreen="true" 
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                </div>
            </div>

            {{-- DISCORD --}}
            <div class="bg-gray-900 p-6 rounded-2xl border border-indigo-500/30 hover:border-indigo-400 transition">
                <h3 class="text-2xl font-bold text-indigo-400 mb-4">Discord Community</h3>
                <p class="text-gray-400 mb-4">
                    Join our active Discord server for support and PvP discussions.
                </p>
                {{-- Discord iframe embed --}}
                <div class="overflow-hidden rounded-lg border border-indigo-500">
                    <iframe 
                        src="https://discord.com/widget?id=1470633422048329809&theme=dark"
                        width="100%" 
                        height="200" 
                        allowtransparency="true" 
                        frameborder="0" 
                        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ================= FEATURES SECTION ================= --}}
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold text-center text-yellow-400 mb-16">
            Server Highlights
        </h2>

        <div class="grid md:grid-cols-4 gap-8 text-center">

            <div class="bg-black p-8 rounded-2xl border border-yellow-500/20 hover:border-yellow-400 transition">
                <h3 class="text-xl font-bold text-yellow-400 mb-3">Balanced PvP</h3>
                <p class="text-gray-400">
                    Fair damage formula and competitive combat system.
                </p>
            </div>

            <div class="bg-black p-8 rounded-2xl border border-yellow-500/20 hover:border-yellow-400 transition">
                <h3 class="text-xl font-bold text-yellow-400 mb-3">Custom Events</h3>
                <p class="text-gray-400">
                    Weekly tournaments and special in-game rewards.
                </p>
            </div>

            <div class="bg-black p-8 rounded-2xl border border-yellow-500/20 hover:border-yellow-400 transition">
                <h3 class="text-xl font-bold text-yellow-400 mb-3">Guild Wars</h3>
                <p class="text-gray-400">
                    Dominate the battlefield and conquer cities.
                </p>
            </div>

            <div class="bg-black p-8 rounded-2xl border border-yellow-500/20 hover:border-yellow-400 transition">
                <h3 class="text-xl font-bold text-yellow-400 mb-3">Active Community</h3>
                <p class="text-gray-400">
                    Friendly players and active staff support.
                </p>
            </div>

        </div>
    </div>
</section>


{{-- ================= ANNOUNCEMENT SECTION ================= --}}
<section class="py-20 bg-gray-950">
    <div class="max-w-4xl mx-auto text-center px-6">

        <h2 class="text-4xl font-bold text-yellow-400 mb-6">
            Latest Announcement
        </h2>

        <p class="text-gray-300 text-lg">
            🚀 Beta Server is now LIVE!  
            All new accounts receive starter gold and CPs to test features.
            Join today and be part of the competitive launch season!
        </p>

    </div>
</section>

{{-- Screenshots Carousel --}}
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-yellow-400 mb-8 text-center">Game Screenshots</h2>

        <div x-data="zoomFadeCarousel()" x-init="init()" class="relative w-full h-96 overflow-hidden rounded-2xl">

            {{-- Slides --}}
            <template x-for="(image, index) in images" :key="index">
                <img :src="image"
                     x-show="currentIndex === index"
                     x-transition:enter="transition-opacity duration-1000"
                     x-transition:enter-start="opacity-0 scale-105"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition-opacity duration-1000"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-105"
                     class="absolute inset-0 w-full h-full object-cover transform transition-transform duration-500">
            </template>

            {{-- Prev / Next Buttons --}}
            <button @click="prev()" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 text-yellow-400 p-3 rounded-full hover:bg-black/70 transition z-10">
                &#8592;
            </button>
            <button @click="next()" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 text-yellow-400 p-3 rounded-full hover:bg-black/70 transition z-10">
                &#8594;
            </button>

            {{-- Dots --}}
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-10">
                <template x-for="(image, index) in images" :key="index">
                    <div @click="goTo(index)"
                         :class="{'bg-yellow-500': currentIndex===index, 'bg-gray-700': currentIndex!==index}"
                         class="w-3 h-3 rounded-full cursor-pointer transition"></div>
                </template>
            </div>

        </div>
    </div>
</section>

{{-- ================= REVIEWS SECTION ================= --}}
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-yellow-400 mb-12 text-center">Player Reviews</h2>

        <div class="grid md:grid-cols-3 gap-8">

            {{-- Review Card Example --}}
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/5.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Zjinn</h3>
                </div>
                <p class="text-gray-300">
                    "I love this server! The events are exciting, and the community is amazing. Highly recommended!"
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/10.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Alimar</h3>
                </div>
                <p class="text-gray-300">
                    "Great experience! The server runs smoothly and the PvP events are top-notch. Love it!"
                </p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/17.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Cr4mz</h3>
                </div>
                <p class="text-gray-300">
                    "Friendly community and regular updates. It's the best server I've played on in years!"
                </p>
            </div>
            
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/13.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">TudzUnderground</h3>
                </div>
                <p class="text-gray-300">
                    "I made a lots of friends here, you must play here the community is awesome!"
                </p>
            </div>
            
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/18.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">teefs</h3>
                </div>
                <p class="text-gray-300">
                    "Boss and PVP every hour make the game awesome, non-stop killing."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/19.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">BINZ</h3>
                </div>
                <p class="text-gray-300">
                    "The server runs smoothly and events are so fun! Great PvP experience."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/20.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Peashy</h3>
                </div>
                <p class="text-gray-300">
                    "Friendly community and frequent events make this server my favorite."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/21.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">KuyaPem</h3>
                </div>
                <p class="text-gray-300">
                    "Amazing server with nonstop action! PvP and boss fights are top-notch."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/22.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Kazan</h3>
                </div>
                <p class="text-gray-300">
                    "Perfect balance of PvP and fun events, everyone is super friendly!"
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/23.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">MalditoX</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop action, great admins, and the community keeps it alive. Highly recommended!"
                </p>
            </div>
            
            <!-- New Users -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/24.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Trafalgar</h3>
                </div>
                <p class="text-gray-300">
                    "This server is amazing for PvP and making friends! Totally worth playing."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/25.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Paraluman</h3>
                </div>
                <p class="text-gray-300">
                    "PvP events are nonstop, the community is friendly, and I made so many new friends!"
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/26.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Bubbles</h3>
                </div>
                <p class="text-gray-300">
                    "Cool server with tons of PvP action and friendly players. Highly recommend!"
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/27.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">BAHO</h3>
                </div>
                <p class="text-gray-300">
                    "Best PvP server ever! Making friends and battling nonstop is so fun."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/28.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Zaryooken</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop action and amazing PvP! I met so many cool friends here."
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/29.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">HonorX</h3>
                </div>
                <p class="text-gray-300">
                    "PvP every hour and amazing events. Definitely a cool server to play!"
                </p>
            </div>
        
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/30.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">OhLow</h3>
                </div>
                <p class="text-gray-300">
                    "Making friends, PvP battles, and cool events. This server is epic!"
                </p>
            </div>
            
                <!-- Floki -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/31.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Floki</h3>
                </div>
                <p class="text-gray-300">
                    "PvP nonstop and amazing friends here. The server is super fun!"
                </p>
            </div>
        
            <!-- Javy -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/32.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Javy</h3>
                </div>
                <p class="text-gray-300">
                    "Making friends and battling in PvP is so exciting! Highly recommended."
                </p>
            </div>
        
            <!-- Tikwee -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/33.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Tikwee</h3>
                </div>
                <p class="text-gray-300">
                    "Cool server, awesome events, and I met many new friends here!"
                </p>
            </div>
        
            <!-- PIPOY -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/34.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">PIPOY</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop PvP and fun! Friends are always online to join battles."
                </p>
            </div>
        
            <!-- BBQ -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/35.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">BBQ</h3>
                </div>
                <p class="text-gray-300">
                    "Friendly community, awesome PvP, and the server keeps you hooked!"
                </p>
            </div>
        
            <!-- Kaiah -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/36.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Kaiah</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and events are perfect! Made so many friends on this server."
                </p>
            </div>
        
            <!-- Gurdessan -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/37.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Gurdessan</h3>
                </div>
                <p class="text-gray-300">
                    "Awesome PvP battles and very friendly players. Highly recommended!"
                </p>
            </div>
        
            <!-- Paradise -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/38.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Paradise</h3>
                </div>
                <p class="text-gray-300">
                    "Best PvP server ever! Friendly community and nonstop action."
                </p>
            </div>
        
            <!-- Bingkatoi -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/39.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Bingkatchoi</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and friends everywhere! The server keeps me coming back daily."
                </p>
            </div>
        
            <!-- Silience -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/40.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Silience</h3>
                </div>
                <p class="text-gray-300">
                    "Amazing PvP, great events, and lots of friends to play with."
                </p>
            </div>
        
            <!-- JONG -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/41.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">JONG</h3>
                </div>
                <p class="text-gray-300">
                    "Fun PvP server with friendly people and exciting events every day!"
                </p>
            </div>
        
            <!-- Hubert[Bading] -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/42.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Hubert[Bading]</h3>
                </div>
                <p class="text-gray-300">
                    "Awesome PvP and cool events! Made a lot of friends here."
                </p>
            </div>
        
            <!-- Hrtbr3aker -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/43.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Hrtbr3aker</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop PvP, friendly community, and exciting events! Totally recommend."
                </p>
            </div>
        
            <!-- Light -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/44.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Light</h3>
                </div>
                <p class="text-gray-300">
                    "Fun PvP server, friendly players, and amazing events. Love this server!"
                </p>
            </div>
        
            <!-- Thomaz -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/45.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Thomaz</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and events are nonstop, and the server makes it super fun to play."
                </p>
            </div>
            
            <!-- Luka -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/46.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Luka</h3>
                </div>
                <p class="text-gray-300">
                    "Epic PvP action and intense wars! I’ve made so many friends here."
                </p>
            </div>
            
            <!-- Omar -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/47.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Omar</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop PvP and wars keep the server alive. Best place to battle and make friends!"
                </p>
            </div>
            
            <!-- Khaled -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/48.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Khaled</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and wars every day make this server exciting and addictive!"
                </p>
            </div>
            
            <!-- Mohammed -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/49.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Mohammed</h3>
                </div>
                <p class="text-gray-300">
                    "Awesome PvP battles and epic wars! Made great friends in the server."
                </p>
            </div>
            
            <!-- Malice -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/50.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Malice</h3>
                </div>
                <p class="text-gray-300">
                    "Intense PvP and large-scale wars keep me coming back every day!"
                </p>
            </div>
            
            <!-- Medo -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/51.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Medo</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and wars are so fun! The server’s community makes it even better."
                </p>
            </div>
            
            <!-- Tonjo -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/52.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Tonjo</h3>
                </div>
                <p class="text-gray-300">
                    "Non-stop PvP wars with friends, and every battle feels epic!"
                </p>
            </div>
            
            <!-- LordGod -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/53.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">LordGod</h3>
                </div>
                <p class="text-gray-300">
                    "Epic PvP and massive wars make this server exciting. Great community too!"
                </p>
            </div>
            
            <!-- Nairox -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/54.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Nairox</h3>
                </div>
                <p class="text-gray-300">
                    "Friendly players, epic PvP, and exciting wars. Best server experience!"
                </p>
            </div>
            
            <!-- Kado -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/55.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Kado</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and wars every day! Made amazing friends and loved every moment."
                </p>
            </div>
            
            <!-- KRUNGKRUNG -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/56.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">KRUNGKRUNG</h3>
                </div>
                <p class="text-gray-300">
                    "Amazing PvP, massive wars, and a super friendly community. Must play!"
                </p>
            </div>
            
            <!-- Matalay -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/57.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Matalay</h3>
                </div>
                <p class="text-gray-300">
                    "PvP and epic wars every day! Made so many new friends in this server."
                </p>
            </div>
            
            <!-- Spen -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/58.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Spen</h3>
                </div>
                <p class="text-gray-300">
                    "PvP wars are nonstop and so exciting. The server keeps you addicted!"
                </p>
            </div>
            
            <!-- Mitchazoo -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/59.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">Mitchazoo</h3>
                </div>
                <p class="text-gray-300">
                    "Amazing PvP action and intense wars! Friends make it even more fun."
                </p>
            </div>
            
            <!-- ExtemeGaming[PM] -->
            <div class="bg-gray-800 p-6 rounded-2xl border border-yellow-500/30 hover:border-yellow-400 transition">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/faces/60.jpg') }}" alt="User photo" class="w-12 h-12 rounded-full mr-4">
                    &nbsp;&nbsp;
                    <h3 class="text-lg font-semibold text-yellow-400">ExtemeGaming[PM]</h3>
                </div>
                <p class="text-gray-300">
                    "PvP battles, epic wars, and a friendly community make this server amazing!"
                </p>
            </div>

        </div>
    </div>
</section>

<script>
function zoomFadeCarousel() {
    return {
        currentIndex: 0,
        images: [
            '{{ asset('images/screenshots/screen1.png') }}',
            '{{ asset('images/screenshots/screen2.png') }}',
            '{{ asset('images/screenshots/screen3.png') }}',
            '{{ asset('images/screenshots/screen4.png') }}',
            '{{ asset('images/screenshots/screen5.png') }}'
        ],
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
        },
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
        },
        goTo(index) {
            this.currentIndex = index;
        },
        init() {
            setInterval(() => this.next(), 5000); // auto-slide every 5 seconds
        }
    }
}
</script>
<script src="https://discord.com/api/guilds/1470633422048329809/widget.json"></script>

@endsection