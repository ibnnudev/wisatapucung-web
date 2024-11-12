<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.faq.index'), 'name' => 'FAQ']]" />

    <x-card class="max-w-7xl mx-auto mb-4">
        <a href="{{ route('admin.faq.create') }}">
            <x-secondary-button>Tambah FAQ</x-secondary-button>
        </a>

        <div class="mt-5">
            <x-table :headers="['Pertanyaan', 'Jawaban', 'Aksi']">
                @foreach ($data as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <td class="text-gray-500">
                            {{ $item->question }}
                        </td>
                        <td class="text-gray-500">
                            {{ $item->answer }}
                        </td>
                        <td class="text-gray-500">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('admin.faq.edit', $item->id) }}">
                                    <x-secondary-button>
                                        {{ __('Edit') }}
                                    </x-secondary-button>
                                </a>
                                <form action="{{ route('admin.faq.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button onclick="return confirm('Apakah anda yakin?')">
                                        {{ __('Hapus') }}
                                    </x-danger-button>
                                </form>
                            </div>
                        </td>
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
