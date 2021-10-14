<x-layout.app>
    <x-auth.auth-card>
        <x-slot name="tagline">
            Create a room at 
            <br/>
            <span class="text-blue-500">CompanyName</span>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth.auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('create-room') }}">
            @csrf
            
            <!-- Name -->
            <div>
                <x-auth.label for="name" :value="__('Room Name')" />

                <x-auth.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
        
            {{--  Room Quantity  --}}

            <div class="mt-5">
                <x-auth.label for="desk_quantity" :value="__('Desk Quantity')" />
                <x-auth.input id="desk_quantity" class="block mt-1" type="number" min="0" name="desk_quantity" :value="old('desk_quantity')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-auth.button class="ml-4">
                    {{ __('Create Room') }}
                </x-auth.button>
            </div>
        </form>
    </x-auth.auth-card>
</x-layout.app>