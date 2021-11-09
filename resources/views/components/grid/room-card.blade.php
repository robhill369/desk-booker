@props(['room'])
@props(['desks'])


<div class="bg-white text-center h-60">
    {{ $room->name }}
    <div class="lg:grid lg:grid-cols-3">
        @foreach ($desks as $desk)
        {{--  <x-grid.desk-card :desk="$desk"/>  --}}
        @endforeach
    </div>
</div>