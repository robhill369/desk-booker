@props(['desks'])

<div class="lg:grid lg:grid-cols-3">
    @foreach ($desks as $desk)
        @if (User::where('user_id', '=', Input::get('user_id'))->exists('bookings')) {
            
        @else
            {{--  <x-grid.desk-card :desk="$desk"/>  --}}
        @endif
        

    @endforeach
</div>


