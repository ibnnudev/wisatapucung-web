<!-- resources/views/components/menu-item.blade.php -->
@props(['route', 'label'])

<li>
    <a href="{{ route($route) }}"
        class="flex items-center p-2 rounded-lg hover:bg-gray-100 group
        {{ request()->routeIs($route) ? 'bg-gray-100 font-medium text-gray-800' : 'text-gray-700' }}">
        <span class="ms-3">{{ $label }}</span>
    </a>
</li>
