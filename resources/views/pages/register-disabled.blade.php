@extends('layouts.app')

@section('title', 'Rankings - Conquer Online')

@section('content')
<div class="flex items-center justify-center h-screen bg-gray-900">
    <div class="text-center">
     <h1 class="text-3xl font-bold mb-4">Registration Temporarily Disabled</h1>
        <p class="text-lg text-gray-600 mb-6">
            We are currently not accepting new registrations. Please check back later.
        </p>
        <a href="{{ route('home') }}" class="bg-yellow-500 text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition">
            Go Home
        </a>
    </div>
</div>
@endsection