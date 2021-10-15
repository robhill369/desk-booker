<div class="min-h-screen flex flex-col mt-20 items-center sm:pt-0">
    <div>
        <h1 class="font-bold text-4xl text-gray-800 mb-8 text-center">
            {{ $tagline }}
        </h1>
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
