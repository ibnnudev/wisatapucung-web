<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.home.index'), 'name' => 'Beranda']]" />

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

        <form action="{{ route('admin.home.update', $data->id) }}" class="mt-5 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section1_title" :value="__('Judul')" />
                <x-text-input id="section1_title" name="section1_title" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section1_content" :value="__('Deskripsi Singkat')" />
                <x-textarea id="section1_content" name="section1_content" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_content')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section1_image" :value="__('Latar Gambar')" />
                <x-file-input type="file" id="section1_image" name="section1_image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section1_image')" class="mt-2" />
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>

    </x-card>

    <x-card class="max-w-5xl mx-auto">

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

        <form action="{{ route('admin.home.update', $data->id) }}" class="mt-5 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="section2_slogan" :value="__('Slogan')" />
                <x-text-input id="section2_slogan" name="section2_slogan" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_slogan')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section2_title" :value="__('Judul')" />
                <x-text-input id="section2_title" name="section2_title" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_title')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="section2_image" :value="__('Gambar')" />
                <x-file-input type="file" id="section2_image" name="section2_image" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('section2_image')" class="mt-2" />
            </div>

            <div>
                <x-secondary-button data-modal-target="modal-items-section2" data-modal-toggle="modal-items-section2">
                    {{ __('Tambahkan Item') }}
                </x-secondary-button>
            </div>

            <x-primary-button type="submit">
                {{ __('Simpan Perubahan') }}
            </x-primary-button>
        </form>
    </x-card>

    <!-- Modal Section 2 -->
    <div id="modal-items-section2" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Form Item - Bagian 2
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-items-section2">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form action="{{ route('admin.home.update', $data->id) }}" method="POST" class="space-y-6">
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="title" :value="__('Judul')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Deskripsi')" />
                            <x-textarea id="description" name="description" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Gambar')" />
                            <x-file-input type="file" id="image" name="image" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b gap-x-2">
                        <x-primary-button data-modal-hide="modal-items-section2" type="submit">
                            Simpan
                        </x-primary-button>
                        <x-danger-button data-modal-hide="modal-items-section2" type="button">Batal</x-danger-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        @include('admin.lib.datatable')
        <script></script>
    @endpush

</x-app-layout>
