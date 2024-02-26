@extends('layouts.admin')

@push('title')
    Dashboard
@endpush

@push('page')
    Painel
@endpush

@section('content')
    <div class="container-fluid">
        <x-success />
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-body">
                    @can('create', \App\Models\Site::class)
                        <a class="editbt btn btn btn-success mb-3 rounded" href="{{ route('sites.create') }}">Criar novo site</a>
                    @endcan
                    <table class="table table-hover table-dark mb-0">
                        <thead>
                            <tr>
                                <th class="text-danger none" scope="col">NOME</th>
                                <th class="text-danger none" scope="col">URL</th>
                                <th class="text-danger none" scope="col">TIPO</th>
                                <th class="text-danger none" scope="col">SITUAÇÃO</th>
                                @can('update', \App\Models\Site::class)
                                    <th class="text-danger nonefor" scope="col">Editar</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            <x-table-row-dashboard :sites="$sites" />
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5">
        {{ $sites->links() }}
    </div>
@endsection
