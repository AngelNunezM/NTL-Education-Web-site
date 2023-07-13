<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[rgb(50,5,30)] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[rgb(255,255,255)] hover:text-black focus:bg-[rgb(255,255,255)] focus:text-black active:bg-[rgb(255,255,255)] active:text-black focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
