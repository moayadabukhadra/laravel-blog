@props(['comment'])
<x-panel class="bg-gray-100">




<div class="flex-shrink-0">
    <img src="https://picsum.photos/70/70" alt="profile" width="70" height="70" class="rounded-xl">
</div>
<header class="mb-4">

<div class="text-ellipsis overflow-hidden">
    <h3 class="font-bold">
        {{ $comment->author->name }}
    </h3>
    <p class="text-xs">
    <time>{{ $comment->created_at->diffForHumans() }}</time>

    </p>

    <p >{{ $comment->body }}</p>



</div>
</header>



</x-panel>

