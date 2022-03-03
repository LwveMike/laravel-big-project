<x-app-layout>

  @php
  $category = Request::segment(1);
  @endphp
  <x-delimiter :category="$category" />
  <x-image-container :products="$products" />
</x-app-layout>