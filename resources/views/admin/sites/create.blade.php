@extends('layouts.admin')

@push('title')
    Criar site
@endpush

@push('page')
    Criar site
@endpush

@section('content')
    <div class="container-fluid">
        <form class="row justify-content-center" method="POST" action="{{ route('sites.store') }}">
            @csrf
            <div class="col-6">
                <x-form.input name='name' type='text' class="d-flex flex-column align-items-center" required="required">
                    Nome
                </x-form.input>
            </div>
            <div class="col-6">
                <x-form.input name='url' type='text' class="d-flex flex-column align-items-center"
                    required="required">Url
                </x-form.input>
            </div>
            <div class="col-6 pt-3 d-flex justify-content-center align-items-center">
                <x-form.select name='type' :options="$options" required="required">Tipo do site
                </x-form.select>
            </div>
            <div class="col-6 pt-3">
                <x-form.checkbox name='active' class="d-flex justify-content-center align-items-center">Site ativo
                </x-form.checkbox>
            </div>
            <button type="submit" class="btn btn-success col-1 text-white fs-4 rounded mt-5">
                Criar
            </button>
        </form>
    </div>
@endsection
