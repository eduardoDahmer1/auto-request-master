@foreach ($sites as $site)
    <tr>
        <td scope="row">{{ $site->name }}</td>
        <td><a href="{{ $site->url }}" target="_blank" rel="noopener noreferrer"
                class="text-white">{{ $site->url }}</a></td>
        <td>{{ ucfirst(__($site->type)) }}</td>
        <td>
            <x-button.disable :site="$site" url="{{ route('sites.disable', $site->id) }}" />
        </td>
        @can('update', $site)
            <td>
                <x-table-edit-button url="{{ route('sites.edit', $site->id) }}" />
            </td>
        @endcan
    </tr>
@endforeach
