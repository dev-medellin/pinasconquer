@extends('layouts.app')

@section('content')
@php
    // Determine status code
    $status = $exception->getStatusCode() ?? 500;

    // Default messages
    $messages = [
        404 => 'Oops! Page not found.',
        403 => 'Access Denied! You don’t have permission.',
        500 => 'Oops! Something went wrong on our server.',
    ];

    $message = $messages[$status] ?? 'Something went wrong.';
@endphp

<div class="flex items-center justify-center h-screen bg-gray-900">
    <div class="text-center">
        <h1 class="text-8xl font-extrabold text-yellow-400 mb-4 animate-pulse">{{ $status }}</h1>
        <p class="text-2xl text-white mb-6">{{ $message }}</p>
        <a href="{{ route('home') }}" class="bg-yellow-500 text-black font-bold px-6 py-3 rounded-lg hover:bg-yellow-400 transition">
            Go Home
        </a>
    </div>
</div>
@endsection