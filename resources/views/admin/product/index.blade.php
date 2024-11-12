<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.product.index'), 'name' => 'Produk']]" />

    <x-card class="max-w-7xl mx-auto mb-4">

        <div class="flex justify-between items-end">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Bagian 1') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.product.update', $data->id) }}" method="POST" class="mt-5 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="$data->title" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            {{-- description --}}
            <div>
                <x-input-label for="description" :value="__('Deskripsi')" required />
                <x-textarea id="description" name="description" class="mt-1 block w-full" :value="$data->description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>

        <hr class="my-4">

        {{-- Tambahkan item --}}
        <div>
            <a href="{{ route('admin.product.list-product.create') }}">
                <x-secondary-button class="mb-4">
                    {{ __('Tambahkan Produk') }}
                </x-secondary-button>
            </a>

            <p class="uppercase text-sm text-gray-700 my-4 font-semibold">Daftar Produk</p>

            <div class="mt-5">
                <x-table :headers="['Gambar', 'Judul', 'Aksi']">
                    @foreach ($listProduct as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                            <td class="text-gray-500">
                                <img class="w-20 h-20 object-cover rounded-md shadow-sm"
                                    src="{{ route('admin.product.get-image', $item->image) }}"
                                    alt="{{ $item->title }}">
                            </td>
                            <td class="text-gray-500">
                                {{ $item->title }}
                            </td>
                            <td class="text-gray-500">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('admin.product.list-product.edit', $item->id) }}">
                                        <x-secondary-button>
                                            {{ __('Edit') }}
                                        </x-secondary-button>
                                    </a>
                                    <form action="{{ route('admin.product.list-product.destroy', $item->id) }}"
                                        method="POST">
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
        <script>
            // disable submit button after form submission
            $('form').submit(function() {
                $(this).find('button[type="submit"]').prop('disabled', true).text('Processing...');
            });
        </script>
    @endpush

</x-app-layout>
