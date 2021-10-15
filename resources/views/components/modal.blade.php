<div
    class="w-full grid grid-cols-10 grid-rows-2 sm:max-w-md float-center py-6 bg-white shadow-xl px-6 border-4 border-blue-400 sm:rounded-lg"
    @click.away="show = !show">
    <div class="flex justify-end col-start-10">
        <svg @click="show = !show" class="cursor-pointer" version="1.1" id="Capa_1" width="20px" height="20px"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
            <g>
                <g>
                    <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
                L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
                c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
                l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
                L284.286,256.002z" />
                </g>
            </g>
        </svg>
    </div>

    <div class="row-start-1 row-span-2 col-start-2 col-span-8 justify-center w-auto col-span-1"">
    <h1 class=" font-semibold text-xl text-gray-800">Confirm your booking of <br /> Desk {{ $desk->id }} in
        {{ $room->name }}?</h1>
    </div>


    <form method="POST" action="{{ route('create_booking') }}" class="col-span-10">
        @csrf

        <!-- Booking a room -->
        <input id="desk_id" name="desk_id" type=hidden value="{{ $desk->id }}">
        <input id="user_id" name="user_id" type=hidden value="{{ $user->id }}">
        <input id="room_id" name="room_id" type=hidden value="{{ $room->id }}">
        <div>
            <x-auth.button class="ml-3 mt-5">
                {{ __('book my desk') }}
            </x-auth.button>
        </div>
    </form>

</div>
