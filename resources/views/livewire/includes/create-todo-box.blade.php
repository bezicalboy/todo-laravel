<form>
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-neutral-200">
            Todo
        </label>
        <input wire:model='name' type="text" id="name" placeholder="Enter Todo.."
            class="bg-zinc-900 text-zinc-200 text-sm rounded block w-full p-2.5">
        @error('name')
            <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" wire:click.prevent='create'
        class="px-4 py-2 bg-zinc-900 text-neutral-200 font-semibold rounded hover:bg-zinc-600">
        Create
    </button>
    @session('success')
        <span class="text-green-500 text-xs">{{ session('success') }}</span>
    @endsession
</form>
