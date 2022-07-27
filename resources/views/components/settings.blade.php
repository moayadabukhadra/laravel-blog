@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-xl font-bold mb-8  border-b pb-2">{{ $heading }}</h1>

    <div class="flex">
    <aside class="w-48">
        <h3 class="text-xl font-bold mb-8  pb-2">Links</h3>
    <ul class="">
        <li>
            <a href="/admin/posts/create" class="text-lg font-semibold {{request()->is('admin/posts/create') ? 'text-blue-500' : '' }} ">Create New Post</a>
        </li>
        <li class="mt-2">
            <a href="/admin/dashboard" class="text-lg font-semibold {{request()->is('admin/dashboard') ? 'text-blue-500' : '' }} ">Dashboard</a>
        </li>
    </ul>
    </aside>


<main class="flex-1">
    <x-panel class="max-w-xl mx-auto">
    {{ $slot }}
    </x-panel>
</main>
</div>
</section>
