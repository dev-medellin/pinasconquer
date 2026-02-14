@extends('layouts.app')

@section('title', 'Download - Conquer Online')

@section('content')

<section class="min-h-screen bg-gray-950 py-20 px-6">

    <div class="max-w-7xl mx-auto">

        {{-- Hero Section --}}
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-yellow-400 mb-4">Download</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Download the latest Conquer Online client, patches, and fix flash files to play on our server.
            </p>
        </div>
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
            class="fixed top-24 left-1/2 -translate-x-1/2 z-50 w-full max-w-lg px-6">
            
            @if(session('success'))
                <div class="bg-green-600 text-white font-bold px-6 py-3 rounded-2xl shadow-xl border-2 border-green-400 animate-bounce">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-600 text-white font-bold px-6 py-3 rounded-2xl shadow-xl border-2 border-red-400 animate-bounce">
                    ❌ {{ session('error') }}
                </div>
            @endif
        </div>
        {{-- Download Sections --}}
        <div class="grid md:grid-cols-3 gap-8">

            {{-- Clients --}}
            <div class="bg-black rounded-2xl border border-yellow-500/20 shadow-lg p-6 text-center">
                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Clients</h2>
                <p class="text-gray-300 mb-4">Download the full beta client here.</p>
                <a href="https://www.mediafire.com/file/u2or7b1z51slr87/PinasConquer.exe/file" download
                   class="inline-block bg-yellow-500 text-black font-bold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">
                   Download Beta Client
                </a>
            </div>
            {{-- Patches --}}
            {{-- <div class="bg-black rounded-2xl border border-yellow-500/20 shadow-lg p-6 text-center">
                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Patches</h2>
                <p class="text-gray-300 mb-4">Keep your client up-to-date with the latest patches.</p>
                <a href="{{ asset('downloads/patch.zip') }}" download
                   class="inline-block bg-yellow-500 text-black font-bold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">
                   Download Patch
                </a>
            </div> --}}

            {{-- Fix Flash --}}
            {{-- <div class="bg-black rounded-2xl border border-yellow-500/20 shadow-lg p-6 text-center">
                <h2 class="text-2xl font-bold text-yellow-400 mb-4">Fix Flash</h2>
                <p class="text-gray-300 mb-4">Download fix files to resolve Flash issues for smooth gameplay.</p>
                <a href="{{ asset('downloads/fixflash.zip') }}" download
                   class="inline-block bg-yellow-500 text-black font-bold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">
                   Download Fix
                </a>
            </div> --}}

        </div>
    </div>

</section>

@endsection