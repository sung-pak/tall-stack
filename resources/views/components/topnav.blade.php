<div class="absolute top-0 right-0 mt-4 mr-4">
  @if (Route::has('login'))
      <div class="space-x-4">
        @if(Request::is('/'))
        @else
          <a class="inline float-left" href="/">
            <x-logo class="w-auto h-8" /></a> 
         {{-- @php ( dd(\Route::current()->getName())); --}}
          @if(Request::is('lexica'))<a href="/dall-e" class="relative inline bottom-0.5" title="DALL-E">@include('icons.dalle')</a>@endif 
          @if(Request::is('dall-e'))<a href="/lexica" class="relative inline bottom-1">@include('icons.lexica')</a>@endif

        @endif

        <div class="relative inline top-1">
          <button x-on:click="lightMode = ! lightMode" :class="lightMode ? '' : 'hidden' "> @include('icons.day') </button>
          <button x-on:click="lightMode = ! lightMode" :class="lightMode ? 'hidden' : '' "> @include('icons.night') </button>
        </div>
          
          @auth
              <a
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
              >
                  Log out
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          @else
              <a href="{{ route('login') }}" class="font-medium hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="font-medium hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
              @endif
          @endauth
      </div>
  @endif
</div>