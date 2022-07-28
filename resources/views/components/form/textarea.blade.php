@props(['name','text'])
<x-form.field>
   <x-form.label name="{{ $name }}" />
    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
    name="{{ $name }}" rows="10">{{ $text }}</textarea>
<x-form.error name="{{ $name }}" />
</x-form.field>
