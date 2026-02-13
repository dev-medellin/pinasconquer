@extends('layouts.app')

@section('title', 'Rankings - Conquer Online')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative h-64 md:h-80 bg-cover bg-center"
    style="background-image: url('{{ asset('images/rank-hero.jpg') }}');">
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold text-yellow-400 drop-shadow-lg">
            Server Rankings
        </h1>
        <p class="text-gray-300 mt-2 max-w-2xl">
            Check out the top players, richest CPs, gold holders, and nobility!
        </p>
    </div>
</section>

{{-- ================= RANK TABS ================= --}}
<section class="py-20 bg-gray-950" x-data="{ tab: 'players' }">
    <div class="max-w-7xl mx-auto px-6">

        {{-- TABS --}}
        <div class="flex justify-center gap-6 mb-12 flex-wrap">
            <button
                @click="tab = 'players'"
                :class="tab === 'players' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top Players
            </button>
            <button
                @click="tab = 'cps'"
                :class="tab === 'cps' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top CPs
            </button>
            <button
                @click="tab = 'gold'"
                :class="tab === 'gold' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top Gold
            </button>
            <button
                @click="tab = 'nobility'"
                :class="tab === 'nobility' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top Nobility
            </button>
        </div>

        {{-- TAB CONTENT --}}
        <div class="bg-black rounded-2xl p-6 border border-yellow-500/20 shadow-lg">

            {{-- Top Players --}}
            <div x-show="tab === 'players'" class="space-y-4">
                <div class="grid grid-cols-3 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                </div>

                @for ($i = 1; $i <= 5; $i++)
                    <div class="grid grid-cols-3 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                        <span>Player{{ $i }}</span>
                        <span>{{ ['Warrior','Mage','Archer'][array_rand(['Warrior','Mage','Archer'])] }}</span>
                        <span>{{ rand(50,200) }}</span>
                    </div>
                @endfor
            </div>

            {{-- Top CPs --}}
            <div x-show="tab === 'cps'" class="space-y-4">
                <div class="grid grid-cols-4 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                    <span>CPs</span>
                </div>

                @for ($i = 1; $i <= 5; $i++)
                    <div class="grid grid-cols-4 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                        <span>Player{{ $i }}</span>
                        <span>{{ ['Warrior','Mage','Archer'][array_rand(['Warrior','Mage','Archer'])] }}</span>
                        <span>{{ rand(50,200) }}</span>
                        <span>{{ number_format(rand(1000,50000)) }}</span>
                    </div>
                @endfor
            </div>

            {{-- Top Gold --}}
            <div x-show="tab === 'gold'" class="space-y-4">
                <div class="grid grid-cols-4 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                    <span>Gold</span>
                </div>

                @for ($i = 1; $i <= 5; $i++)
                    <div class="grid grid-cols-4 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                        <span>Player{{ $i }}</span>
                        <span>{{ ['Warrior','Mage','Archer'][array_rand(['Warrior','Mage','Archer'])] }}</span>
                        <span>{{ rand(50,200) }}</span>
                        <span>{{ number_format(rand(50000,200000)) }}</span>
                    </div>
                @endfor
            </div>

            {{-- Top Nobility --}}
            <div x-show="tab === 'nobility'" class="space-y-4">
                <div class="grid grid-cols-5 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                    <span>Noble</span>
                    <span>Donation</span>
                </div>

                @for ($i = 1; $i <= 5; $i++)
                    <div class="grid grid-cols-5 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                        <span>Player{{ $i }}</span>
                        <span>{{ ['Warrior','Mage','Archer'][array_rand(['Warrior','Mage','Archer'])] }}</span>
                        <span>{{ rand(50,200) }}</span>
                        <span>{{ ['Baron','Viscount','Count','Duke'][array_rand(['Baron','Viscount','Count','Duke'])] }}</span>
                        <span>{{ number_format(rand(1000,50000)) }}</span>
                    </div>
                @endfor
            </div>

        </div>
    </div>
</section>

@endsection