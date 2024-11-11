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
                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-green-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-black">
                                Atraksi Kesenian
                            </h3>
                            <p class="mt-3 text-base text-gray-600">
                                Kami menyediakan berbagai atraksi kesenian yang akan memukau hati anda.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-black">
                                Penginapan
                            </h3>
                            <p class="mt-3 text-base text-gray-600">
                                Berbagai penginapan yang nyaman dan aman untuk anda dan keluarga.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="flex-shrink-0 text-red-500 w-9 h-9" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <div class="ml-5">
                            <h3 class="text-xl font-semibold text-black">Paket Wisata</h3>
                            <p class="mt-3 text-base text-gray-600">
                                Jelajahi berbagai lokasi indah di Kalipucung dengan paket wisata yang kami sediakan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <img class="w-full rounded-lg shadow-xl" data-aos="fade-left"
                        src="https://cdn.pixabay.com/photo/2022/06/23/09/58/the-season-of-ripe-rice-7279448_1280.jpg"
                        alt="" />
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
                        Atraksi Kesenian Daerah
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-gray-600">
                        Wisata Kali Pucung memiliki berbagai kesenian yang akan memukau hati anda. Mulai dari tari
                        tradisional, musik tradisional, dan berbagai kesenian lainnya.
                    </p>
                </div>

                <div class="relative pl-20 pr-6 sm:pl-6 md:px-0">
                    <div class="relative w-full max-w-xs mt-4 mb-10 ml-auto">
                        <img class="ml-auto h-[26rem] object-cover rounded-lg shadow-xl"
                            src="https://cdn.pixabay.com/photo/2019/06/13/16/06/dance-4271941_640.jpg" alt="" />

                        <img class="absolute -top-4 -left-12"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/features/1/wavey-lines.svg"
                            alt="" />

                        <div class="absolute -bottom-10 -left-16">
                            <div class="bg-orange-600 rounded-lg">
                                <div class="px-8 py-10">
                                    <span class="block text-4xl font-bold text-white lg:text-5xl"> 100% </span>
                                    <span class="block mt-2 text-base leading-tight text-white"> Kepuasan
                                        Pengunjung<br />Indeks </span>
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
                    <img class="w-full rounded-md"
                        src="https://cdn.pixabay.com/photo/2014/07/08/10/47/team-386673_640.jpg" alt="" />

                    <div class="absolute w-full max-w-xs px-4 -translate-x-1/2 sm:px-0 sm:max-w-sm left-1/2 -bottom-12">
                        <div class="overflow-hidden bg-white rounded">
                            <div class="px-10 py-6">
                                <div class="flex items-center">
                                    <p class="flex-shrink-0 text-3xl font-bold text-blue-600 sm:text-4xl">100%</p>
                                    <p class="pl-6 text-sm font-medium text-black sm:text-lg">Keuntungan untuk
                                        <br />Dusun dan SDM
                                    </p>
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
                        Dukung Wisata Edukasi Kalipucung
                    </h2>
                    <p class="mt-6 text-lg leading-relaxed text-gray-600">
                        Kami akan terus berusaha memberikan yang terbaik untuk anda. Dukung kami dengan membagikan
                        pengalaman mu di media sosial.
                    </p>
                    <a href="#" title=""
                        class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 rounded-md mt-9 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-offset-2 focus-visible:ring-offset-white"
                        role="button"> Kunjungi Media Sosial Kami </a>
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

                    <div class="relative max-w-xs ml-auto">
                        <div class="overflow-hidden aspect-w-3 aspect-h-4 rounded-lg shadow-xl">
                            <img class="object-cover w-full h-[30rem] scale-150 rounded-lg shadow-xl"
                                src="https://cdn.pixabay.com/photo/2020/08/27/09/09/village-5521554_1280.jpg"
                                alt="" />
                        </div>

                        <div class="absolute bottom-0 -left-16">
                            <div class="bg-orange-600 rounded-lg">
                                <div class="py-4 pl-4 pr-10 sm:py-6 sm:pl-8 sm:pr-16">
                                    <svg class="w-9 sm:w-14 h-9 sm:h-14" xmlns="http://www.w3.org/2000/svg"
                                        fill="#FFF" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                    <span
                                        class="block mt-3 text-xl font-bold text-white sm:mt-6 sm:text-4xl lg:text-5xl">
                                        2,984 </span>
                                    <span class="block mt-2 text-sm font-medium leading-snug text-white sm:text-base">
                                        Jumlah penduduk<br />pada tahun Ini </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:order-1">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                        Komitmen Kami untuk Masyarakat
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-gray-600">
                        Kami berkomitmen untuk memberikan yang terbaik untuk masyarakat sekitar. Dengan berbagai
                        program yang kami sediakan, kami berharap dapat membantu masyarakat sekitar.
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
                            <p class="text-2xl font-semibold leading-relaxed text-white">“Selamat datang di
                                Kalipucung!. Nikmati pengalaman belajar yang seru sambil mengenal keindahan alam di
                                sini. Selamat menjelajahi pengalaman terbaik!”</p>
                        </blockquote>
                        <div class="mt-6 sm:flex sm:items-baseline sm:justify-center md:justify-start">
                            <p class="text-base font-semibold text-white">M. Agus Bahri</p>
                            <p class="mt-2 text-base text-gray-100 sm:mt-0 sm:ml-2">Kepala Desa</p>
                        </div>
                        <p class="mt-12 text-base text-white lg:mt-20">
                            Like dan ikuti media sosial kami!
                        </p>
                        <a href="#" title=""
                            class="inline-flex items-center justify-center px-8 py-4 mt-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 rounded-md hover:opacity-80 focus:opacity-80"
                            role="button"> Kunjungi Media Sosial </a>
                    </div>

                    <div class="relative">
                        <img class="md:absolute md:bottom-0 md:scale-110 md:origin-bottom-right lg:scale-75 2xl:scale-90 2xl:-mt-20"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/11/smiling-man.png"
                            alt="" />
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
                <div class="overflow-hidden bg-indigo-600 rounded-lg">
                    <div class="px-4 py-6">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <div class="ml-4">
                                <h4 class="text-4xl font-bold text-white">0</h4>
                                <p class="mt-1.5 text-lg font-medium leading-tight text-white">
                                    Stunting Rate
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden bg-indigo-600 rounded-lg">
                    <div class="px-4 py-6">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <div class="ml-4">
                                <h4 class="text-4xl font-bold text-white">200+</h4>
                                <p class="mt-1.5 text-lg font-medium leading-tight text-white">Objek Wisata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden bg-indigo-600 rounded-lg">
                    <div class="px-4 py-6">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div class="ml-4">
                                <h4 class="text-4xl font-bold text-white">3,274</h4>
                                <p class="mt-1.5 text-lg font-medium leading-tight text-white">Pengunjung Tahun Ini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden bg-indigo-600 rounded-lg">
                    <div class="px-4 py-6">
                        <div class="flex items-start">
                            <svg class="flex-shrink-0 w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                            <div class="ml-4">
                                <h4 class="text-4xl font-bold text-white">98%</h4>
                                <p class="mt-1.5 text-lg font-medium leading-tight text-white">Kepuasan Pengunjung
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> March
                            21, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> How to build coffee inside your home
                                in 5 minutes. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
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
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> April
                            04, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team
                                faster and better. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
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
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May 12,
                            2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> 5 Productivity tips to write faster
                                at morning. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
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
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> June
                            21, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> How to build coffee inside your home
                                in 5 minutes. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua
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
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                Yang Sering Ditanyakan
            </h2>

            <div class="flow-root mt-12 sm:mt-16">
                <div class="divide-y divide-gray--200 -my-9">
                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">Apa itu Wisata Edukasi Kalipucung?</p>
                        <p class="mt-3 text-base text-gray-600">
                            Wisata Edukasi Kalipucung adalah destinasi wisata yang memadukan kegiatan rekreasi dengan
                            pengalaman belajar, yang bertujuan untuk memberikan pengetahuan mengenai alam, budaya lokal,
                            dan ekosistem yang ada di Kalipucung.
                        </p>
                    </div>
                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">Apa saja kegiatan yang bisa dilakukan di
                            Kalipucung?</p>
                        <p class="mt-3 text-base text-gray-600">
                            Di Kalipucung, pengunjung dapat mengikuti berbagai kegiatan edukatif seperti jelajah alam,
                            mengenal flora dan fauna lokal, berkunjung ke perkebunan, serta mengikuti workshop budaya
                            dan keterampilan lokal seperti kerajinan tangan atau kuliner tradisional.
                        </p>
                    </div>
                    <div class="py-9">
                        <p class="text-xl font-semibold text-black">Apakah Kalipucung cocok untuk anak-anak?</p>
                        <p class="mt-3 text-base text-gray-600">
                            Ya, Kalipucung sangat cocok untuk anak-anak. Kami menyediakan berbagai aktivitas edukatif
                            yang aman dan menarik untuk anak-anak, seperti kegiatan mengenal alam dan hewan, serta kelas
                            kreatif yang mendukung pembelajaran mereka tentang lingkungan.
                        </p>
                    </div>
                    <div class="py-9">
                        <p class="text-xl font-semibold text-black"> Apakah ada panduan atau guide di Kalipucung?</p>
                        <p class="mt-3 text-base text-gray-600">
                            Tentu, di setiap aktivitas wisata edukasi, kami menyediakan pemandu yang berpengalaman dan
                            siap memberikan penjelasan serta mendampingi pengunjung selama mengikuti kegiatan.
                        </p>
                        <p class="mt-3 text-base text-gray-600">
                            Selain itu, kami juga menyediakan informasi lengkap mengenai kegiatan dan fasilitas yang
                            tersedia di Kalipucung, sehingga pengunjung dapat merencanakan kunjungan mereka dengan lebih
                            baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END FAQ --}}

    {{-- FOOTER --}}
    <x-footer />
    {{-- END FOOTER --}}

</x-guest-layout>
