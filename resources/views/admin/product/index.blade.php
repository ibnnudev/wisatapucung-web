<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.product.index'), 'name' => 'Produk']]" />

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
            <x-secondary-button class="mb-4" data-modal-target="modal-items" data-modal-toggle="modal-items">
                {{ __('Tambahkan Produk') }}
            </x-secondary-button>

            <p class="uppercase text-sm text-gray-700 my-4 font-semibold">Daftar Produk</p>

            @forelse ($listProduct as $item)
                <div class="border border-gray-300 p-6 rounded-lg shadow-sm" id="listProduct-{{ $item->id }}">
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
                                    href="{{ route('admin.product.get-image', $item->image) }}" target="_blank"
                                    class="text-black font-medium underline">{{ $item->image }}&nbsp; ↗</a></small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <x-input-label for="description" :value="__('Deskripsi')" required />
                        <x-editor />
                        <textarea name="description" id="editor-content" class="hidden" required>{{ $item->description }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="flex justify-end gap-2">
                        <x-primary-button type="button" onclick="updateItems({{ $item->id }})">
                            {{ __('Simpan Perubahan') }}
                        </x-primary-button>
                        <x-danger-button type="button" onclick="deleteItems({{ $item->id }})">
                            {{ __('Hapus') }}
                        </x-danger-button>
                    </div>
                </div>
            @empty
                <p class="mt-5 text-gray-700 text-sm">Belum ada item yang ditambahkan.</p>
            @endforelse
        </div>

    </x-card>

    <!-- Modal listProduct -->
    <div id="modal-items" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Produk
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.product.list-product.store') }}" method="POST" class="space-y-6"
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
                        <x-primary-button data-modal-hide="modal-items" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items" type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" type="module"></script>
        <script>
            function deleteItems(id) {
                if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                    // disable button
                    $(`#listProduct-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.product.list-product.destroy', ':id') }}`.replace(':id', id),
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

            function updateItems(id) {
                const formData = new FormData();

                // Append form data
                formData.append('_method', 'PUT'); // Indicates the request should be treated as PUT
                formData.append('_token', '{{ csrf_token() }}'); // CSRF token
                formData.append('title', $(`#listProduct-${id} #title`).val());
                const descriptionContent = $(`#listProduct-${id} #editor-content`).val(); // or use the editor's API
                formData.append('description', descriptionContent);

                // Check if an image file is selected before appending
                const imageFile = $(`#listProduct-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#listProduct-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.product.list-product.update', ':id') }}`.replace(':id', id),
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
