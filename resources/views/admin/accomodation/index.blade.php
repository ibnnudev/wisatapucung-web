<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.accomodation.index'), 'name' => 'Atraksi']]" />

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

        <form action="{{ route('admin.accomodation.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="$data->title" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            {{-- image --}}
            <div>
                <x-input-label for="image" :value="__('Gambar')" required />
                <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                        href="{{ route('admin.accomodation.get-image', $data->image) }}" target="_blank"
                        class="text-black font-medium underline">{{ $data->image }}&nbsp;
                        ↗</a></small>
            </div>

            {{-- description --}}
            <div>
                <x-input-label for="description" :value="__('Deskripsi')" required />
                <x-editor />
                <textarea name="description" id="editor-content" class="wysiwyg-input hidden" required>{{ $data->description }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>

    </x-card>

    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" type="module"></script>
        <script>
            // disable button when form is submitting and change button text
            document.querySelector('form').addEventListener('submit', function() {
                document.querySelector('button[type="submit"]').setAttribute('disabled', true);
                document.querySelector('button[type="submit"]').textContent = 'Processing...';
            });
        </script>
    @endpush

</x-app-layout>
