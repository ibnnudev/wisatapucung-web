@props(['theme' => 'light'])

<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between px-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">
                    Wisata Edukasi Kalipucung
                </span>
                <img class="h-24 w-auto p-2" src="{{ asset('images/logo_atas.png') }}" alt="" loading="lazy">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" id="mobile-menu-btn"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('/') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Beranda</a>
            <a href="{{ route('user.about') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('tentang-kami') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Tentang
                Kami</a>
            <a href="{{ route('user.demography') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('demografis') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Kondisi
                Geografis</a>
            <a href="{{ route('user.attraction') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('atraksi') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Atraksi</a>
            <a type="button" data-dropdown-toggle="information-dropdown"
                class="cursor-pointer text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('informasi') ||
                request()->is('berita') ||
                request()->is('penginapan') ||
                request()->is('paket-wisata')
                    ? ($theme === 'dark'
                        ? 'bg-gray-200'
                        : 'bg-indigo-600')
                    : '' }}">Informasi</a>
            <!-- Dropdown menu -->
            <div id="information-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ route('user.information') }}" class="block px-4 py-2 hover:bg-gray-100">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('user.accommodation') }}"
                            class="block px-4 py-2 hover:bg-gray-100">Penginapan</a>
                    </li>
                    <li>
                        <a href="{{ route('user.tour-package') }}" class="block px-4 py-2 hover:bg-gray-100">Paket
                            Wisata</a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('user.product') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('produk') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Produk</a>
            <a href="{{ route('user.organization') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('organisasi') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}
                ">Organisasi</a>
            <a href="{{ route('user.contact') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900 hover:bg-gray-200' : 'text-white hover:bg-indigo-600' }} py-1 px-2 rounded-lg {{ request()->is('kontak-kami') ? ($theme === 'dark' ? 'bg-gray-200' : 'bg-indigo-600') : '' }}">Kontak
                Kami</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('login') }}"
                class="text-sm/6 font-semibold {{ $theme === 'dark' ? 'text-gray-900' : 'text-white' }}">Masuk <span
                    aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <<<<<<< HEAD <div class="block lg:hidden">
        <div class="fixed inset-0 z-50 bg-gray-900 bg-opacity-50 hidden" id="mobile-menu-backdrop"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full max-w-sm overflow-y-auto bg-white px-6 py-6 sm:ring-1 sm:ring-gray-900/10 hidden"
            id="mobile-menu">
            <div class="flex items-center justify-between">
                <span></span>
                <button type="button" id="mobile-menu-close-btn" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    =======
                    <div class="lg:hidden" role="dialog" aria-modal="true">
                        <!-- Background backdrop, show/hide based on slide-over state. -->
                        <div class="fixed inset-0 z-50"></div>
                        <div
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img class="h-8 w-auto"
                                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                                        alt="">
                                </a>
                                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                    >>>>>>> 603888b4 (deploy)
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <<<<<<< HEAD <a href="/"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                                            Beranda</a>
                                            <a href="{{ route('user.about') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Tentang
                                                Kami</a>
                                            <a href="{{ route('user.demography') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Kondisi
                                                Geografis</a>
                                            <a href="{{ route('user.attraction') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Atraksi</a>
                                            {{-- informasi link --}}
                                            <a href="{{ route('user.information') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Informasi</a>
                                            <a href="{{ route('user.accommodation') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Penginapan</a>
                                            <a href="{{ route('user.tour-package') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Paket
                                                Wisata</a>
                                            {{-- end informasi link --}}
                                            <a href="{{ route('user.product') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Produk</a>
                                            <a href="{{ route('user.organization') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Organisasi</a>
                                            <a href="{{ route('user.contact') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Kontak
                                                Kami</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="{{ route('login') }}"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Masuk</a>
                                        =======
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                            in</a>
                                        >>>>>>> 603888b4 (deploy)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</header>
<<<<<<< HEAD <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuCloseBtn = document.getElementById('mobile-menu-close-btn');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenuBackdrop.classList.remove('hidden');
        mobileMenu.classList.remove('hidden');
    });

    mobileMenuCloseBtn.addEventListener('click', () => {
        mobileMenuBackdrop.classList.add('hidden');
        mobileMenu.classList.add('hidden');
    });
</script>
=======
>>>>>>> 603888b4 (deploy)
