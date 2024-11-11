<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.home.index'), 'name' => 'Beranda']]" />

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

        <form action="{{ route('admin.home.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
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
                <x-input-label for="section1_description" :value="__('Deskripsi Singkat')" required />
                <x-textarea id="section1_description" name="section1_description" class="mt-1 block w-full"
                    :value="$data->section1_description" />
                <x-input-error :messages="$errors->get('section1_description')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section1_image" :value="__('Latar Gambar')" required />
                <x-file-input type="file" id="section1_image" name="section1_image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_image')" class="mt-2" />

                @if ($data->section1_image)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.home.get-image', $data->section1_image) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section1_image }}</a></small>
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
                    {{ __('Bagian 2') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.home.update', $data->id) }}" class="mt-5 space-y-6" enctype="multipart/form-data"
            method="POST">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section2_slogan" :value="__('Slogan')" required />
                <x-text-input id="section2_slogan" name="section2_slogan" type="text" class="mt-1 block w-full"
                    :value="$data->section2_slogan" />
                <x-input-error :messages="$errors->get('section2_slogan')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section2_title" :value="__('Judul')" required />
                <x-text-input id="section2_title" name="section2_title" type="text" class="mt-1 block w-full"
                    :value="$data->section2_title" />
                <x-input-error :messages="$errors->get('section2_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section2_image" :value="__('Gambar')" required />
                <x-file-input type="file" id="section2_image" name="section2_image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_image')" class="mt-2" />

                @if ($data->section2_image)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.home.get-image', $data->section2_image) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section2_image }}</a></small>
                @endif
            </div>

            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-section2"
                    data-modal-toggle="modal-items-section2">
                    {{ __('Tambahkan Item') }}
                </x-secondary-button>

                @forelse ($section2Items as $item)
                    <div class="p-6 border border-gray-100 rounded-lg mb-4" id="item-{{ $item->id }}">
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
                                        href="{{ route('admin.home.get-image', $item->image) }}" target="_blank"
                                        class="text-black font-medium underline">{{ $item->image }}</a></small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <x-input-label for="description" :value="__('Deskripsi')" required />
                            <x-textarea id="description" name="description" class="mt-1 block w-full"
                                :value="$item->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="flex justify-end gap-2">
                            <x-primary-button type="button" onclick="updateItem({{ $item->id }}, 2)">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deleteItem({{ $item->id }})">
                                {{ __('Hapus') }}
                            </x-danger-button>
                        </div>
                    </div>
                @empty
                    <p class="mt-5 text-gray-700 text-sm">Belum ada item yang ditambahkan.</p>
                @endforelse
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
                    {{ __('Bagian 3') }}
                </h2>
            </header>
            <x-secondary-button>
                {{ __('Lihat Perubahan') }}
            </x-secondary-button>
        </div>

        <form action="{{ route('admin.home.update', $data->id) }}" class="mt-5 space-y-6" enctype="multipart/form-data"
            method="POST">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section3_title" :value="__('Judul')" required />
                <x-text-input id="section3_title" name="section3_title" type="text" class="mt-1 block w-full"
                    :value="$data->section3_title" />
                <x-input-error :messages="$errors->get('section3_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section3_description" :value="__('Deskripsi')" required />
                <x-textarea id="section3_description" name="section3_description" class="mt-1 block w-full"
                    :value="$data->section3_description" />
                <x-input-error :messages="$errors->get('section3_description')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section3_image" :value="__('Gambar')" required />
                <x-file-input type="file" id="section3_image" name="section3_image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section3_image')" class="mt-2" />

                @if ($data->section3_image)
                    <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                            href="{{ route('admin.home.get-image', $data->section3_image) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section3_image }}</a></small>
                @endif
            </div>

            <div>
                <x-input-label for="section3_rate" :value="__('Rate')" required />
                <x-text-input id="section3_rate" name="section3_rate" type="text" class="mt-1 block w-full"
                    :value="$data->section3_rate" />
                <x-input-error :messages="$errors->get('section3_rate')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section3_rate_text" :value="__('Rate Text')" required />
                <x-text-input id="section3_rate_text" name="section3_rate_text" type="text"
                    class="mt-1 block w-full" :value="$data->section3_rate_text" />
                <x-input-error :messages="$errors->get('section3_rate_text')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>
    </x-card>

    <!-- Modal Section 2 -->
    <div id="modal-items-section2" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Item - Bagian 2
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-section2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.home.item.store', ['section' => 'section2_items']) }}" method="POST"
                    class="space-y-6" enctype="multipart/form-data">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        @csrf

                        <input type="hidden" name="section_number" value="2" id="section_number" />

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
                        <x-primary-button data-modal-hide="modal-items-section2" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-section2" type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        @include('admin.lib.datatable')
        <script>
            function deleteItem(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    $.ajax({
                        url: `{{ route('admin.home.item.destroy', ':id') }}`.replace(':id', id),
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

            function updateItem(id, section) {
                const formData = new FormData();

                // Append form data
                formData.append('section_number', section);
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#item-${id} #title`).val());
                formData.append('description', $(`#item-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#item-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                $.ajax({
                    url: `{{ route('admin.home.item.update', ':id') }}`.replace(':id', id),
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
        </script>
    @endpush

</x-app-layout>
