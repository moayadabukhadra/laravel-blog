<x-layout >
<section class="px-6 py-8">
    @include('posts._header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
        <x-post-grid :posts="$posts" />
        {{ $posts->links() }}
            @else
            <p>
                No Posts Yet, Please Check Back Later
            </p>
            @endif

        </main>


</section>
</x-layout>
