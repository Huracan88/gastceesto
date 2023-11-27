@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-700 mr-3']) }}>
    {{ $value ?? $slot }}
</label>
