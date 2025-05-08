<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Home')
@section('nav_home', 'font-semibold text-gray-900') {{-- Ini kunci agar navbar ABOUT aktif --}}

@section('content')
<div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-10 md:gap-20">
    <div class="max-w-md md:max-w-lg">
        <h1 class="text-2xl sm:text-3xl font-normal text-gray-900 leading-tight">
            Jelajahi
            <span class="font-extrabold text-purple-600">Peluang,</span><br>
            <span class="font-extrabold text-gray-900">Raih</span>
            <span class="font-extrabold text-indigo-700">Masa Depan!</span>
        </h1>
        <p class="mt-4 text-xs text-gray-700 font-normal leading-snug">
            "Your Gateway to Global Scholarships"<br>
            "Find Opportunities, Build Your Future"
        </p>
        <form class="mt-6 flex items-center max-w-xs bg-white rounded-full shadow-md overflow-hidden">
            <input type="text" placeholder="Search scholarship..." class="flex-grow px-4 py-2 text-xs text-gray-500 placeholder-gray-400 focus:outline-none">
            <button type="submit" aria-label="Search" class="bg-blue-600 hover:bg-blue-700 transition text-white px-4 py-2 rounded-full">
                <i class="fas fa-search text-sm"></i>
            </button>
        </form>
        <button type="button" class="mt-6 bg-blue-600 hover:bg-blue-700 transition text-white text-xs font-semibold px-6 py-2 rounded">
            Let's get started!
        </button>
    </div>
    <div class="max-w-lg w-full">
        <img src="https://storage.googleapis.com/a1aa/image/1f5c056d-c3da-4651-78b5-61855e945762.jpg" alt="Students" class="w-full h-auto">
    </div>
</div>
@endsection
