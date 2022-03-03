@props(['category'])

@php
$color = 'slate';
if($category === 'men'){
  $color = 'blue';
} else {
  $color = 'pink';
}
@endphp

<div class="w-full p-4 mb-16 bg-{{$color}}-500 flex justify-center items-center">
  <p class="font-ubuntu text-4xl font-semibold text-zinc-50 tracking-wider">{{ $category }}</p>
</div>




