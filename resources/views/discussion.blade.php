@extends('layouts.app')

@section('title', 'Discussion - Explore Scholars')
@section('nav_discussion', 'font-semibold text-gray-900') {{-- Ini kunci agar navbar ABOUT aktif --}}

@section('content')
    <img
        src="https://www.blibli.com/friends-backend/wp-content/uploads/2024/06/B151684-3-Yonsei-University-1024x538.jpg"
        alt="University campus in South Korea"
        class="w-full h-[300px] object-cover rounded-xl"
    />
    <section class="mt-14 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <h2 class="text-gray-900 font-semibold text-2xl md:text-3xl max-w-xl leading-snug">
            Join the Discussion!<br />
            Let's Talk About Scholarships and<br />
            Opportunities on Our Telegram Group!
        </h2>

        <div class="relative flex justify-center items-center">
            <button
                class="bg-gradient-to-r from-orange-400 to-yellow-400 text-white font-semibold text-xs px-6 py-2 rounded-md z-10"
                type="button"
            >
                Join the Discussion
            </button>
            <div
                aria-hidden="true"
                class="absolute flex flex-col justify-between h-16 w-20"
                style="pointer-events:none"
            >
                <span class="block h-1.5 w-0.5 bg-yellow-400 rounded rotate-45 origin-center"></span>
                <span class="block h-1.5 w-0.5 bg-yellow-400 rounded -rotate-45 origin-center"></span>
                <span class="block h-1.5 w-0.5 bg-yellow-400 rounded rotate-45 origin-center"></span>
                <span class="block h-1.5 w-0.5 bg-yellow-400 rounded -rotate-45 origin-center"></span>
            </div>
            <div
                aria-hidden="true"
                class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-3 w-24 h-1.5 bg-yellow-300 rounded"
                style="pointer-events:none"
            ></div>
            <div
                aria-hidden="true"
                class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-3 w-24 h-1.5 bg-yellow-300 rounded"
                style="pointer-events:none"
            ></div>
        </div>
    </section>
@endsection
