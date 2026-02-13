@extends('layouts.app')

@section('title', 'Profile - Conquer Online')

@section('content')

<section class="min-h-screen bg-gray-950 py-20 px-6">

    <div class="max-w-4xl mx-auto bg-black rounded-2xl border border-yellow-500/20 shadow-2xl p-10">

        {{-- USER INFO --}}
        <div class="flex flex-col md:flex-row items-center md:items-start gap-6 mb-10">

            {{-- Avatar --}}
            <div class="flex-shrink-0">
                <img src="{{ asset('images/avatar.png') }}" alt="Avatar" class="w-32 h-32 md:w-48 md:h-48 rounded-full border-4 border-yellow-500">
            </div>

            {{-- Stats --}}
            <div class="flex-1 text-center md:text-left">
                <h2 class="text-3xl font-bold text-yellow-400 mb-2">{{ $user->username }}</h2>
                <p class="text-gray-300 mb-1">Class: <span class="font-bold">{{ $user->class ?? 'Warrior' }}</span></p>
                <p class="text-gray-300 mb-1">Level: <span class="font-bold">{{ $user->level ?? 1 }}</span></p>
                <p class="text-gray-300 mb-1">CPs: <span class="font-bold">{{ number_format($user->cps ?? 0) }}</span></p>
                <p class="text-gray-300 mb-1">Gold: <span class="font-bold">{{ number_format($user->gold ?? 0) }}</span></p>
                <p class="text-gray-300 mb-1">Rank: <span class="font-bold">{{ $user->rank ?? '-' }}</span></p>
            </div>

        </div>

        {{-- ACTION BUTTONS --}}
        <div class="flex flex-col md:flex-row gap-4 justify-center md:justify-start mb-10">
            <!-- Change Password Modal Trigger -->
            <button @click="document.getElementById('modal-password').classList.remove('hidden')"
                    class="bg-yellow-500 text-black font-bold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">
                Change Password
            </button>

            <!-- Change Email Modal Trigger -->
            <button @click="document.getElementById('modal-email').classList.remove('hidden')"
                    class="bg-yellow-500 text-black font-bold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">
                Change Email
            </button>
        </div>

        {{-- ================= MODALS ================= --}}
        {{-- Password Modal --}}
        <div id="modal-password" class="fixed inset-0 bg-black/70 flex items-center justify-center hidden z-50">
            <div class="bg-gray-900 rounded-2xl p-8 w-96 relative">
                <button onclick="document.getElementById('modal-password').classList.add('hidden')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-white text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4 text-center">Change Password</h3>
                <form method="POST" action="{{ route('profile.changePassword') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="text-gray-300">Current Password</label>
                        <input type="password" name="current_password" required
                               class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-yellow-500 focus:ring-0">
                        @error('current_password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-gray-300">New Password</label>
                        <input type="password" name="new_password" required
                               class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-yellow-500 focus:ring-0">
                        @error('new_password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-gray-300">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" required
                               class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-yellow-500 focus:ring-0">
                    </div>
                    <button type="submit"
                            class="w-full bg-yellow-500 text-black font-bold py-2 rounded-xl hover:bg-yellow-400 transition">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>

        {{-- Email Modal --}}
        <div id="modal-email" class="fixed inset-0 bg-black/70 flex items-center justify-center hidden z-50">
            <div class="bg-gray-900 rounded-2xl p-8 w-96 relative">
                <button onclick="document.getElementById('modal-email').classList.add('hidden')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-white text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-yellow-400 mb-4 text-center">Change Email</h3>
                <form method="POST" action="{{ route('profile.changeEmail') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="text-gray-300">New Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                               class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-yellow-500 focus:ring-0">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                            class="w-full bg-yellow-500 text-black font-bold py-2 rounded-xl hover:bg-yellow-400 transition">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>

    </div>

</section>

@endsection