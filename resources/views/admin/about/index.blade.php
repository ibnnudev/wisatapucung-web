<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.about-us.index'), 'name' => 'Tentang Kami']]" />

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

        <form action="{{ route('admin.about-us.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
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
                            href="{{ route('admin.about-us.get-image', $data->section1_image) }}" target="_blank"
                            class="text-black font-medium underline">{{ $data->section1_image }}</a></small>
                @endif
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>

            <hr class="my-4">

            {{-- Tambahkan item --}}
            {{-- Tambahkan item --}}
            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-bussiness"
                    data-modal-toggle="modal-items-bussiness">
                    {{ __('Tambahkan Item') }}
                </x-secondary-button>

                @forelse ($bussiness as $item)
                    <div class="p-6 border border-gray-100 rounded-lg mb-4" id="bussiness-{{ $item->id }}">
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
                                        href="{{ route('admin.about-us.get-image', $item->image) }}" target="_blank"
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
                            <x-primary-button type="button" onclick="updateBussiness({{ $item->id }})">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deleteBussiness({{ $item->id }})">
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

        <form action="{{ route('admin.about-us.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section2_title" :value="__('Judul')" required />
                <x-text-input id="section2_title" name="section2_title" :value="$data->section2_title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section2_description" :value="__('Deskripsi Singkat')" required />
                <x-textarea id="section2_description" name="section2_description" class="mt-1 block w-full"
                    :value="$data->section2_description" />
                <x-input-error :messages="$errors->get('section2_description')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>

            <hr class="my-4">

            {{-- Tambahkan item --}}
            <div>
                <x-secondary-button class="mb-4" data-modal-target="modal-items-potential"
                    data-modal-toggle="modal-items-potential">
                    {{ __('Tambahkan Potensi') }}
                </x-secondary-button>

                @forelse ($potentials as $item)
                    <div class="p-6 border border-gray-100 rounded-lg mb-4" id="potential-{{ $item->id }}">
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
                                        href="{{ route('admin.about-us.get-image', $item->image) }}" target="_blank"
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
                            <x-primary-button type="button" onclick="updatePotential({{ $item->id }})">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                            <x-danger-button type="button" onclick="deletePotential({{ $item->id }})">
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

    <!-- Modal bussiness -->
    <div id="modal-items-bussiness" tabindex="-1" aria-hidden="true"
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
                        data-modal-hide="modal-items-bussiness">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.about-us.bussiness.store') }}" method="POST" class="space-y-6"
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
                        <x-primary-button data-modal-hide="modal-items-bussiness" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-bussiness"
                            type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Potential -->
    <div id="modal-items-potential" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Item Potensial
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-potential">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.about-us.potential.store') }}" method="POST" class="space-y-6"
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
                        <x-primary-button data-modal-hide="modal-items-potential" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-potential"
                            type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        @include('admin.lib.datatable')
        <script>
            function deletePotential(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#potential-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.about-us.potential.destroy', ':id') }}`.replace(':id', id),
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

            function updatePotential(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#potential-${id} #title`).val());
                formData.append('description', $(`#potential-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#potential-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#potential-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.about-us.potential.update', ':id') }}`.replace(':id', id),
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

            function deleteBussiness(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#bussiness-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.about-us.bussiness.destroy', ':id') }}`.replace(':id', id),
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

            function updateBussiness(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#bussiness-${id} #title`).val());
                formData.append('description', $(`#bussiness-${id} #description`).val());

                // Check if an image file is selected before appending
                const imageFile = $(`#bussiness-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#bussiness-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.about-us.bussiness.update', ':id') }}`.replace(':id', id),
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