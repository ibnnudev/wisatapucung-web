<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.blog.index'), 'name' => 'Blog'],
        ['route' => route('admin.blog.edit', $blog->id), 'name' => 'Edit Blog'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.blog.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- thumbnail --}}
            <div>
                <x-input-label for="thumbnail" :value="__('Foto (max 1MB)')" required />
                <x-file-input id="thumbnail" name="thumbnail" :value="old('thumbnail', $blog->thumbnail)" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />

                <a href="{{ route('admin.blog.get-image', $blog->thumbnail) }}" target="_blank"
                    class="text-sm font-medium underline mt-2">
                    Gambar telah di unggah: {{ $blog->thumbnail }} ↗
                </a>

            </div>

            {{-- title --}}
            <div>
                <x-input-label for="title" :value="__('Judul')" required />
                <x-text-input id="title" name="title" :value="old('title', $blog->title)" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            {{-- keyword max 10 --}}
            <div>
                <x-input-label for="keyword" :value="__('Keyword')" required />
                <x-text-input id="keyword" name="keyword" :value="old('keyword', $blog->keyword)" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('keyword')" class="mt-2" />

                <small class="text-gray-500">Maksimal 10 kata kunci, pisahkan dengan koma (,)</small>
            </div>

            {{-- creator --}}
            <div>
                <x-input-label for="creator" :value="__('Penulis')" required />
                <x-text-input id="creator" name="creator" :value="old('creator', $blog->creator)" type="text"
                    class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('creator')" class="mt-2" />
            </div>

            {{-- content --}}
            <div>
                <x-input-label class="mb-2" for="content" :value="__('Konten')" required />
                <x-editor />
                <textarea name="content" id="editor-content" class="wysiwyg-input hidden" required>{{ $blog->content }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>

            {{-- Status --}}
            <div>
                <x-input-label for="status" :value="__('Status')" required />
                <select name="status" id="status"
                    class="mt-1 block w-full text-sm rounded-md shadow-sm border-gray-300 focus:border-black focus:ring-black">
                    <option value="draft" @if ($blog->status == 'draft') selected @endif>Draft</option>
                    <option value="published" @if ($blog->status == 'published') selected @endif>Published</option>
                </select>
                <x-input-error :messages="$errors->get('status')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2">
                <x-primary-button type="submit">Update</x-primary-button>
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
