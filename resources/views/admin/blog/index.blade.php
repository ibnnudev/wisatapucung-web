<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.blog.index'), 'name' => 'Blog']]" />

    <x-card class="max-w-7xl mx-auto mb-4">
        <a href="{{ route('admin.blog.create') }}">
            <x-secondary-button>Tambah Blog</x-secondary-button>
        </a>

        <div class="mt-5">
            <x-table :headers="['Gambar', 'Judul', 'Tanggal', 'Penulis', 'Keyword', 'Status', 'Aksi']">
                @foreach ($data as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <td class="text-gray-500">
                            <img class="w-20 h-20 object-cover rounded-md shadow-sm"
                                src="{{ route('admin.blog.get-image', $item->thumbnail) }}" alt="{{ $item->title }}">
                        </td>
                        <td class="text-gray-500">
                            <a href="{{ route('user.information.detail', $item->slug) }}" target="_blank"
                                class="font-medium text-gray-800 underline">
                                {{ $item->title }} ↗
                            </a>
                        </td>
                        <td class="text-gray-500">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td class="text-gray-500">
                            {{ $item->creator }}
                        </td>
                        <td class="text-gray-500">
                            @php
                                $keyword = explode(',', $item->keyword);
                            @endphp
                            @forelse ($keyword as $k)
                                <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded ">
                                    {{ $k }}
                                </span>
                            @empty
                                <p class="text-red-500">Keyword belum diatur</p>
                            @endforelse
                        </td>
                        <td class="text-gray-500">
                            @if ($item->status == 'published')
                                <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">
                                    {{ $item->status }}
                                </span>
                            @else
                                <span class="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded">
                                    {{ $item->status }}
                                </span>
                            @endif
                        </td>
                        <td class="text-gray-500">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('admin.blog.edit', $item->id) }}">
                                    <x-secondary-button>
                                        {{ __('Edit') }}
                                    </x-secondary-button>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $item->id) }}" method="POST">
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
