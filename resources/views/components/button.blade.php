<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-pink-300 border border-transparent rounded-md font-semibold text-xs text-zinc-800 uppercase tracking-widest active:bg-pink-500 focus:outline-none focus:border-pink-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
