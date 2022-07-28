<x-layout>
    <x-settings :heading="'Edit Post:  ' .  $post->title">
    <form action="/admin/posts/{{ $post->id }}" method="POST" class="bg-white rounded pt-6 pb-8 mb-4 w-full" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <x-form.input name="title" :value="$post->title" />

                    <x-form.textarea name="body" :text="$post->body"/>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <x-form.input name="thumbnail" type="file" />
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-2" width="325">
                    </div>

                    <x-form.field>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                            Category
                        </label>
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none" name="category_id">
                            <option value="">Choose...</option>
                            <?= $categories = App\Models\Category::all();?>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id' ,$post->category_id )== $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </x-form.field>

                    <x-form.button name="update" />

                </form>
    </x-settings>

</x-layout>
