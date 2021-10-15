<nav class="w-full relative bg-blue-400 shadow-lg flex flex-wrap fixed z-40 top-0 h-20">
    <div class="container justify-between relative flex items-center my-auto mx-auto w-full">
        <div>
            <a href="/" class="flex items-center text-5xl font-bold text-gray-50">
                desk booker.
            </a>
        </div>

        @auth
            <div class="text-gray-800 text-lg font-medium">
                <ul>
                    <div class="grid gap-5 grid-cols-3 divide-x divide-grey-800 items-center justify-between">
                        <li>
                            Hello, {{ auth()->user()->name }}.
                        </li>

                        @if (auth()->user()?->email ==="test@test.test")
                            
                                <li>
                                <a class="hover hover:text-white" href="{{ route('create-room') }}">  Create Room</a>
                                </li>
                        @endif

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-auth.dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-auth.dropdown-link>
                            </form>
                        </li>
                    </div>
                </ul>
            </div>

        @else
            <div class="text-gray-800 text-lg font-medium">
                <ul>
                    <div class="grid grid-cols-3 divide-x divide-grey-800 items-center justify-between">
                        <li>
                            <a class="mx-6 hover hover:text-gray-50" href="/register">Register</a>
                        </li>
                        <li>
                            <a href="/login" class="mx-6 hover hover:text-gray-50">Log In</a>
                        </li>
                    </div>
                </ul>
            </div>
        @endauth


</nav>
