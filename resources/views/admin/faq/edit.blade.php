<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.faq.index'), 'name' => 'FAQ'],
        ['route' => route('admin.faq.edit', $data->id), 'name' => 'Edit FAQ'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.faq.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.faq.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="question" :value="__('Pertanyaan')" required />
                <x-textarea id="question" name="question" :value="$data->question" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('question')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="answer" :value="__('Jawaban')" required />
                <x-textarea id="answer" name="answer" :value="$data->answer" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('answer')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2">
                <x-primary-button type="submit">Simpan</x-primary-button>
            </div>

        </form>
    </x-card>

    @push('scripts')
        <script>
            // disable submit button
            $('form').submit(function() {
                $(this).find('button[type="submit"]').prop('disabled', true).text('Processing...');
            });
        </script>
    @endpush
</x-app-layout>
