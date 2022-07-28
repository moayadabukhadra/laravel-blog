@props(['name','type' => 'text'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    name="{{ $name }}" type="{{ $type }}" placeholder="Title"
     {{ $attributes(['value'=> old($name)]) }}>
    <x-form.error name="{{ $name }}" />
</x-form.field>
