<x-drob-down >

<x-slot name="trigger">
    <button class="py-2 pl-3 pr-9 text-sm w-full font-semibold lg:w-32 text-left flex lg:inline-flex">{{ isset($currentCategory) ? $currentCategory->name :  'categories' }}</button>

</x-slot>

<x-drobdown-item href='/' :active="request()->routeIs('home')">All</x-drobdown-item>
@foreach ($categories as $category)
<x-drobdown-item href='/?category={{ $category->slug }}'
 :active="request()->is('categories/' . $category->slug)">{{ $category->name }}</x-drobdown-item>
@endforeach


</x-drob-down>
