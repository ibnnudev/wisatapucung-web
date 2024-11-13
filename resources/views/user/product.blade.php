<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />

        <section class="py-10 bg-white sm:py-16 lg:py-48">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        {{ $data->title }}
                    </h2>
                    <p class="max-w-5xl mx-auto mt-4 text-base leading-relaxed text-gray-600">
                        {{ $data->description }}
                    </p>
                </div>
                <section class="text-gray-600 body-font">
                    @forelse ($listProduct as $item)
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
                                <img class="object-cover object-center rounded-xl shadow-lg w-full h-[26rem]"
                                    alt="hero" data-aos="fade-left" loading="lazy"
                                    src="{{ route('user.product.get-image', $item->image) }}">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </section>
            </div>
        </section>
    </div>

    <x-footer />
</x-guest-layout>
