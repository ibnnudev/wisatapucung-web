<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
        <section>
            <div class="max-w-4xl mx-auto flex flex-col justify-center pt-48 space-y-4">
                <p class="font-bold text-3xl lg:text-5xl max-w-xl mx-auto text-center leading-8">
                    {{ $data->title }}
                </p>
            </div>

            <div class="mt-4 py-8 max-w-4xl mx-auto">
                <div class="px-2 py-2 border rounded-lg">
                    <img class="rounded-lg shadow-md object-cover lazyload overflow-hidden md:h-[32rem] w-full"
                        lazy="loading" src="{{ route('user.accomodation.get-image', $data->image) }}"
                        alt="Image of the accommodation">
                </div>

                <br />

                <article class="px-6 lg:px-0 prose-base prose-ul:list-decimal prose-li:list-inside text-justify">
                    {!! $data->description !!}
                </article>
            </div>

        </section>
    </div>

    <x-footer />
</x-guest-layout>
