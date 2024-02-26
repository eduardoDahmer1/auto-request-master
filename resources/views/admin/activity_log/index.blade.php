@extends('layouts.admin')

@push('title')
    Histórico
@endpush

@push('page')
    Lista do histórico
@endpush

@section('content')
    <div class="container-fluid">
        <x-success />
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <table class="table table-hover table-dark mb-0">
                        <thead>
                            <tr>
                                <th class="text-danger" scope="col">PROTOCOLO</th>
                                <th class="text-danger" scope="col">MOTIVO</th>
                                <th class="text-danger" scope="col">USUÁRIO</th>
                                <th class="text-danger" scope="col">ALTERADO</th>
                                <th class="text-danger" scope="col">AÇÃO</th>
                                <th class="text-danger" scope="col">DATA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activityLogs as $log)
                                <tr>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->description }}</td>
                                    <td>{{ $log->user->name }}</td>
                                    <td>{{ $log->subject->name }}</td>
                                    <td>{{ ucfirst(__($log->event)) }}</td>
                                    <td>{{ $log->getFormatedCreatedAt() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-5">
        {{ $activityLogs->links() }}
    </div>
@endsection
