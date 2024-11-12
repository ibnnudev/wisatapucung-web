<x-guest-layout>
    <div class="bg-white">
        <x-header theme="light" />
        <div class="relative isolate px-6 pt-14 lg:px-8 mb-24">
            <div class="mx-auto max-w-3xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1
                        class="text-balance text-shadow text-5xl font-semibold tracking-tight text-white sm:text-8xl fd-in-text">
                        {{ $data->section1_title }}
                    </h1>
                    <p class="mt-8 text-pretty text-lg font-medium text-white sm:text-xl/8">
                        {{ $data->section1_description }}
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Jelajah
                        </a>
                        <a href="#" class="text-sm/6 font-semibold text-white">Selengkapnya <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-xs
            {{-- add inset overlay --}}
            bg-gradient-to-b from-white via-white to-transparent sm:from-white sm:via-white sm:to-transparent
            {{-- end add inset overlay --}}
            "
                aria-hidden="true">
                <img src="{{ route('user.home.get-image', $data->section1_image) }}" loading="lazy" alt=""
                    class="object-cover w-full h-[55rem]" />
            </div>
        </div>
    </div>

    {{-- THIRD --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="max-w-xl mx-auto text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">
                    {{ $data->section2_slogan }}
                </p>

                <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->section2_title }}
                </h2>
            </div>

            <div class="grid items-center grid-cols-1 mt-12 gap-y-10 lg:grid-cols-5 sm:mt-20 gap-x-4">
                <div class="space-y-8 lg:pr-16 xl:pr-24 lg:col-span-2 lg:space-y-12">
                    @forelse ($homeItem->where('section_number', 2) as $item)
                        <div class="flex items-start"
                            onclick="window.location.href=`{{ route('user.information.detail', ['slug', $item->slug]) }}`">
                            <img src="{{ route('user.home.get-image', $item->image) }}" alt=""
                                class="flex-shrink-0 w-12 h-12" loading="lazy" />
                            <div class="ml-5">
                                <h3 class="text-xl font-semibold text-black">
                                    {{ $item->title }}
                                </h3>
                                <p class="mt-3 text-base text-gray-600">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p>Data not found</p>
                    @endforelse
                </div>

                <div class="lg:col-span-3">
                    <img class="w-full rounded-lg shadow-xl"
                        src="{{ route('user.home.get-image', $data->section2_image) }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    {{-- END THIRD --}}

    {{-- FEATURES --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-x-20">
                <div class="">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        {{ $data->section3_title }}
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-gray-600">
                        {{ $data->section3_description }}
                    </p>
                </div>

                <div class="relative pl-20 pr-6 sm:pl-6 md:px-0">
                    <div class="relative w-full max-w-xs mt-4 mb-10 ml-auto">
                        <img class="ml-auto h-[26rem] object-cover rounded-lg shadow-xl"
                            src="{{ route('user.home.get-image', $data->section3_image) }}" alt="" />

                        <img class="absolute -top-4 -left-12"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/features/1/wavey-lines.svg"
                            alt="" />

                        <div class="absolute -bottom-10 -left-16">
                            <div class="bg-orange-600 rounded-lg">
                                <div class="px-8 py-10">
                                    <span class="block text-4xl font-bold text-white lg:text-5xl">
                                        {{ $data->section3_rate }} </span>
                                    <span class="block mt-2 text-base leading-tight text-white">
                                        {{ $data->section3_rate_text }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
                <div class="relative mb-12">
                    <img class="w-full h-[25rem] rounded-md"
                        src="{{ route('user.home.get-image', $data->section4_image) }}" alt="" />

                    <div class="absolute w-full max-w-xs px-4 -translate-x-1/2 sm:px-0 sm:max-w-sm left-1/2 -bottom-12">
                        <div class="overflow-hidden bg-white rounded">
                            <div class="px-10 py-6">
                                <div class="flex items-center">
                                    <p class="flex-shrink-0 text-3xl font-bold text-blue-600 sm:text-4xl">
                                        {{ $data->section4_rate }} </p>
                                    <p class="pl-6 text-sm font-medium text-black sm:text-lg">
                                        {{ $data->section4_rate_text }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full">
                        <svg class="w-8 h-8 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h2
                        class="mt-10 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
                        {{ $data->section4_title }} </h2>
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-gray-600">
                        {{ $data->section4_description }} </p>
                    </p>
                    <a href="{{ $data->section4_social_media }}"
                        class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 rounded-md mt-9 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-offset-2 focus-visible:ring-offset-white"
                        role="button">{{ $data->section4_social_media_button_title }} </a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center md:grid-cols-2 md:gap-x-20 gap-y-10">
                <div class="relative pl-16 pr-10 sm:pl-6 md:pl-0 xl:pr-0 md:order-2">
                    <img class="absolute top-6 -right-4 xl:-right-12"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/features/3/dots-pattern.svg"
                        alt="" />

                    <div class="relative max-w-md ml-auto">
                        <div class="overflow-hidden aspect-w-3 aspect-h-4 rounded-lg shadow-xl">
                            <img class="object-cover w-[35rem] h-[30rem] scale-150 rounded-lg shadow-xl"
                                src="{{ route('user.home.get-image', $data->section5_image) }}" alt="" />
                            alt="" />
                        </div>

                        <div class="absolute bottom-0 -left-16">
                            <div class="bg-orange-600 rounded-lg">
                                <div class="py-4 pl-4 pr-10 sm:py-6 sm:pl-8 sm:pr-16">
                                    <span class="block text-xl font-bold text-white sm:text-4xl lg:text-5xl">
                                        {{ $data->section5_rate }} </span>
                                    </span>
                                    <span class="block mt-2 text-sm font-medium leading-snug text-white sm:text-base">
                                        {{ $data->section5_rate_text }} </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:order-1">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        {{ $data->section5_title }}
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-gray-600">
                        {{ $data->section5_description }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- END FEATURES --}}

    {{-- FOURTH --}}
    <section class="pt-10 bg-indigo-600 2xl:py-24 2xl:bg-white lg:px-24 sm:pt-16 md:pt-0">
        <div class="px-4 mx-auto rounded-md bg-indigo-600 max-w-full sm:px-6 lg:px-24">
            <div class="2xl:pl-24">
                <div class="grid grid-cols-1 gap-y-12 md:grid-cols-2 md:gap-x-8 2xl:gap-x-20">
                    <div class="text-center md:py-16 xl:py-24 md:text-left">
                        <blockquote>
                            <p class="text-2xl font-semibold leading-relaxed text-white">
                                {{ $data->section6_welcome_message }}
                            </p>
                        </blockquote>
                        <div class="mt-6 sm:flex sm:items-baseline sm:justify-center md:justify-start">
                            <p class="text-base font-semibold text-white">
                                {{ $data->section6_name }}
                            </p>
                            <p class="mt-2 text-base text-gray-100 sm:mt-0 sm:ml-2">
                                {{ $data->section6_position }}
                            </p>
                        </div>
                        <p class="mt-12 text-base text-white lg:mt-20">
                            {{ $data->section6_pretext }}
                        </p>
                        <a href="{{ $data->section6_social_media }}" title=""
                            class="inline-flex items-center justify-center px-8 py-4 mt-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 rounded-md hover:opacity-80 focus:opacity-80"
                            role="button">
                            {{ $data->section6_social_media_button_title }}
                        </a>
                    </div>

                    <div class="relative">
                        <img class="md:absolute md:bottom-0 md:scale-110 md:origin-bottom-right lg:scale-75 2xl:scale-90 2xl:-mt-20"
                            src="{{ route('user.home.get-image', $data->section6_image) }}" alt=""
                            loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END FOURTH --}}

    {{-- FIFTH --}}
    <section class="py-10 bg-gray-800 sm:py-16">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="text-center">
                <h4 class="text-xl font-semibold text-white">"Angka menunjukkan kerja keras kami selama 6 tahun
                    terakhir"
                </h4>
            </div>

            <div class="grid grid-cols-1 gap-6 px-6 mt-8 sm:px-0 lg:mt-16 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-12">
                @forelse ($homeItem->where('section_number', 7) as $item)
                    <div class="overflow-hidden bg-indigo-600 rounded-lg">
                        <div class="px-4 py-6">
                            <div class="flex items-start">
                                <img src="{{ route('user.home.get-image', $item->image) }}" alt=""
                                    class="flex-shrink-0 w-12 h-12" loading="lazy" />
                                <div class="ml-4">
                                    <h4 class="text-4xl font-bold text-white">
                                        {{ $item->title }}
                                    </h4>
                                    <p class="mt-1.5 text-lg font-medium leading-tight text-white">
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    {{-- END FIFTH --}}

    {{-- BLOG --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-24 max-w-full">
            <div class="flex items-end justify-between">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        Informasi Terbaru
                    </h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">
                        Berita terbaru seputar wisata edukasi Kalipucung. Dapatkan informasi terbaru dengan mengunjungi
                        blog kami.
                    </p>
                </div>

                <div class="hidden lg:block">
                    <a type="button" href="{{ route('user.information') }}"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-fit h-9 px-2.5 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-4 lg:max-w-full">
                @forelse ($blogs as $item)
                    <article class="flex max-w-xl flex-col items-start justify-between rounded-lg shadow-sm">
                        <img src="{{ route('user.blog.get-image', $item->thumbnail) }}" alt="Coffee"
                            loading="lazy" class="w-full h-52 mb-4 object-cover rounded-lg">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">
                                {{ $item->created_at->format('d F Y') }}
                            </time>
                            <a href="#"
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                                {{ $item->tag }}
                            </a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                <a href="{{ route('user.information.detail', $item->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $item->title }}
                                </a>
                            </h3>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <div class="text-sm/6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $item->creator }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </article>
                @empty
                    <p class="text-center col-span-4">Data not found</p>
                @endforelse
            </div>

            <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
                <button type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button type="button"
                    class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- END BLOG --}}


    {{-- FAQ --}}
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="max-w-7xl px-4 mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-4xl">
                Yang Sering Ditanyakan
            </h2>

            <div class="flow-root mt-12 sm:mt-16">
                <div class="divide-y divide-gray--200 -my-9">
                    @forelse ($faqs as $item)
                        <div class="py-9">
                            <p class="text-xl font-semibold text-black">
                                {{ $item->question }}
                            </p>
                            <p class="mt-3 text-base text-gray-600">
                                {{ $item->answer }}
                            </p>
                        </div>
                    @empty
                        <p>Data not found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    {{-- END FAQ --}}

    {{-- FOOTER --}}
    <x-footer />
    {{-- END FOOTER --}}

</x-guest-layout>
