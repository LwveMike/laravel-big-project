@props(['products'])

<div class="flex flex-wrap">

  @foreach ($products as $product)

    <!-- <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 cursor-pointer py-4">
      <div class="px-6">
        <img src={{$product->url}} class="shadow-lg max-w-full h-auto align-middle border-none undefined">
        <div class="pt-6 text-center">
          <h1 class="text-gray-900 text-xl font-lato font-bold leading-normal mt-0 mb-2">{{ $product->name }}</h1>
          <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">&pound {{ $product->price }}</p>
        </div>
      </div>
    </div> -->

    <

    <x-product-template :name="$product->name" :url="$product->url" :price="$product->price" />

    @endforeach
</div>