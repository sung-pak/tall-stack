@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8 bg-white dark:bg-zinc-800 dark:text-indigo-600">

        @include('components.topnav')

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto " />
                    </a>

                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600 dark:text-fuchsia-600">
                      TALL<span class="font-serif font-thin text-medium" :class="lightMode ? 'hidden' : ''" >$</span><span  :class="lightMode ? '' : 'hidden'" >s</span>tack  
                        {{-- config('app.name') --}}
                    </h1>
                    {{-- logo
                    https://alpinejs.dev/alpine_long.svg
                    https://laravel.com/img/logomark.min.svg --}}
                    <ul class="list-reset">
                        <li class="inline px-4">
                            <a href="https://tailwindcss.com" class="font-medium  hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Tailwind CSS</a>
                        </li>
                       {{-- https://github.com/alpinejs/alpine --}}
                       <li class="inline px-4">
                            <a href="https://alpinejs.dev/" class="font-medium  hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Alpine.js</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel.com" class="font-medium  hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Laravel</a>
                        </li>
                        <li class="inline px-4">
                            <a href="https://laravel-livewire.com" class="font-medium  hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Livewire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex justify-center pt-9 ">
          <a href="/dall-e">@include('icons.dalle')</a> 

          {{-- click w/ condition:
          x-on:click="return something !== null"  --}}

          <a href="#" :class="lightMode ? 'hidden' : ''"  class="relative" x-on:click.prevent="alert('hello')" >
            <span class="px-4 text-gray-600">
            {{-- <span class="absolute flex justify-center bottom-6 right-6">⚡</span> --}}
            ⚡ | ⚡ 
            {{-- &#x2022; | &#x2022;  --}}
            <span class="absolute flex justify-center ml-8"> - </span> 
            </span>
          </a>

          <span class="px-6" :class="lightMode ? '' : 'hidden' "> | </span>

          <a href="/lexica">@include('icons.lexica')</a>
        </div>

    </div>
@endsection
