@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen bg-gray-900">
    <div class="text-center">
        <h1 class="text-8xl font-extrabold text-yellow-400 animate-pulse">
            {{ $status ?? 500 }}
        </h1>

        <p class="text-2xl text-white mt-4">
            {{ $message ?? 'Something went wrong.' }}
        </p>

        <a href="{{ url('/') }}"
           class="mt-6 inline-block bg-yellow-500 text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition">
            Return Home
        </a>
    </div>
</div>
@endsection