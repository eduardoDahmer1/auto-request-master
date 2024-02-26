@props(['name', 'id'])

<ul class="col-lg-3 col-md-6 col-sm-12 p-2 mt-4" id="{{ $id }}">
    <div class="shadow-sm p-3 div-interna">
        <h2>{{ $name }}</h2>
        {{ $slot }}
    </div>
</ul>
