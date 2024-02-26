<span @class([
    'badge',
    'p-2',
    'fs-6',
    'bg-success' => $status === 1,
    'bg-danger' => $status === 0,
])>
    {{ $status === 1 ? 'Ativado' : 'Desativo' }}
</span>
