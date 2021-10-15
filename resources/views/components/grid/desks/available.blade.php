<button @click="show = !show">
<div class="rounded-lg w-40 hover hover:bg-blue-500 hover:text-white transition duration-150 ease-in-out shadow-md bg-blue-200 text-center h-16" >
    <div class="pt-1.5 text-lg font-medium">
        Desk {{ $desk->id }}
    </div>
    <div class=" text-sm font-medium ">
        Available
    </div>
</div>
</button>

<div x-show="show" class="fixed inset-0 bg-white z-40 flex items-center justify-center bg-opacity-70">
    <x-modal :desk="$desk" :room="$room" :user="$user"/>    
</div>
