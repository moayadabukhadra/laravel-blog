<x-layout>
    <x-settings heading="Manage Posts">


        <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">

                        <tbody>
                            @foreach($posts as $post)
                            <tr class="border-b flex-shrink-0">
                                <td class="px-5 py-5 bg-white text-sm">
                                    <div class="flex items-center">

                                        <div class="ml-3">
                                            <a href="/posts/{{$post->id}}" class="text-gray-500 hover:text-black">

                                                {{ $post->title }}

                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <a href="/?category={{$post->category->slug}}" class="text-gray-500 hover:text-black">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $post->category->name }}</p>
                                    </a>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $post->created_at->format('d M Y') }}</p>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">

                                    <a href="/admin/posts/{{ $post->id }}/edit" class="bg-blue-500 rounded p-6 py-2">Edit</a>

                                </td>
                                <td class="px-5 py-5 bg-white text-sm">


                                    <form method="POST" action="/admin/posts/{{ $post->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 rounded p-6 py-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </x-settings>

</x-layout>
