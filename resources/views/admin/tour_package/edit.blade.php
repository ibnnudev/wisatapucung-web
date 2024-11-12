<x-app-layout>

    <x-breadcrumb :items="[
        ['route' => route('admin.tour-package.index'), 'name' => 'Paket Wisata'],
        ['route' => route('admin.tour-package.edit', $data->id), 'name' => 'Edit Paket Wisata'],
    ]" />

    <x-card class="max-w-5xl mx-auto mb-4">
        <a href="{{ route('admin.tour-package.index') }}">
            <x-secondary-button>Kembali</x-secondary-button>
        </a>

        <form action="{{ route('admin.tour-package.update', $data->id) }}" method="POST" class="mt-5 space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- category select --}}
            <div>
                <x-input-label for="category" class="mb-2" :value="__('Kategori')" required />
                <select id="category" name="category"
                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 shadow-sm sm:text-sm">
                    <option value="">Pilih Kategori</option>
                    <option value="Paket Wajib" {{ $data->category == 'Paket Wajib' ? 'selected' : '' }}>Paket Wajib
                    </option>
                    <option value="Panen" {{ $data->category == 'Panen' ? 'selected' : '' }}>Panen</option>
                    <option value="Permainan" {{ $data->category == 'Permainan' ? 'selected' : '' }}>Permainan</option>
                    <option value="Keterampilan" {{ $data->category == 'Keterampilan' ? 'selected' : '' }}>Keterampilan
                    </option>
                    <option value="Tanaman" {{ $data->category == 'Tanaman' ? 'selected' : '' }}>Tanaman</option>
                </select>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="name" :value="__('Nama Paket Wisata')" required />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$data->name"
                    required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- price --}}
            <div>
                <x-input-label for="price" :value="__('Harga Paket Wisata')" required />
                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="intval($data->price)"
                    required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div class="flex items-center gap-2">
                <x-primary-button type="submit">Update</x-primary-button>
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
