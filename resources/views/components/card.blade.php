@props(['id' => '#'])

<div {{ $attributes->merge(['class' => 'p-6 border border-gray-200 rounded-lg bg-white']) }} id="{{ $id }}">
    {{ $slot }}
</div>
