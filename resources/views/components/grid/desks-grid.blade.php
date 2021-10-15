@props(['desks'])

<div class="lg:grid lg:grid-cols-3">
    @foreach ($desks as $desk)
    <x-grid.desk-card :desk="$desk"/>
    @endforeach
</div>


