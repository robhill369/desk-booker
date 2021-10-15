<x-layout.app>

    <div class="relative mt-10">
        <h1 class="font-bold text-6xl text-blue-900 text-center">Welcome to desk booker.</h1>
    
    @auth
    <h2 class="font-semibold text-2xl mt-5 text-gray-800 text-center
    ">Book your desk at the office today:</h2>
    </div>
        <div class="container w-1/2 mx-auto text-center">
            <div class="text-blue-800 font-semibold text-3xl mt-3">
                {{ date('l jS Y') }}
            </div>
            
            @if ($rooms->count())
                <div class="grid grid-cols-1 gap-6 mt-5 pb-20">
                    @foreach ($rooms as $room)
                        <div class="bg-white h-auto rounded-xl shadow-inner">
                            <div class="mx-3 my-4">
                                <div class="mt-2 text-2xl font-semibold text-gray-800 text-left pl-5">
                                    {{ $room->name }}
                                </div>
                                <div class="lg:grid lg:grid-cols-5 gap-5 mt-4">
                                    @foreach ($desks->where('room_id', $room->id) as $desk)
                                            {{-- @if() --}}
                                                {{-- <x-grid.desks.booked :desk='$desk'>{{ $user->name }}</x-grid.desks.booked> --}}
                                            {{-- @else --}}
                                                <div x-data="{show: false}">
                                                    <x-grid.desks.available :desk='$desk' :room="$room" :user="$user"/>
                                                </div>
                                            {{-- @endif --}}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-xl mt-10">No bookings available yet. Please check back later!</p>
            @endif

        </div>

    @else
        <x-auth.register-card />
    @endauth
</x-layout.app>
