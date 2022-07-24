<x-layout>

    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200">
        <h1 class="text-center font-bold text-xl">Register</h1>
        <form method="POST" action="/register" class="mt-8">
            @csrf
        <div>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-2" for="name">
                FullName
            </label>
            <input type="text" name="name" placeholder="Name" class="border border-gray-400 p-2 w-full" required>
        </div>
        <div>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-2" for="name">
                Email
            </label>
            <input type="email" name="email" placeholder="Email" class="border border-gray-400 p-2 w-full" required>
        </div>
        <div>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-2" for="name">
                Password
            </label>
            <input type="password" name="password" placeholder="Password" class="border border-gray-400 p-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-2">
            Register
        </form>
    </main>
    </section>
</x-layout>


