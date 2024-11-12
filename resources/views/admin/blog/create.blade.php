<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.blog.index'), 'name' => 'Blog'],
        ['route' => route('admin.blog.create'), 'name' => 'Tambah Blog'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.blog.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.blog.store') }}" method="POST" class="mt-5 space-y-6" enctype="multipart/form-data">
            @csrf
            {{-- thumbnail --}}
            <div>
                <x-input-label for="thumbnail" :value="__('Foto (max 1MB)')" required />
                <x-file-input id="thumbnail" name="thumbnail" :value="old('thumbnail')" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="old('title')" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            {{-- keyword max 10 --}}
            <div>
                <x-input-label for="keyword" :value="__('Keyword')" required />
                <x-text-input id="keyword" name="keyword" :value="old('keyword')" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('keyword')" class="mt-2" />

                <small class="text-gray-500">Maksimal 10 kata kunci, pisahkan dengan koma (,)</small>
            </div>

            {{-- creator --}}
            <div>
                <x-input-label for="creator" :value="__('Penulis')" required />
                <x-text-input id="creator" name="creator" :value="old('creator')" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('creator')" class="mt-2" />
            </div>

            <div>
                <x-input-label class="mb-2" for="content" :value="__('Konten')" required />
                <x-editor />
                <textarea name="content" id="editor-content" class="hidden" required>{{ old('content') }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
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
