<div class="bg-zinc-800 w-full h-16 px-16">
  <div class="h-full flex flex-row justify-between items-center">
    <div class="flex flex-row justify-center items-center h-full">
     <x-logo />
      <ul class="flex flex-row h-full justify-center mx-4">
        <a href="/women" class="font-roboto font-bold text-zinc-50 tracking-wider border-x border-zinc-600 flex justify-center items-center p-8 text-xl cursor-pointer hover:bg-zinc-600">women</a>
        <a href="/men" class="font-roboto font-bold text-zinc-50 tracking-wider border-x border-zinc-600 flex justify-center items-center p-8 text-xl cursor-pointer hover:bg-zinc-600">men</a>
      </ul>
    </div>
  
    <div class="w-1/2">
      <div class="w-full relative flex flex-row">
        <input type="text" class="border-0 rounded-full indent-3 w-full" placeholder="Type ...">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute top-1/2 -translate-y-1/2 right-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

      </div>
      
    </div>
  
    <div>

    <ul class="flex flex-row justify-between items-center">
      <li x-data="{ open: false }" @mouseleave="open = false" @mouseover="open = true" class="p-4 text-zinc-200 cursor-pointer relative flex flex-row items-center">
        @auth
          <p class="px-6">
            {{ Auth::user()->name}}
          </p>
        @endauth
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
      </svg>


      <div x-show="open"
            x-transition:enter.duration.300ms
            x-transition:leave.duration.500ms
            class="absolute right-0 top-2/3 w-48 py-2 mt-2 bg-zinc-800 shadow-xl">
            @if (Auth::user())

            <a href="/profile"
                class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-600 hover:text-zinc-50">
                Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a :href="route('logout')" class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-600 hover:text-zinc-50"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  Log Out
              </a>
            </form>

            @else 

            <a href="/login"
                    class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-600 hover:text-zinc-50">
                Login
            </a>

            <a href="/register"
                class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-600 hover:text-zinc-50">
                Register
            </a>




            @endif
      </li>

      <li class="p-4 text-zinc-200 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
      </svg>
      </li>
    </ul>
  
    </div>

  </div>

</div>

