<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.geography.index'), 'name' => 'Demografi']]" />

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

        <form action="{{ route('admin.geography.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section1_title" :value="__('Judul')" required />
                <x-text-input id="section1_title" name="section1_title" :value="$data->section1_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section1_hero_image" :value="__('Latar Gambar')" required />
                <x-file-input type="file" id="section1_hero_image" name="section1_hero_image"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_hero_image')" class="mt-2" />

                @if ($data->section1_hero_image)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.geography.get-image', $data->section1_hero_image) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section1_hero_image }}&nbsp;
                            ↗</a></small>
                @endif
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>

            <hr class="my-4">

            {{-- Tambahkan item --}}
            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-demography"
                    data-modal-toggle="modal-items-demography">
                    {{ __('Tambahkan Item') }}
                </x-secondary-button>

                @forelse ($demography as $item)
                    <div class="border border-gray-300 p-6 rounded-lg shadow-sm" id="demography-{{ $item->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                :value="$item->title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            @if ($item->image)
                                <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                                        href="{{ route('admin.geography.get-image', $item->image) }}" target="_blank"
                                        class="text-black font-medium underline">{{ $item->image }}&nbsp; ↗</a></small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full"
                                :value="$item->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex justify-end gap-2">
                            <x-primary-button type="button" onclick="updateDemography({{ $item->id }})">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deleteDemography({{ $item->id }})">
                                {{ __('Hapus') }}
                            </x-danger-button>
                        </div>
                    </div>
                @empty
                    <p class="mt-5 text-gray-700 text-sm">Belum ada item yang ditambahkan.</p>
                @endforelse
            </div>
        </form>

    </x-card>

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

        <form action="{{ route('admin.geography.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section2_title" :value="__('Judul')" required />
                <x-text-input id="section2_title" name="section2_title" :value="$data->section2_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_title')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>

            <hr class="my-4">

            {{-- Tambahkan item --}}
            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-topography"
                    data-modal-toggle="modal-items-topography">
                    {{ __('Tambahkan Item') }}
                </x-secondary-button>

                @forelse ($topography as $item)
                    <div class="border border-gray-300 p-6 rounded-lg shadow-sm" id="topography-{{ $item->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                :value="$item->title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            @if ($item->image)
                                <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                                        href="{{ route('admin.geography.get-image', $item->image) }}" target="_blank"
                                        class="text-black font-medium underline">{{ $item->image }}&nbsp;
                                        ↗</a></small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full"
                                :value="$item->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex justify-end gap-2">
                            <x-primary-button type="button" onclick="updateTopography({{ $item->id }})">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deleteTopography({{ $item->id }})">
                                {{ __('Hapus') }}
                            </x-danger-button>
                        </div>
                    </div>
                @empty
                    <p class="mt-5 text-gray-700 text-sm">Belum ada item yang ditambahkan.</p>
                @endforelse
            </div>
        </form>

    </x-card>

    <x-card class="max-w-5xl mx-auto mb-4">

        <div class="flex justify-between items-end">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Bagian 3') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.geography.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section3_title" :value="__('Judul')" required />
                <x-text-input id="section3_title" name="section3_title" :value="$data->section3_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section3_title')" class="mt-2" />
            </div>

            {{-- description --}}
            <div>
                <x-input-label for="section3_description" :value="__('Deskripsi')" required />
                <x-editor />
                <textarea name="section3_description" id="editor-content" class="wysiwyg-input hidden" required>{{ $data->section3_description }}</textarea>
                <x-input-error :messages="$errors->get('section3_description')" class="mt-2" />
            </div>

            {{-- section3_image1 --}}
            <div>
                <x-input-label for="section3_image1" :value="__('Gambar 1')" required />
                <x-file-input type="file" id="section3_image1" name="section3_image1"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section3_image1')" class="mt-2" />

                @if ($data->section3_image1)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.geography.get-image', $data->section3_image1) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section3_image1 }}&nbsp;
                            ↗</a></small>
                @endif
            </div>

            {{-- section3_image2 --}}
            <div>
                <x-input-label for="section3_image2" :value="__('Gambar 2')" required />
                <x-file-input type="file" id="section3_image2" name="section3_image2"
                    class="mt-1 block
                    w-full" />
                <x-input-error :messages="$errors->get('section3_image2')" class="mt-2" />

                @if ($data->section3_image2)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.geography.get-image', $data->section3_image2) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section3_image2 }}&nbsp;
                            ↗</a></small>
                @endif
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>

    </x-card>

    <x-card class="max-w-5xl mx-auto mb-4">

        <div class="flex justify-between items-end">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Bagian 4') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.geography.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section4_title" :value="__('Judul')" required />
                <x-text-input id="section4_title" name="section4_title" :value="$data->section4_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section4_title')" class="mt-2" />
            </div>

            {{-- description --}}
            <div>
                <x-input-label for="section4_description" :value="__('Deskripsi')" required />
                <x-textarea id="section4_description" name="section4_description" class="mt-1 block w-full"
                    :value="$data->section4_description" />
                <x-input-error :messages="$errors->get('section4_description')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>

            <hr class="my-4">

            {{-- Tambahkan item --}}
            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-disaster"
                    data-modal-toggle="modal-items-disaster">
                    {{ __('Tambahkan Bencana') }}
                </x-secondary-button>

                @forelse ($disaster as $item)
                    <div class="border border-gray-300 p-6 rounded-lg shadow-sm" id="disaster-{{ $item->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                :value="$item->title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            @if ($item->image)
                                <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                                        href="{{ route('admin.geography.get-image', $item->image) }}" target="_blank"
                                        class="text-black font-medium underline">{{ $item->image }}&nbsp;
                                        ↗</a></small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full"
                                :value="$item->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex justify-end gap-2">
                            <x-primary-button type="button" onclick="updateDisaster({{ $item->id }})">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deleteDisaster({{ $item->id }})">
                                {{ __('Hapus') }}
                            </x-danger-button>
                        </div>
                    </div>
                @empty
                    <p class="mt-5 text-gray-700 text-sm">Belum ada item yang ditambahkan.</p>
                @endforelse
            </div>
        </form>

    </x-card>

    <!-- Modal demography -->
    <div id="modal-items-demography" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Item [Bagian 1]
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-demography">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.geography.demography.store') }}" method="POST" class="space-y-6"
                    enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b gap-x-2">
                        <x-primary-button data-modal-hide="modal-items-demography" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-demography"
                            type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal topography -->
    <div id="modal-items-topography" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Item [Bagian 2]
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-topography">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.geography.topography.store') }}" method="POST" class="space-y-6"
                    enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text"
                                class="mt-1 block
                            w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b gap-x-2">
                        <x-primary-button data-modal-hide="modal-items-topography" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-topography"
                            type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal disaster -->
    <div id="modal-items-disaster" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Item [Bagian 4]
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-disaster">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.geography.disaster.store') }}" method="POST" class="space-y-6"
                    enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Judul')" required />
                            <x-text-input id="title" name="title" type="text"
                                class="mt-1 block
                            w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Gambar')" required />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b gap-x-2">
                        <x-primary-button data-modal-hide="modal-items-disaster" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-disaster" type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" type="module"></script>
        <script>
            function deleteDemography(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#demography-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.geography.demography.destroy', ':id') }}`.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            }

            function updateDemography(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#demography-${id} #title`).val());
                formData.append('description', $(`#demography-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#demography-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#demography-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.geography.demography.update', ':id') }}`.replace(':id', id),
                    type: 'POST', // Use POST with _method override for PUT
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log the error if needed
                        alert('Failed to update item. Please try again.');
                    }
                });
            }

            function deleteTopography(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#topography-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.geography.topography.destroy', ':id') }}`.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            }

            function updateTopography(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#topography-${id} #title`).val());
                formData.append('description', $(`#topography-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#topography-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#topography-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.geography.topography.update', ':id') }}`.replace(':id', id),
                    type: 'POST', // Use POST with _method override for PUT
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log the error if needed
                        alert('Failed to update item. Please try again.');
                    }
                });
            }

            function deleteDisaster(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#disaster-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.geography.disaster.destroy', ':id') }}`.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            }

            function updateDisaster(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#disaster-${id} #title`).val());
                formData.append('description', $(`#disaster-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#disaster-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#disaster-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.geography.disaster.update', ':id') }}`.replace(':id', id),
                    type: 'POST', // Use POST with _method override for PUT
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log the error if needed
                        alert('Failed to update item. Please try again.');
                    }
                });
            }

            // disable submit button after form submission
            $('form').submit(function() {
                $(this).find('button[type="submit"]').prop('disabled', true).text('Processing...');
            });
        </script>
    @endpush

</x-app-layout>
