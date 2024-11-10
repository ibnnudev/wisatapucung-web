@props(['disabled' => false, 'value' => null, 'required' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-black dark:focus:border-black focus:ring-black dark:focus:ring-black text-sm rounded-md shadow-sm',
]) !!} rows="4"
    @if ($required) required @endif>{{ $value }}</textarea>
