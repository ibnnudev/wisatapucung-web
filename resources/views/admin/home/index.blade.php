<x-app-layout>

    <x-breadcrumb :items="[['route' => route('admin.home.index'), 'name' => 'Beranda']]" />

    <x-card>



    </x-card>

    @push('scripts')
        @include('admin.lib.datatable')
        <script></script>
    @endpush

</x-app-layout>
