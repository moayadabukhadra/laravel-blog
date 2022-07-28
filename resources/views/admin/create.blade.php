<x-layout>
    <x-settings heading="publish New Post">
    <form action="/admin/posts" method="POST" class="bg-white rounded pt-6 pb-8 mb-4" enctype="multipart/form-data">
                    @csrf
                    <x-form.input name="title" />

                    <x-form.textarea name="body" text="" />

                    <x-form.input name="thumbnail" type="file" />


                    <x-form.field>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                            Category
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none" name="category_id">
                            <option value="">Choose...</option>
                            <?= $categories = App\Models\Category::all();?>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </x-form.field>

                    <x-form.button name="publish" />

                </form>
    </x-settings>

</x-layout>
