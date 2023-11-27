@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-rose-700 focus:ring-rose-700 rounded-md shadow-sm']) !!}>
