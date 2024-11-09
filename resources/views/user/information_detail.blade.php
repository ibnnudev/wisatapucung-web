<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
        <section>
            <div class="max-w-4xl mx-auto flex flex-col justify-center pt-24 space-y-4">
                <h1 class="font-bold text-3xl lg:text-4xl max-w-5xl">
                    Radiant: A beautiful new marketing site template
                </h1>
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, enim.
                </p>
                <div class="md:flex items-center justify-between py-4">
                    <div class="md:flex items-center gap-2">
                        <span class="bg-slate-100 text-slate-500 font-medium me-2 px-4 py-1.5 rounded">
                            News
                        </span>
                        <p class="hidden md:block text-slate-500 text-sm">12 Agustus 2024 •
                            Agus Salim
                        </p>
                    </div>
                    <a href="#" class="mt-5 md:mt-0 block">
                        <x-secondary-button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                            data-dropdown-trigger="hover">Bagikan Artikel</x-secondary-button>
                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownHoverButton">
                                {{-- <li>
                                    <a href="{{ 'https://api.whatsapp.com/send?text=' . route('detail-pena-santri', $penaSantri->slug) }}"
                                        class="block px-4 py-2 hover:bg-gray-100">WhatsApp</a>
                                </li>
                                <li>
                                    <a href="{{ 'https://www.instagram.com/share?url=' . route('detail-pena-santri', $penaSantri->slug) }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Instagram</a>
                                </li>
                                <li>
                                    <a href="{{ 'https://twitter.com/intent/tweet?url=' . route('detail-pena-santri', $penaSantri->slug) . '&text=' . $title }}"
                                        class="block px-4 py-2 hover:bg-gray-100">Twitter</a>
                                </li>
                                <li>
                                    <a href="{{ 'http://www.linkedin.com/shareArticle?mini=true&url=' . route('detail-pena-santri', $penaSantri->slug) . '&title=' . $title . '&summary="' . $summary }}"
                                        class="block px-4 py-2 hover:bg-gray-100">
                                        Facebook
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </a>
                </div>
            </div>

            <div class="border-y-[1px] mt-4 py-8 max-w-4xl mx-auto">
                <div class="px-2 py-2 border rounded-lg">
                    <img class="rounded-lg shadow-md object-cover lazyload overflow-hidden md:h-[32rem] w-full"
                        lazy="loading" src="https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg">
                </div>

                <br />

                <article class="prose-base">
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ab ipsa similique explicabo
                        ipsum. Quasi facere laboriosam saepe tempore, quam adipisci debitis quidem consequuntur quae
                        natus blanditiis culpa amet fuga veritatis cupiditate nemo quaerat nihil libero quisquam
                        quibusdam quia nostrum incidunt ratione voluptate! Eos iusto, sunt odit ipsa cum pariatur sequi
                        exercitationem numquam? Voluptates velit accusantium beatae quaerat eos. Quisquam repellat
                        accusamus fugit excepturi repudiandae dolore aut in, itaque soluta quasi ut aspernatur officia
                        alias! Veritatis temporibus laudantium eius commodi architecto libero molestias pariatur veniam
                        ipsam repellendus, fuga consequuntur necessitatibus eligendi ab magnam quod voluptate maiores
                        quos natus enim dolorem!
                    </p>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ab ipsa similique explicabo
                        ipsum. Quasi facere laboriosam saepe tempore, quam adipisci debitis quidem consequuntur quae
                        natus blanditiis culpa amet fuga veritatis cupiditate nemo quaerat nihil libero quisquam
                        quibusdam quia nostrum incidunt ratione voluptate! Eos iusto, sunt odit ipsa cum pariatur sequi
                        exercitationem numquam? Voluptates velit accusantium beatae quaerat eos. Quisquam repellat
                        accusamus fugit excepturi repudiandae dolore aut in, itaque soluta quasi ut aspernatur officia
                        alias! Veritatis temporibus laudantium eius commodi architecto libero molestias pariatur veniam
                        ipsam repellendus, fuga consequuntur necessitatibus eligendi ab magnam quod voluptate maiores
                        quos natus enim dolorem!
                    </p>
                </article>
            </div>

        </section>

        <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-24 max-w-full">
                <div class="flex items-end justify-between">
                    <div class="flex-1 text-center lg:text-left">
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-4xl">
                            Informasi Terbaru
                        </h2>
                        <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">
                            Berita terbaru seputar wisata edukasi Kalipucung. Dapatkan informasi terbaru dengan
                            mengunjungi
                            blog kami.
                        </p>
                    </div>

                    <div class="hidden lg:block">
                        <button type="button"
                            class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-fit h-9 px-2.5 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                            Selengkapnya
                        </button>
                    </div>
                </div>

                <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-4 lg:max-w-full">
                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                        Lifestyle </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                March
                                21, 2020 </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> How to build coffee inside your
                                    home
                                    in 5 minutes. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                        Marketing </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                April
                                04, 2020 </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team
                                    faster and better. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                        Productivity </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May
                                12,
                                2020 </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> 5 Productivity tips to write
                                    faster
                                    at morning. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded shadow">
                        <div class="p-5">
                            <div class="relative">
                                <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                    <img class="object-cover w-full h-full"
                                        src="https://cdn.pixabay.com/photo/2022/05/28/21/44/carpathians-7228042_640.jpg"
                                        alt="" />
                                </a>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full">
                                        Lifestyle </span>
                                </div>
                            </div>
                            <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase">
                                June
                                21, 2020 </span>
                            <p class="mt-5 text-2xl font-semibold">
                                <a href="#" title="" class="text-black"> How to build coffee inside your
                                    home
                                    in 5 minutes. </a>
                            </p>
                            <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit
                                aliqua
                                dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                            <a href="#" title=""
                                class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                                Continue Reading
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
                    <button type="button"
                        class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
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
    </div>

    <x-footer />
</x-guest-layout>
