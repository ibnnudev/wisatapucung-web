<x-guest-layout>
    <div class="bg-whute">
        <x-header theme="light" />

        <section class="py-32 bg-no-repeat bg-cover lg:pt-48 lg:pb-24"
            style="background-image: url('{{ route('user.geography.get-image', $data->section1_hero_image) }}');"
            loading="lazy">
            <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-4xl font-bold text-white sm:text-5xl sm:leading-tight">
                        {{ $data->section1_title }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-8 lg:mt-16 sm:grid-cols-2 md:gap-8">
                    @forelse ($demography as $item)
                        <div class="overflow-hidden backdrop-blur-lg rounded-lg">
                            <div class="px-7 py-9">
                                <div class="flex items-center">
                                    <img src="{{ route('user.geography.get-image', $item->image) }}" alt="icon"
                                        class="flex-shrink-0 w-14 h-14" loading="lazy" />
                                    <h3 class="ml-2 text-4xl lg:text-6xl font-bold text-white">
                                        {{ $item->title }}
                                    </h3>
                                </div>
                                <p class="mt-6 text-base text-white md:max-w-xs">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    {{-- SECOND --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->section2_title }}
                </h2>
            </div>

            <div class="px-5 py-8 mt-12 bg-white lg:mt-20 lg:p-16">
                <div class="grid grid-cols-1 gap-12 lg:gap-16 sm:grid-cols-2">
                    @forelse ($topography as $item)
                        <div class="flex items-start">
                            <img src="{{ route('user.geography.get-image', $item->image) }}" alt="icon"
                                class="flex-shrink-0 w-16 h-16" loading="lazy" />
                            <div class="ml-5">
                                <h3 class="text-lg font-semibold text-black">{{ $item->title }}</h3>
                                <p class="mt-4 text-base text-gray-600">{{ $item->description }}</p>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    {{-- END SECOND --}}

    {{-- THIRD --}}
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center md:grid-cols-2 gap-y-10 md:gap-x-20">
                <div class="pr-12 sm:pr-0">
                    <div class="relative max-w-md mb-12">
                        <img class="object-cover rounded-md shadow-lg h-[30rem]"
                            src="{{ route('user.geography.get-image', $data->section3_image1) }}" alt=""
                            loading="lazy">

                        <img class="absolute origin-bottom-right scale-75 h-[30rem] object-cover rounded-md shadow-lg -bottom-20 -right-12"
                            src="{{ route('user.geography.get-image', $data->section3_image2) }}" alt=""
                            loading="lazy">
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        {{ $data->section3_title }}
                    </h2>

                    <article class="prose prose-ul:list-disc mt-6 text-gray-600">
                        {!! $data->section3_description !!}
                    </article>
                </div>
            </div>
        </div>
    </section>

    {{-- END THIRD --}}

    {{-- FOURTH --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->section4_title }}
                </h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">
                    {{ $data->section4_description }}
                </p>
            </div>

            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                @foreach ($disasters as $item)
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-[15rem] rounded-lg shadow-xl"
                                src="{{ route('user.geography.get-image', $item->image) }}" alt=""
                                loading="lazy">
                        </a>

                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black">
                                {{ $item->title }}
                            </a>
                        </p>
                        <p class="mt-4 text-gray-400">
                            {{ $item->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- END FOURTH --}}

    {{-- FOOTER --}}
    <x-footer />
    {{-- END FOOTER --}}
</x-guest-layout>
