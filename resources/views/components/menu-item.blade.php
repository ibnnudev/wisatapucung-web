<!-- resources/views/components/menu-item.blade.php -->
@props(['route', 'label'])

<li>
    <a href="{{ route($route) }}"
        class="flex items-center p-2 rounded-lg group
        {{ request()->routeIs($route) ? 'bg-black font-medium text-white' : 'text-gray-700 hover:bg-gray-100' }}">
        <span class="ms-3">{{ $label }}</span>
    </a>
</li>
