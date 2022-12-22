@extends('layouts.app')

@section('content')

<div class="flex flex-col  min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8 bg-white dark:bg-zinc-800 dark:text-indigo-600">

  @include('components.topnav')
  
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
      ["url"=>"https://cdn.openai.com/labs/images/A pencil and watercolor drawing of a bright city in the future with flying cars.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/\"A sea otter with a pearl earring\" by Johannes Vermeer.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/An Andy Warhol style painting of a french bulldog wearing sunglasses.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/A plush toy robot sitting against a yellow wall.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/A computer from the 90s in the style of vaporwave.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/A sunlit indoor lounge area with a pool with clear water and another pool with translucent pastel pink water, next to a big window, digital art.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/3D render of a pink balloon dog in a violet room.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/A photograph of a sunflower with sunglasses on in the middle of the flower in a field on a bright sunny day.webp?v=1"],
      ["url"=>"https://cdn.openai.com/labs/images/A van Gogh style painting of an American football player.webp?v=1"]
    ];

    $urlArr = array();
    foreach ($arr as $key => $value) {
      $url = $value['url'];
      $urlArr[]= "'".$url."'";
    }
    $urlArr =  implode( ',', $urlArr );
  @endphp

  <div x-data="{
      search: '',
      items: [{{$urlArr}}],
      get filteredItems() {
        return this.items.filter(ii => {
          return titleFromUrl(ii.toLowerCase()).includes(this.search.toLowerCase());
        });
      }
    }">
    {{-- original: 
      get filteredItems() {
            return this.items.filter(
                i => i.startsWith(this.search)
            )
        }
    this was case sensitive, the new implementation searches in all LowerCase --}}
    <div class="block relative mt-20">
      <h1 class="text-4xl mb-4 inline-block">Dall-E</h1> 
      <input x-model="search" placeholder="Search..." class="inline-block relative bottom-2 left-4 pl-1.5"/>
    </div>

    <div class="columns-8 p-0">
      <template x-for="(item, index) in filteredItems">
        <img :src="item" :title="titleFromUrl(item)" class="mb-4 rounded-lg"/>
      </template>
    </div>

  </div>
</div>

<script>
  const titleFromUrl = (v1)=>{
    let vv = result = /[^/]*$/.exec(v1)[0]; // grab str after final /
    vv = vv.substr(0, vv.lastIndexOf(".")); // knock off str after last .
    return vv;
  }
</script>
@endsection