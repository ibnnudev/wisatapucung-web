<section class="py-10 bg-blue-900 sm:pt-16 lg:pt-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-24 max-w-full">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-y-12 gap-x-12">
            <div>
                <p class="text-lg font-semibold text-white">
                    Utama
                </p>

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
                        <a href="{{ route('user.about') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Demografi </a>
                    </li>

                    <li>
                        <a href="{{ route('user.about') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Topografi </a>
                    </li>

                    <li>
                        <a href="{{ route('user.about') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Iklim </a>
                    </li>

                    <li>
                        <a href="{{ route('user.about') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Potensi Bencana </a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="text-lg font-semibold text-white">Informasi</p>

                <ul class="mt-8 space-y-4">
                    <li>
                        <a href="{{ route('user.information') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Berita </a>
                    </li>

                    <li>
                        <a href="{{ route('user.accommodation') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Paket Wisata </a>
                    </li>

                    <li>
                        <a href="{{ route('user.tour-package') }}" title=""
                            class="text-blue-200 transition-all duration-200 hover:text-white focus:text-white">
                            Penginapan </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-20 md:mt-28 2xl:mt-32">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="sm:flex sm:items-center sm:justify-start sm:space-x-8">
                    <img src="{{ asset('images/Logo Primer.png') }}" class="w-full h-28" alt="">
                </div>

                <p class="mt-6 text-sm text-blue-200 lg:mt-0">© Copyright {{ date('Y') }}, All Rights Reserved by
                    LPDP Universitas Gajah Mada
                </p>
            </div>
        </div>
    </div>
</section>
