@props(['id','url', 'name', 'price'])


<div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 cursor-pointer py-4 relative">

  <a class="absolute right-8 top-8 text-red-700" href="/delete-product/{{$id}}">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
</a>

<a class="absolute left-8 top-8 text-green-700" href="/update-product/{{$id}}">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg>
</a>
      <div class="px-6">
        <img src={{$url}} class="shadow-lg max-w-full h-auto align-middle border-none undefined">
        <div class="pt-6 text-center">
          <h1 class="text-gray-900 text-xl font-lato font-bold leading-normal mt-0 mb-2">{{ $name }}</h1>
          <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">&pound {{ $price }}</p>
        </div>
      </div>
    </div>