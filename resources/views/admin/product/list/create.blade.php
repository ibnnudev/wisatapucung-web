<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.product.index'), 'name' => 'Produk'],
        ['route' => route('admin.product.list-product.create'), 'name' => 'Tambah Produk'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.product.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.product.list-product.store') }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            {{-- thumbnail --}}
            <div>
                <x-input-label for="image" :value="__('Foto (max 1MB)')" required />
                <x-file-input id="image" name="image" :value="old('image')" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="old('title')" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <x-input-label class="mb-2" for="description" :value="__('Konten')" required />
                <x-editor />
                <textarea name="description" id="editor-content" class="wysiwyg-input hidden" required>{{ old('description') }}</textarea>
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
