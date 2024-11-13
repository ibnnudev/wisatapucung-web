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
