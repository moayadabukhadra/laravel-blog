<x-layout>
    <section class="px-6 py-8">
        <x-panel class="max-w-2xl mx-auto">
        <form action="/admin/posts" method="POST" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" placeholder="Title" value="{{ old('title') }}" >
                @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    Body
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"name="body" rows="10" >{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                    Category
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none" name="category_id">
                    <option value="">Choose...</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Publish
                </button>

        </form>
    </x-panel>
    </section>
</x-layout>
