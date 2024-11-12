<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.contact.index'), 'name' => 'Customer Care']]" />

    <x-card class="max-w-7xl mx-auto mb-4">

        <div class="mt-5">
            <x-table :headers="['Nama', 'No. Telepon', 'Pesan']">
                @foreach ($data as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <td class="text-gray-500">{{ $item->name }}</td>
                        <td class="text-gray-500">{{ $item->phone }}</td>
                        <td class="text-gray-500">{{ $item->message }}</td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </x-card>

    @push('scripts')
        @include('admin.lib.datatable')

        <script>
            if (document.getElementById("selection-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                new simpleDatatables.DataTable("#selection-table", {
                    searchable: true,
                    fixedHeight: false,
                    paging: true,
                });
            }
        </script>
    @endpush
</x-app-layout>
