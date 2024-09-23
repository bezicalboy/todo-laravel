<div class="min-h-screen text-zinc-200">
    <div class="container py-6 mx-auto">
        <!-- Create New Todo Form -->
        <div class="mx-auto">
            <div id="create-form" class="hover:shadow-lg p-6 bg-zinc-800 border-zinc-700 border-t-2 rounded-lg">
                <div class="flex">
                    <h2 class="font-semibold text-lg mb-5">Create New Todo</h2>
                </div>
                <div>
                   @include('livewire.includes.create-todo-box')
                </div>
            </div>
        </div>
        
        <!-- Search Box -->
        <div id="search-box" class="flex flex-col items-center px-2 my-4 justify-center">
            @include('livewire.includes.search-box')
        </div>
        
        <!-- Todos List -->
        <div id="todos-list">
            @include('livewire.includes.todo-card')
            <div class="my-2" wire:pool.100ms>
                {{$todos->links()}}
            </div>
        </div>
    </div>
</div>
