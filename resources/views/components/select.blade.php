@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    <option selected="selected" value="" disabled>{{ $defaultOption }}</option>
    @foreach($options as $item)
        <option value="{{ $item }}">{{ $item->label($item) }}</option>
    @endforeach
</select>

