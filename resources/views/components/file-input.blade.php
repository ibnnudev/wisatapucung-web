@props([
    'id' => '',
    'name' => '',
    'accept' => '',
    'multiple' => false,
])

<input class="text-sm border-gray-300 focus:border-black focus:ring-black rounded-md shadow-sm border w-full mt-1"
    id="{{ $id }}" name="{{ $name }}" type="file"
    {{ $attributes->merge(['accept' => $accept, 'multiple' => $multiple]) }}>
