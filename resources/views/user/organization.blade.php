<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
        <section class="bg-[#FCF8F1] bg-opacity-30 py-32 lg:py-32">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="text-base font-semibold tracking-wider text-blue-600 uppercase">
                            {{ $data->section1_tagline }}
                        </p>
                        <h1 class="mt-4 text-4xl font-bold text-black lg:mt-8 sm:text-6xl xl:text-7xl">
                            {{ $data->section1_title }}
                        </h1>
                        <p class="mt-4 text-base text-black lg:mt-8 sm:text-xl">
                            {{ $data->section1_description }}
                        </p>

                        <a href="{{ $data->section1_button_url }}" title=""
                            class="inline-flex items-center px-6 py-4 mt-8 font-semibold text-black transition-all duration-200 bg-yellow-300 rounded-full lg:mt-16 hover:bg-yellow-400 focus:bg-yellow-400"
                            role="button">
                            {{ $data->section1_button_text }}
                            <svg class="w-6 h-6 ml-8 -mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>

                    <div>
                        <img class="w-full" src="{{ route('user.organization.get-image', $data->section1_image) }}"
                            alt="" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
                        {{ $data->section2_title }}
                    </h2>
                    <p class="max-w-2xl mx-auto mt-4 text-xl text-gray-600">
                        {{ $data->section2_description }}
                    </p>
                </div>

                @forelse ($listOrganization as $item)
                    <div
                        class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center pb-9 border-dashed border-spacing-12 border-b border-b-gray-200">
                        <div
                            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900">
                                {{ $item->title }}
                            </h1>
                            <article
                                class="prose-base prose-ul:list-decimal prose-lg:prose-xl max-w-4xl mx-auto prose-code:prose-code prose-li:list-inside text-justify">
                                {!! $item->description !!}
                            </article>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                            <img class="object-cover object-center rounded-xl shadow-lg w-full h-[26rem]" alt="hero"
                                data-aos="fade-left" loading="lazy"
                                src="{{ route('user.organization.get-image', $item->image) }}">
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </section>

    </div>
    <x-footer />
</x-guest-layout>
