<div class="d-inline-block">
    <button @class([
        'badge',
        'p-2',
        'fs-6',
        'bg-success' => $site->active === 1,
        'bg-danger' => $site->active === 0,
    ]) type="button" data-bs-toggle="modal"
        data-bs-target="#disableModal{{ $site->id }}">
        {{ $site->active === 1 ? 'Ativado' : 'Desativo' }}
    </button>

    @can('changeStatus', $site)
        <div class="modal fade" id="disableModal{{ $site->id }}" tabindex="-1"
            aria-labelledby="disableModalLabel{{ $site->id }}" aria-hidden="true">
            <form class="modal-dialog" action="{{ route('sites.disable', $site->id) }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="disableModalLabel{{ $site->id }}">
                            {{ $site->active === 1 ? 'Desativar' : 'Ativar' }}
                            {{ $site->name }}?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        Você tem certeza que desejar {{ $site->active === 1 ? 'desativar' : 'ativar' }} esse site? Para isso
                        você precisa adiconar uma justificativa logo abaixo:
                        <textarea name="reason" id="reason" cols="30" rows="10" required
                            class="form-control d-inline-block w-100 mt-2" style="resize: none;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Alterar status</button>
                    </div>
                </div>
            </form>
        </div>
    @endcan
</div>
