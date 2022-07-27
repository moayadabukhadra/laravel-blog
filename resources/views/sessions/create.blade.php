<x-layout>

    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200">
        <h1 class="text-center font-bold text-xl">Login</h1>
        <form method="POST" action="/login" class="mt-8">
            @csrf
 <x-form.input name="email" type="email" />
    <x-form.input name="password" type="password" />
        <x-form.button name="login" />

        <p class="text-center mt-2">
            Don't have an account? <a href="/register" class="text-blue-500 hover:text-blue-700">Register</a>
        </p>


        </form>
        </div>



    </main>

    </section>
</x-layout>

