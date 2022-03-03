@props(['products'])

<div class="flex flex-wrap">

  @foreach ($products as $product)

    <x-product-change :id="$product->id" :name="$product->name" :url="$product->url" :price="$product->price" />

    @endforeach
</div>