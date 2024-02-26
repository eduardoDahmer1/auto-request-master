@extends('layouts.admin')

@push('title')
    Editar site
@endpush

@push('page')
    Editar site
@endpush

@section('content')
    <div class="container-fluid">
        <form class="row justify-content-center" method="POST" action="{{ route('sites.update', $site->id) }}">
            @csrf
            @method('PUT')
            <div class="col-4">
                <x-form.input name='name' type='text' class="d-flex flex-column align-items-center" :value="$site->name"
                    required="required">
                    Nome
                </x-form.input>
            </div>
            <div class="col-4">
                <x-form.input name='url' type='text' class="d-flex flex-column align-items-center" :value="$site->url"
                    required="required">
                    Url
                </x-form.input>
            </div>
            <div class="col-4 pt-3 d-flex justify-content-center align-items-center">
                <x-form.select name='type' :options="$options" :value="$site->type" required="required">Tipo do site
                </x-form.select>
            </div>
            <button type="submit" class="btn btn-success col-1 text-white fs-4 rounded mt-5">
                Editar
            </button>
        </form>
    </div>
@endsection
