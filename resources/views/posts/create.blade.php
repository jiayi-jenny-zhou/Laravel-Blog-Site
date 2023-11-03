<x-layout>
    <section class = "px-6 py-8">

        <h1>Publish New Post</h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full" 
                    type="text"
                    name="title"
                    id="title"
                    value="{{old('title')}}"
                    required>

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                    </label>

                    <input class="border border-gray-400 p-2 w-full" 
                    type="text"
                    name="excerpt"
                    id="excerpt"
                    value="{{old('excerpt')}}"
                    required>

                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                    </label>

                    <input class="border border-gray-400 p-2 w-full" 
                    type="text"
                    name="body"
                    id="body"
                    value="{{old('body')}}"
                    required>

                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full" 
                    type="text"
                    name="slug"
                    id="slug"
                    value="{{old('slug')}}"
                    required>

                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                        Thumbnail
                    </label>

                    <input class="border border-gray-400 p-2 w-full" 
                    type="file"
                    name="thumbnail"
                    id="thumbnail"
                    required>

                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                        Category
                    </label>

                    <select name="category_id" id="category">

                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id')==$category->id?'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Publish</button>

                
            </form>

        </x-panel>
    </section>
</x-layout>