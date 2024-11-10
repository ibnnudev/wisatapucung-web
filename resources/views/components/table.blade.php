@props(['headers', 'id' => 'selection-table'])

<table id="{{ $id }}">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th>
                    <span class="flex items-center">
                        {{ $header }}
                        @include('icons.sorting-icon')
                    </span>
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
