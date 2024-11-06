<x-guest-layout>
    <div class="bg-white">
        @include('user.partial.header')

        <div class="relative isolate px-6 pt-14 lg:px-8 mb-24">
            <div class="mx-auto max-w-3xl py-32 sm:py-48 lg:py-56">
                {{-- <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-white bg-indigo-600 ring-1 ring-white/40 hover:ring-white">
                        Announcing our next round of funding
                    </div>
                </div> --}}
                <div class="text-center">
                    <h1 class="text-balance text-5xl font-semibold tracking-tight text-white sm:text-8xl">
                        Wisata Edukasi Kalipucung
                    </h1>
                    <p class="mt-8 text-pretty text-lg font-medium text-white sm:text-xl/8">
                        Selamat datang di website resmi Wisata Edukasi Kalipucung. Kami menyediakan berbagai informasi
                        tentang wisata edukasi, berita, kesenian, dan penginapan.
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
                <img src="https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg" loading="lazy"
                    alt="" class="object-cover w-full h-full" />
            </div>
        </div>


    </div>

    {{-- SECOND --}}

    {{-- END SECOND --}}

    {{-- THIRD --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-full sm:px-6 lg:px-24">
            <div class="max-w-xl mx-auto text-center">
                <p class="text-sm font-semibold tracking-widest text-blue-600 uppercase">
                    Jelajahi Wisata Edukasi Kalipucung
                </p>

                <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                    Bangun Pengalaman yang Tak Terlupakan
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
                    <img class="w-full rounded-lg shadow-xl"
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
                        <img class="ml-auto h-[26rem] object-cover"
                            src="https://cdn.pixabay.com/photo/2019/06/13/16/06/dance-4271941_640.jpg" alt="" />

                        <img class="absolute -top-4 -left-12"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/features/1/wavey-lines.svg"
                            alt="" />

                        <div class="absolute -bottom-10 -left-16">
                            <div class="bg-orange-600">
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
                        <div class="overflow-hidden aspect-w-3 aspect-h-4">
                            <img class="object-cover w-full h-[30rem] scale-150"
                                src="https://cdn.pixabay.com/photo/2020/08/27/09/09/village-5521554_1280.jpg"
                                alt="" />
                        </div>

                        <div class="absolute bottom-0 -left-16">
                            <div class="bg-orange-600">
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
    <section class="py-10 bg-blue-900 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-24 max-w-full">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-y-12 gap-x-12">
                <div>
                    <img class="w-auto h-7"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/logo-alt.svg" alt="" />

                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Tentang Kami </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Atraksi </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Informasi </a>
                        </li>
                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Produk </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-lg font-semibold text-white">
                        Desa</p>

                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Profil Dusun </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Potensi Dusun </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-lg font-semibold text-white">Keadaan</p>

                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Demografi </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Topografi </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Iklim </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Potensi Bencana </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="text-lg font-semibold text-white">Informasi</p>

                    <ul class="mt-8 space-y-4">
                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Berita </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Paket Wisata </a>
                        </li>

                        <li>
                            <a href="#" title=""
                                class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                Penginapan </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-20 md:mt-28 2xl:mt-32">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="sm:flex sm:items-center sm:justify-start sm:space-x-8">
                        <ul class="flex items-center justify-start space-x-8">
                            <li>
                                <a href="#" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                        </path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <ul class="flex flex-wrap items-center justify-start mt-5 gap-x-8 sm:mt-0 gap-y-3">
                            <li>
                                <a href="#" title=""
                                    class="text-sm text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                    Privacy Policy </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="text-sm text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                    Terms & Conditions </a>
                            </li>

                            <li>
                                <a href="#" title=""
                                    class="text-sm text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                                    Support </a>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 text-sm text-blue-200 lg:mt-0">© Copyright 2021, All Rights Reserved by Postcraft
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- END FOOTER --}}

</x-guest-layout>
