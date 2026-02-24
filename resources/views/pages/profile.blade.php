@extends('layouts.app')

@section('title', 'Profile - Conquer Online')

@section('content')

@php use Illuminate\Support\Number; @endphp

<section class="min-h-screen bg-gray-950 py-16 px-6">

<div class="max-w-7xl mx-auto">

{{-- ================= HEADER CARD ================= --}}
<div class="bg-black border border-yellow-500/20 rounded-2xl p-8 shadow-2xl mb-10">

    <div class="flex flex-col md:flex-row items-center gap-8">

        {{-- Avatar --}}
        <img src="{{ asset('images/faces/'.$user->face.'.jpg') }}"
             class="w-32 h-32 md:w-44 md:h-44 rounded-full border-4 border-yellow-500 shadow-lg">

        {{-- Basic Info --}}
        <div class="text-center md:text-left">

            <h1 class="text-4xl font-bold text-yellow-400 mb-2">
                {{ $user->name }}
            </h1>

            <div class="space-y-1 text-gray-300">

                <p>Class:
                    <span class="font-bold text-white">
                        {{ $user->className }}
                    </span>
                </p>

                <p>Level:
                    <span class="font-bold text-white">
                        {{ $user->level }}
                    </span>
                </p>

                <p>Reborn:
                    <span class="font-bold text-white">
                        {{ $user->reborn }}
                    </span>
                </p>

                <p>Location:
                    <span class="font-bold text-white">
                        {{ $user->mapName }} ({{ $user->x }}, {{ $user->y }})
                    </span>
                </p>

            </div>

        </div>

    </div>

</div>


{{-- ================= STAT GRID ================= --}}
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">


{{-- CHARACTER CARD --}}
<div class="bg-gray-900 border border-yellow-500/10 rounded-xl p-6">

    <h3 class="text-yellow-400 font-bold mb-4 text-lg">Character</h3>

    <div class="space-y-2 text-gray-300">
        <p>Online Points:
        <span class="text-white font-semibold">{{ $user->onlinePoints }}</span></p>

        <p>Boss Points:
        <span class="text-white font-semibold">{{ $user->bossPoints }}</span></p>

        <p>Guild ID:
        <span class="text-white font-semibold">{{ $user->guildID }}</span></p>

        <p>Guild Rank:
        <span class="text-white font-semibold">{{ $user->guildRankName }}</span></p>
    </div>

</div>


{{-- ATTRIBUTES CARD --}}
<div class="bg-gray-900 border border-yellow-500/10 rounded-xl p-6">

    <h3 class="text-yellow-400 font-bold mb-4 text-lg">Attributes</h3>
    <div class="space-y-2 text-gray-300">
        <p>Strength: <span class="text-white">{{ $user->strength }}</span></p>
        <p>Vitality: <span class="text-white">{{ $user->vitaliti }}</span></p>
        <p>Spirit: <span class="text-white">{{ $user->spirit }}</span></p>
        <p>Atributes: <span class="text-white">{{ $user->atributes }}</span></p>
    </div>
</div>


        {{-- ECONOMY CARD --}}
        <div class="bg-gray-900 border border-yellow-500/10 rounded-xl p-6">

            <h3 class="text-yellow-400 font-bold mb-4 text-lg">Economy</h3>

            <div class="space-y-2 text-gray-300">

            <p>CPs:
            <span class="text-white font-semibold">
            {{ number_format($user->conquerPoints) }}
            </span></p>

            <p>Gold:
            <span class="text-white font-semibold">
            {{ number_format($user->money) }}
            </span></p>

            <p>Warehouse Gold:
            <span class="text-white font-semibold">
            {{ number_format($user->wHMoney) }}
            </span></p>

            </div>

        </div>


{{-- STATUS CARD --}}
<div class="bg-gray-900 border border-yellow-500/10 rounded-xl p-6">

<h3 class="text-yellow-400 font-bold mb-4 text-lg">Status</h3>

<div class="space-y-2 text-gray-300">

<p>
VIP Time:
<span class="text-white">
{{ optional($user->vipTimeDate)->format('F - d - Y h:iA') }}
</span>
</p>

<p>
Nobility Expire:
<span class="text-white">
{{ optional($user->nobilityExpireDate)->format('F - d - Y h:iA') }}
</span>
</p>

<p>
Last Login:
<span class="text-white">
{{ optional($user->lastLoginDate)->format('F - d - Y h:iA') }}
</span>
</p>

</div>

</div>


</div>


{{-- ================= ACTION BUTTONS ================= --}}
<div class="mt-12 flex flex-wrap gap-4 justify-center">

<button @click="document.getElementById('modal-password').classList.remove('hidden')"
class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold px-6 py-3 rounded-xl transition">
Change Password
</button>

<button @click="document.getElementById('modal-email').classList.remove('hidden')"
class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold px-6 py-3 rounded-xl transition">
Change Email
</button>

</div>


</div>

</section>

@endsection