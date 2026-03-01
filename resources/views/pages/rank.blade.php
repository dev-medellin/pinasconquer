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
            <button @click="tab = 'players'"
                :class="tab === 'players' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top Players
            </button>
            <button @click="tab = 'cps'"
                :class="tab === 'cps' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top CPs
            </button>
            <button @click="tab = 'gold'"
                :class="tab === 'gold' ? 'bg-yellow-500 text-black' : 'bg-black text-yellow-400'"
                class="px-6 py-2 rounded-xl font-bold hover:bg-yellow-400 transition">
                Top Gold
            </button>
            <button @click="tab = 'nobility'"
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

                @foreach($players as $player)
                <div class="grid grid-cols-3 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                    <span>{{ $player['Name'] }}</span>
                    <span>{{ $player['className'] ?? '-' }}</span>
                    <span>{{ $player['Level'] }}</span>
                </div>
                @endforeach
            </div>

            {{-- Top CPs --}}
            <div x-show="tab === 'cps'" class="space-y-4">
                <div class="grid grid-cols-4 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                    <span>CPs</span>
                </div>

                @foreach($cps as $cp)
                <div class="grid grid-cols-4 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                    <span>{{ $cp['Name'] }}</span>
                    <span>{{ $cp['className'] ?? '-' }}</span>
                    <span>{{ $cp['Level'] }}</span>
                    <span>{{ number_format($cp['ConquerPoints']) }}</span>
                </div>
                @endforeach
            </div>

            {{-- Top Gold --}}
            <div x-show="tab === 'gold'" class="space-y-4">
                <div class="grid grid-cols-4 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Name</span>
                    <span>Class</span>
                    <span>Level</span>
                    <span>Gold</span>
                </div>

                @foreach($golds as $gold)
                <div class="grid grid-cols-4 gap-4 bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">
                    <span>{{ $gold['Name'] }}</span>
                    <span>{{ $gold['className'] ?? '-' }}</span>
                    <span>{{ $gold['Level'] }}</span>
                    <span>{{ number_format($gold['Money']) }}</span>
                </div>
                @endforeach
            </div>

            {{-- Top Nobility --}}
            <div x-show="tab === 'nobility'" class="space-y-4">

                <!-- Header -->
                <div class="grid grid-cols-5 gap-4 font-bold text-yellow-400 border-b border-gray-700 pb-2 mb-2">
                    <span>Rank</span>
                    <span>Name</span>
                    <span>Level</span>
                    <span>Title</span>
                    <span class="text-right">Donation</span>
                </div>

                @foreach($nobility as $player)
                    @php $rank = $player['rankPosition']; @endphp

                    <div class="grid grid-cols-5 gap-4 items-center bg-gray-900 p-4 rounded-lg hover:bg-gray-800 transition">

                        <!-- Rank -->
                        <span class="font-bold">
                            {!! $rank <= 3 ? '👑 '.$rank : $rank !!}
                        </span>

                        <!-- Name -->
                        <span class="font-semibold text-white">
                            {{ $player['Name'] }}
                        </span>

                        <!-- Level -->
                        <span class="text-gray-300">
                            {{ $player['Level'] }}
                        </span>

                        <!-- Title -->
                        <span class="
                            @if($rank <= 3)
                                text-yellow-400
                            @elseif($rank <= 20)
                                text-blue-400
                            @elseif($rank <= 59)
                                text-purple-400
                            @else
                                text-gray-400
                            @endif
                            font-semibold
                        ">
                            {{ $player['nobilityTitle'] }}
                        </span>

                        <!-- Donation -->
                        <span class="text-purple-400 text-right font-bold">
                            {{ number_format($player['DonationNobility']) }}
                        </span>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@endsection