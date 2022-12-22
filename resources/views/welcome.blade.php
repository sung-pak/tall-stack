@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8 bg-white dark:bg-zinc-800 dark:text-indigo-600">

        @include('components.topnav')

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6" x-data ="{mystack: 1}">
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
                            <button href="https://tailwindcss.com" class="font-medium  hover:text-gray-500 dark:hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" :class="{ 'underline': mystack ===1 }" @click="mystack = 1">Tailwind CSS</button>
                        </li>
                       {{-- https://github.com/alpinejs/alpine --}}
                       <li class="inline px-4">
                            <button href="https://alpinejs.dev/" class="font-medium  hover:text-gray-500 dark:hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" :class="{ 'underline': mystack ===2 }" @click="mystack = 2">Alpine.js</button>
                        </li>
                        <li class="inline px-4">
                            <button href="https://laravel.com" class="font-medium  hover:text-gray-500 dark:hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" :class="{ 'underline': mystack ===3 }" @click="mystack = 3">Laravel</button>
                        </li>
                        <li class="inline px-4">
                            <button href="https://laravel-livewire.com" class="font-medium  hover:text-gray-500 dark:hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150" :class="{ 'underline': mystack ===4 }" @click="mystack = 4">Livewire</button>
                        </li>
                    </ul>

                    <div class="text-black dark:text-gray-400 text-center">&#8594 
                        <a x-show ="mystack === 1" href="https://tailwindcss.com" target="_blank">https://tailwindcss.com</a>
                        <a x-show ="mystack === 2" href="https://alpinejs.dev" target="_blank">https://alpinejs.dev</a>
                        <a x-show ="mystack === 3" href="https://laravel.com" target="_blank">https://laravel.com</a>
                        <a x-show ="mystack === 4" href="https://laravel-livewire.com" target="_blank">https://laravel-livewire.com</a>
                    </div>
                      
                </div>
            </div>
        </div>

        <div class="flex justify-center pt-9 ">
          <a href="/dall-e" title="DALL-E">@include('icons.dalle')</a> 

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
