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
            <x-secondary-button class="mb-4" data-modal-target="modal-items" data-modal-toggle="modal-items">
                {{ __('Tambahkan Item Organisasi') }}
            </x-secondary-button>

            <p class="uppercase text-sm text-gray-700 my-4 font-semibold">Daftar Item Organisasi</p>

            @forelse ($listOrganization as $item)
                <div class="border border-gray-300 p-6 rounded-lg shadow-sm" id="listOrganization-{{ $item->id }}">
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
                                    href="{{ route('admin.organization.get-image', $item->image) }}" target="_blank"
                                    class="text-black font-medium underline">{{ $item->image }}&nbsp;
                                    ↗</a></small>
                        @endif
                    </div>

                    <div class="mb-3">
                        <x-input-label for="description" :value="__('Deskripsi')" required />
                        <x-editor />
                        <textarea name="description" id="editor-content" class="wysiwyg-input hidden" required>{{ $item->description }}</textarea>
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

    <!-- Modal listOrganization -->
    <div id="modal-items" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Tambah Organisasi
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.organization.list-organization.store') }}" method="POST"
                    class="space-y-6" enctype="multipart/form-data">
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
                    $(`#listOrganization-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                    $.ajax({
                        url: `{{ route('admin.organization.list-organization.destroy', ':id') }}`.replace(':id', id),
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
                formData.append('title', $(`#listOrganization-${id} #title`).val());
                const descriptionContent = $(`#listOrganization-${id} #editor-content`).val(); // or use the editor's API
                formData.append('description', descriptionContent);

                // Check if an image file is selected before appending
                const imageFile = $(`#listOrganization-${id} #image`)[0].files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // disable button
                $(`#listOrganization-${id} button[type="button"]`).prop('disabled', true).text('Processing...');

                $.ajax({
                    url: `{{ route('admin.organization.list-organization.update', ':id') }}`.replace(':id', id),
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
