{{-- <div class="flex justify-center items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="w-6 h-6 text-neutral-200">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
    <input wire:model.live.debounce.500ms='search' type="text" placeholder="Search..."
        class="w-full bg-zinc-800 ml-2 rounded px-2 py-2 hover:bg-zinc-600 placeholder:text-left" />
</div> --}}


<div class="flex justify-center items-center w-full">
    <div class="relative w-full">
        <input wire:model.live.debounce.500ms='search' type="text" placeholder="Search..." 
            class="bg-zinc-800 rounded px-10 py-2 w-full hover:bg-zinc-600" />
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </div>
    </div>
</div>