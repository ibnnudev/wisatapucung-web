@props(['items'])

<nav class="flex px-5 py-3 border border-gray-200 rounded-lg bg-gray-50 mb-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ route('admin.dashboard') }}"
                class="inline-flex items-center text-sm hover:text-indigo-600 {{ request()->routeIs('admin.dashboard') ? 'text-indigo-600' : 'text-gray-600' }} ">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Dashboard
            </a>
        </li>
        @isset($items)
            @foreach ($items as $item)
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ $item['route'] }}"
                            class="ms-1 text-sm hover:text-indigo-600 md:ms-2 {{ !request()->routeIs($item['route']) ? 'text-indigo-600' : 'text-gray-600' }}">
                            {{ $item['name'] }}
                        </a>
                    </div>
                </li>
            @endforeach
        @endisset
    </ol>
</nav>
