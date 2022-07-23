<x-layout >

    @include('components._posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
        <x-post-grid :posts="$posts" />
            @else
            <p>
                No Posts Yet, Please Check Back Later
            </p>
            @endif

        </main>



</x-layout>
