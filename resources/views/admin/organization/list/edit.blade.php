<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.organization.index'), 'name' => 'Produk'],
        ['route' => route('admin.organization.list-organization.edit', $data->id), 'name' => 'Edit Produk'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.organization.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.organization.list-organization.update', $data->id) }}" method="POST"
            class="mt-5 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- thumbnail --}}
            <div>
                <x-input-label for="image" :value="__('Foto (max 1MB)')" required />
                <x-file-input id="image" name="image"
                    value="{{ route('admin.organization.get-image', $data->image) }}" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />

                <small class="mt-2 text-gray-700">Gambar telah diunggah: <a
                        href="{{ route('admin.organization.get-image', $data->image) }}" target="_blank"
                        class="text-black font-medium underline">{{ $data->image }}&nbsp; ↗</a></small>
            </div>

            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="$data->title" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <x-input-label class="mb-2" for="description" :value="__('Konten')" required />
                <x-editor />
                <textarea name="description" id="editor-content" class="wysiwyg-input hidden" required>{{ $data->description }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2">
                <x-primary-button type="submit">Simpan</x-primary-button>
            </div>

        </form>
    </x-card>

    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" type="module"></script>
        <script>
            // disable submit button
            $('form').submit(function() {
                $(this).find('button[type="submit"]').prop('disabled', true).text('Processing...');
            });
        </script>
    @endpush
</x-app-layout>
