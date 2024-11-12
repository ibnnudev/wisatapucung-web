<x-guest-layout>
    <div class="bg-gray-50">
        <x-header theme="dark" />
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-full px-6 lg:px-24">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Temukan Informasi Terbaru
                </h2>
                <p class="mt-2 text-base text-gray-600">
                    Kumpulan informasi terbaru yang bisa membantu anda dalam menemukan informasi yang anda butuhkan.
                </p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <article class="flex max-w-xl flex-col items-start justify-between rounded-lg shadow-sm">
                    <img src="https://cdn.pixabay.com/photo/2013/11/21/22/10/coffee-215383_1280.jpg" alt="Coffee"
                        class="w-full h-52 mb-4 object-cover rounded-lg">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2024</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">News</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Produk Lokal yang Mendunia
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-2 text-sm/6 text-gray-600">
                            Kami mengembangkan produk lokal yang memiliki kualitas yang tidak kalah dengan produk luar
                            negeri.
                            Produk lokal kami telah mendunia dan banyak diminati oleh masyarakat dunia.
                        </p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Agus Setiawan
                                </a>
                            </p>
                            <p class="text-gray-600">Petani / Pengusaha</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <x-footer />

</x-guest-layout>
