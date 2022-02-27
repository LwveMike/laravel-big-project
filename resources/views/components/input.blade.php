@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-zinc-800 focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50']) !!}>
