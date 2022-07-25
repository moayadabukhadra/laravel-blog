<x-layout>

    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200">
        <h1 class="text-center font-bold text-xl">Login</h1>
        <form method="POST" action="/login" class="mt-8">
            @csrf
        <div>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-2" for="name">
                Email
            </label>
            <input type="email" name="email" placeholder="Email" class="border border-gray-400 p-2 w-full" value="{{ old('email') }}"  required>
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-2" for="name">
                Password
            </label>
            <input type="password" name="password" placeholder="Password" class="border border-gray-400 p-2 w-full" value="{{ old('password') }}" required>
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-2">
            Login
        </form>
    </main>
    </section>
</x-layout>

