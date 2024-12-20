<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
    </div>

    <section class="py-32 bg-white lg:py-48">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Paket Wisata Kalipucung
                </h2>
                <p class="max-w-5xl mx-auto mt-4 text-base leading-relaxed text-gray-600">
                    Paket wisata Kalipucung adalah paket wisata yang menawarkan pengalaman berbeda dari wisata
                    pada umumnya. Dengan mengikuti paket wisata ini, Anda akan diajak untuk merasakan kehidupan
                    di desa yang jauh dari hiruk pikuk kota.
                </p>
            </div>

            <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-2 gap-x-16 gap-y-12">
                @forelse ($listTourPackage as $item => $value)
                    <div>
                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black">
                                {{ $item }}
                            </a>
                        </p>
                        <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                        <ol class="list-inside space-y-2 text-gray-500">
                            @forelse ($value as $data)
                                <li>
                                    <div class="flex items-center justify-between">
                                        <span class="font-medium text-black">
                                            {{ $data->name }}
                                        </span>
                                        <span>Rp {{ number_format($data->price, 0, ',', '.') }}</span>
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </ol>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <x-footer />


</x-guest-layout>
