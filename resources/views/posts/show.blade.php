<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20">
        <a href="/" class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>
        <x-post-featured-card :post="$post" />




                <section class="col-span-8 mt-10 space-y-6">
                    @auth
                    <x-panel>

                        <form action="/posts/{{ $post->id }}/comments" method="POST">
                            @csrf
                            <header class="flex items-center">
                                <img src="https://picsum.photos/150/150" alt="Lary avatar" height="60" width="60" class="rounded-full  mr-4">

                                <h2 class="ml-3">Leave a comment</h2>
                            </header>
                            <div class="flex">
                                <textarea name="body" id="body" class="mt-2 w-full" placeholder="Your comment here..."></textarea>
                                @error('body')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror

                            </div>
                            <footer class="flex justify-end items-center mt-6">
                                <x-form.button name="Post" />
                            </footer>

                        </form>
                    </x-panel>
                    @else
                    <x-panel>
                        <header class="flex items-center">
                            <img src="https://picsum.photos/150/150" alt="Lary avatar" height="60" width="60" class="rounded-full  mr-4">

                            <h2 class="ml-3">Leave a comment</h2>
                        </header>
                        <div class="flex">
                            <p class="text-gray-400 mt-2">You must be logged in to leave a comment.</p>
                            <a href="/login" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-xl ml-6">Login</a>
                        </div>
                    </x-panel>
                    @endauth






                    @foreach ($post->comments as $comment)
                    <x-comment :comment="$comment"/>
                    @endforeach


                </section>


            </article>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    </body>
</x-layout>
