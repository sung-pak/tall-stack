@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8 bg-white dark:bg-zinc-800 dark:text-indigo-600">

  @include('components.topnav')
  
  <h1 class="text-4xl mb-4">Dall-E</h1>
  <div class="columns-8 p-0 space-y-4">

    @php
      $arr = [
        ["url"=>"https://cdn.openai.com/labs/images/3D render of a cute tropical fish in an aquarium on a dark blue background, digital art.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/An armchair in the shape of an avocado.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/An expressive oil painting of a basketball player dunking, depicted as an explosion of a nebula.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A photo of a white fur monster standing in a purple room.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/An oil painting by Matisse of a humanoid robot playing chess.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A photo of a silhouette of a person in a color lit desert at night.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A futuristic neon lit cyborg face.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A hand drawn sketch of a Porsche 911.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A centered explosion of colorful powder on a black background.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A synthwave style sunset above the reflecting water of the sea, digital art.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A cat riding a motorcycle.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A comic book cover of a superhero wearing headphones.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A Formula 1 car driving on a neon road.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/High quality photo of a monkey astronaut.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/A hand-drawn sailboat circled by birds on the sea at sunrise.webp?v=1"],
        ["url"=>"https://cdn.openai.com/labs/images/Two%20futuristic%20towers%20with%20a%20skybridge%20covered%20in%20lush%20foliage,%20digital%20art.webp?v=1"],
      ];
    @endphp

    @foreach ($arr as $item)
      @php
        $count= $loop->index + 1;
        $size='' //'h-64 w-64';
      @endphp

      {{-- @if($count==1)
        @php($size='h-96 w-96')
      @endif --}}

      <img src="{{ $item['url'] }}" alt="" class="{{$size}}">
    @endforeach

  </div>
</div>

@endsection