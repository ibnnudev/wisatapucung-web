<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
    </div>

    <section class="py-10 bg-white sm:py-16 lg:py-48">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    {{ $data->title }}
                </h2>
                <p class="max-w-5xl mx-auto mt-10 text-base leading-relaxed text-gray-600">
                    {{ $data->description }}
                </p>
            </div>

            <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                @forelse ($listAttraction as $item)
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-[15rem] rounded-lg shadow-xl"
                                src="{{ route('user.attraction.get-image', $item->image) }}" alt=""
                                loading="lazy">
                        </a>

                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black">
                                {{ $item->title }}
                            </a>
                        </p>
                        <p class="mt-4 text-gray-600 prose">
                            {{ $item->description }}
                        </p>

                        {{-- dashed border --}}
                        <div class="mt-6 border-t border-dashed border-gray-300"></div>

                        @php
                            $item->items = explode(',', $item->items);
                        @endphp

                        <ol class="mt-4 text-gray-600 list-decimal list-inside prose">
                            @foreach ($item->items as $i)
                                <li>{{ $i }}</li>
                            @endforeach
                        </ol>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <x-footer />


</x-guest-layout>
