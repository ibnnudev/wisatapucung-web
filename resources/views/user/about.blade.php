<x-guest-layout>
    <div class="bg-white">
        <x-header theme="dark" />
    </div>

    {{-- SECOND --}}
    <section class="pt-48 overflow-hidden bg-gray-50 sm:pt-16 lg:pt-32">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->section1_title }}
                </h2>
                <p class="mt-4 text-base leading-relaxed text-gray-600">
                    {{ $data->section1_description }}
                </p>
            </div>

            <div class="mt-10 sm:mt-16">
                <img class="w-full max-w-5xl mx-auto -mb-16 rounded-lg shadow-xl object-cover"
                    src="{{ route('user.about-us.get-image', $data->section1_image) }}" alt="image section 1"
                    loading="lazy" />
            </div>
        </div>
    </section>
    {{-- END SECOND --}}

    {{-- THIRD --}}
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="grid grid-cols-1 text-center sm:grid-cols-2 gap-y-8 lg:grid-cols-4 sm:gap-12">
                @forelse ($bussiness as $item)
                    <div>
                        <div class="flex items-center justify-center w-20 h-20 mx-auto bg-gray-50 rounded-full">
                            <img class="w-12 h-12" src="{{ route('user.about-us.get-image', $item->image) }}"
                                alt="icon" />
                        </div>
                        <h3 class="mt-8 text-lg font-semibold text-black">{{ $item->title }}</h3>
                        <p class="mt-4 text-sm text-gray-600">
                            {{ $item->description }}
                        </p>
                    </div>
                @empty
                    <p class="text-center colspan-4">No data available</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- END THIRD --}}

    {{-- FOURTH --}}
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->section2_title }}
                </h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">
                    {{ $data->section2_description }}
                </p>
            </div>

            <div class="relative mt-12 lg:mt-32">
                <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                    @forelse ($potentials as $item)
                        <div>
                            <img class="w-full h-72 rounded-lg shadow-lg mx-auto object-cover"
                                src="{{ route('user.about-us.get-image', $item->image) }}" alt="" />
                            <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">{{ $item->title }}
                            </h3>
                            <p class="mt-4 text-base text-gray-600">
                                {{ $item->description }}
                            </p>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    {{-- END FOURTH --}}

    {{-- FAQ --}}
    @include('user.components.faq-component')
    {{-- END FAQ --}}

    {{-- FOOTER --}}
    <x-footer />
    {{-- END FOOTER --}}

</x-guest-layout>
