<li class="list-group-item d-flex justify-content-between align-items-center rounded border-0">
    <a href="{{ $site->url }}" target="_blank" rel="noopener noreferrer">{{ $site->name }}</a>
    <span @class([
        'badge',
        'rounded-pill',
        'bg-secondary',
        'sucesso' => $site->status == 200,
        'manutencao' => $site->status == 503,
        'perigo' => $site->status == 500,
    ])>
        {{ $site->status == 200
            ? 'Operacional'
            : ($site->status == 503
                ? 'Manutenção'
                : ($site->status == 500
                    ? 'Inoperante'
                    : 'Status desconhecido')) }}
    </span>
</li>
