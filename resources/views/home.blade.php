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
             class="w-110 md:w-110 mb-6 drop-shadow-[0_0_25px_rgba(255,215,0,0.8)]">

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


{{-- ================= FEATURES SECTION ================= --}}
<section class="py-20 bg-gray-950">
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
<section class="py-20 bg-black">
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


{{-- ================= SCREENSHOT PREVIEW ================= --}}
<section class="py-20 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold text-center text-yellow-400 mb-16">
            Game Screenshots
        </h2>

        <div class="grid md:grid-cols-4 gap-6">

            @for ($i = 1; $i <= 4; $i++)
                <div class="overflow-hidden rounded-2xl shadow-lg hover:scale-105 transition duration-300">
                    <img src="{{ asset('images/sample'.$i.'.jpg') }}"
                         class="w-full h-60 object-cover">
                </div>
            @endfor

        </div>
    </div>
</section>


{{-- ================= SOCIAL MEDIA SECTION ================= --}}
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-10">

            {{-- FACEBOOK --}}
            <div class="bg-gray-900 p-10 rounded-2xl border border-blue-500/30 hover:border-blue-400 transition">
                <h3 class="text-2xl font-bold text-blue-400 mb-4">Facebook Page</h3>
                <p class="text-gray-400 mb-6">
                    Stay updated with server events, updates, and announcements.
                </p>
                <a href="#"
                   class="text-blue-400 font-semibold hover:underline">
                    Visit Facebook →
                </a>
            </div>

            {{-- DISCORD --}}
            <div class="bg-gray-900 p-10 rounded-2xl border border-indigo-500/30 hover:border-indigo-400 transition">
                <h3 class="text-2xl font-bold text-indigo-400 mb-4">Discord Community</h3>
                <p class="text-gray-400 mb-6">
                    Join our active Discord server for support and PvP discussions.
                </p>
                <a href="#"
                   class="text-indigo-400 font-semibold hover:underline">
                    Join Discord →
                </a>
            </div>

        </div>
    </div>
</section>

@endsection