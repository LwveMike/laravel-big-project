@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-purple-500']) }}>
    {{ $value ?? $slot }}
</label>
