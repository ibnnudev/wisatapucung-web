<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-50 border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-50">
        <span class="uppercase text-xs px-2 text-gray-500">Main</span>
        <ul class="space-y-1 text-sm">
            <li>
                <x-menu-item route="admin.dashboard" label="Dashboard" />
                <x-menu-item route="admin.home.index" label="Beranda" />
                <x-menu-item route="admin.about-us.index" label="Tentang Kami" />
                <x-menu-item route="admin.geography.index" label="Geografi" />
            </li>
        </ul>
    </div>
</aside>
