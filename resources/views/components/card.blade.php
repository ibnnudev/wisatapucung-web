@props(['id' => '#'])

<div class="px-5 py-3 border border-gray-200 rounded-lg bg-gray-50" id="{{ $id }}">
    {{ $slot }}
</div>
