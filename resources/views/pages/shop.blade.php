@extends('layouts.app')

@section('title', 'Shop - Conquer Online')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative h-64 md:h-96 bg-cover bg-center"
    style="background-image: url('{{ asset('images/shop-hero.jpg') }}');">

    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">
            Shop & Donations
        </h1>
        <p class="text-gray-300 mt-4 max-w-2xl">
            Support the server and get exclusive items, gold, and CPs to dominate the battlefield!
        </p>
    </div>
</section>

{{-- ================= SHOP ITEMS GRID ================= --}}
<section class="py-20 bg-gray-950" x-data="{ openModal: false }">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-yellow-400 mb-12 text-center">
            Available Packs & Items
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            {{-- Example Item --}}
            <div class="bg-black rounded-2xl border border-yellow-500/20 shadow-lg hover:scale-105 transition duration-300">
                <img src="{{ asset('images/item1.jpg') }}" alt="Starter Pack" class="w-full h-48 object-cover rounded-t-2xl">
                <div class="p-6 text-center">
                    <h3 class="text-2xl font-bold text-yellow-400 mb-2">Starter Pack</h3>
                    <p class="text-gray-300 mb-4">Includes 10,000 Gold and 500 CPs to kickstart your adventure.</p>
                    <button @click="openModal = true"
                            class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-xl hover:bg-yellow-400 transition">
                        Buy Now
                    </button>
                </div>
            </div>

            {{-- Repeat other items as needed --}}
        </div>
    </div>

    {{-- ================= MODAL ================= --}}
    <div
        x-show="openModal"
        class="fixed inset-0 flex items-center justify-center bg-black/70 z-50"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        <div class="bg-gray-900 rounded-2xl p-8 w-96 relative" @click.away="openModal = false">
            {{-- Close Button --}}
            <button @click="openModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-white text-xl font-bold">&times;</button>

            <h3 class="text-2xl font-bold text-yellow-400 mb-4 text-center">Gcash Payment</h3>

            {{-- QR Code --}}
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/gcash-qr.png') }}" alt="Gcash QR" class="w-48 h-48 object-contain">
            </div>

            {{-- Number --}}
            <p class="text-gray-300 text-center mb-6">
                Or send directly to Gcash Number: <span class="text-yellow-400 font-bold">0917-XXX-XXXX</span>
            </p>

            <p class="text-gray-400 text-center text-sm">
                After sending, please contact admin in Discord or provide your account to receive your items.
            </p>

            <div class="mt-6 text-center">
                <button @click="openModal = false"
                        class="bg-yellow-500 text-black font-bold px-6 py-2 rounded-xl hover:bg-yellow-400 transition">
                    Close
                </button>
            </div>
        </div>
    </div>
</section>

@endsection