@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">
@endpush

@section('content')
    <div class="container-fluid">
        <div id="loader">
            <img class="loading-image" src="{{ asset('/images/loader.gif') }}" alt="loading..">
        </div>
        <main class="row justify-content-center">
            <section class="col-12 p-1">
                <h1 class="text-center mx-0 my-2">Crow Status</h1>
                <div id="conteudo" class="row w-100 m-0 p-2">
                    @foreach ($types as $type)
                        <x-list :name="ucfirst(__($type))" :id="slug($type)" />
                    @endforeach
                </div>
            </section>
        </main>
    </div>

    @foreach ($sites as $type => $items)
        @foreach ($items as $site)
            <script>
                $.ajax({
                    type: "GET",
                    url: "/status/{{ $site->id }}",
                    cache: false,
                    success: function(result) {
                        $("#{{ slug($type) }} div.div-interna").append(result)
                    }
                });
            </script>
        @endforeach
    @endforeach
@endsection
