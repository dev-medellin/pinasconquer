@extends('layouts.app')

@section('title', 'Login - Conquer Online')

@section('content')

<section class="min-h-screen bg-gray-950 flex items-center justify-center px-6 py-20">

    <div class="w-full max-w-md bg-black p-10 rounded-2xl border border-yellow-500/20 shadow-2xl">

        {{-- TITLE --}}
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo.png') }}"
                 class="w-28 mx-auto mb-4 drop-shadow-[0_0_20px_rgba(255,215,0,0.8)]">
            <h2 class="text-3xl font-bold text-yellow-400">
                Login to Your Account
            </h2>
            <p class="text-gray-400 mt-2">Enter your credentials to start playing.</p>
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

        {{-- FORM --}}
        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            {{-- Username --}}
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" required
                       class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:ring-0">
                @error('username')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-6">
                <label class="block text-gray-300 mb-2">Password</label>
                <input type="password" name="password" required
                       class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:ring-0">
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center justify-between mb-6">
                <label class="inline-flex items-center text-gray-300">
                    <input type="checkbox" name="remember" class="form-checkbox text-yellow-500">
                    <span class="ml-2">Remember Me</span>
                </label>
                <a href="#" class="text-yellow-400 hover:underline text-sm">Forgot Password?</a>
            </div>

            {{-- Submit --}}
            <button type="submit"
                    class="w-full bg-yellow-500 text-black font-bold py-3 rounded-xl hover:bg-yellow-400 transition">
                Login
            </button>

        </form>

        {{-- Register Link --}}
        <div class="text-center mt-6 text-gray-400">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-yellow-400 hover:underline">
                Register here
            </a>
        </div>

    </div>
</section>

@endsection