@props(['disabled' => false, 'field' => '', 'value' => $value])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>{{ $value }}</textarea>

@error('text')
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror