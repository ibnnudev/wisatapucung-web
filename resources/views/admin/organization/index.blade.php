<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.organization.index'), 'name' => 'Organisasi']]" />

    <x-card class="max-w-5xl mx-auto mb-4">

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

        <form action="{{ route('admin.organization.update', $data->id) }}" method="POST" class="mt-5 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section1_title" :value="__('Judul')" required />
                <x-text-input id="section1_title" name="section1_title" :value="$data->section1_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_title')" class="mt-2" />
            </div>

            {{-- section1_tagline --}}
            <div>
                <x-input-label for="section1_tagline" :value="__('Tagline')" required />
                <x-text-input id="section1_tagline" name="section1_tagline" :value="$data->section1_tagline" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_tagline')" class="mt-2" />
            </div>

            {{-- section1_description --}}
            <div>
                <x-input-label for="section1_description" :value="__('Deskripsi')" required />
                <x-textarea id="section1_description" name="section1_description" class="mt-1 block w-full" required
                    :value="$data->section1_description" />
                <x-input-error :messages="$errors->get('section1_description')" class="mt-2" />
            </div>

            {{-- section1_button_text --}}
            <div>
                <x-input-label for="section1_button_text" :value="__('Teks Tombol')" required />
                <x-text-input id="section1_button_text" name="section1_button_text" :value="$data->section1_button_text" type="text"
                    class="mt-1 block
                    w-full" />
                <x-input-error :messages="$errors->get('section1_button_text')" class="mt-2" />
            </div>

            {{-- section1_button_url --}}
            <div>
                <x-input-label for="section1_button_url" :value="__('URL Tombol')" required />
                <x-text-input id="section1_button_url" name="section1_button_url" :value="$data->section1_button_url" type="text"
                    class="mt-1 block
                    w-full" />
                <x-input-error :messages="$errors->get('section1_button_url')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>
    </x-card>

    {{-- section 2 --}}
    <x-card class="max-w-5xl mx-auto mb-4">
        <div class="flex justify-between items-end">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Bagian 2') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.organization.update', $data->id) }}" method="POST" class="mt-5 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section2_title" :value="__('Judul')" required />
                <x-text-input id="section2_title" name="section2_title" :value="$data->section2_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_title')" class="mt-2" />
            </div>

            {{-- section2_description --}}
            <div>
                <x-input-label for="section2_description" :value="__('Deskripsi')" required />
                <x-textarea id="section2_description" name="section2_description" class="mt-1 block w-full" required
                    :value="$data->section2_description" />
                <x-input-error :messages="$errors->get('section2_description')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>

        <hr class="my-4">

        {{-- Tambahkan item --}}
        <div>

            <a href="{{ route('admin.organization.list-organization.create') }}">
                <x-secondary-button class="mb-4">
                    {{ __('Tambahkan Item Organisasi') }}
                </x-secondary-button>
            </a>

            <p class="uppercase text-sm text-gray-700 my-4 font-semibold">Daftar Item Organisasi</p>

            <div class="mt-5">
                <x-table :headers="['Gambar', 'Judul', 'Aksi']">
                    @foreach ($listOrganization as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                            <td class="text-gray-500">
                                <img class="w-20 h-20 object-cover rounded-md shadow-sm"
                                    src="{{ route('admin.organization.get-image', $item->image) }}"
                                    alt="{{ $item->title }}">
                            </td>
                            <td class="text-gray-500">
                                {{ $item->title }}
                            </td>
                            <td class="text-gray-500">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('admin.organization.list-organization.edit', $item->id) }}">
                                        <x-secondary-button>
                                            {{ __('Edit') }}
                                        </x-secondary-button>
                                    </a>
                                    <form
                                        action="{{ route('admin.organization.list-organization.destroy', $item->id) }}"
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
