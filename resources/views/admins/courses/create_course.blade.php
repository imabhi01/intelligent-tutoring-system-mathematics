<x-app-layout>
    @push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    @endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Course') }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">New Course</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('storeCourse')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">Course Title</span>
                                @error('course.name')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="title" value="{{ old('course.title') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Course Description</span>
                                @error('course.description')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="description" value="{{ old('course.description') }}" type="text" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Youtube URL</span>
                                @error('course.youtube_url')
                                    <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="youtube_url" value="{{ old('course.youtube_url') }}" type="url" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Level</span>
                                @error('course.level')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="level" id="level" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="">Select Level</option>
                                    @foreach($levels as $key => $level)
                                        <option value="{{ $key }}">{{ $level }}</option>
                                    @endforeach
                                </select>
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Subject</span>
                                @error('course.level')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="category" id="category" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="">Select Subject</option>
                                    @foreach($categories as $key => $category)
                                        <option value="{{ $key }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                            </label>
                            
                            <label class="block">
                                <span class="text-gray-700">Featured Image</span>
                                @error('course.featured_image')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input type="file" name="featured_image" value="{{ old('course.featured_image') }}" class="mt-1 bg-gray-100 block w-full rounded-md bg-graygray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 ckeditor" id="featured_image" />
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Course Content</span>
                                @error('course.content')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <textarea name="content" value="{{ old('course.content') }}" class="mt-1 bg-gray-100 block w-full rounded-md bg-graygray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 ckeditor" id="content" rows="3"></textarea>
                            </label>

                            <label class="block">
                                <span class="text-gray-700">Is this course active?</span>
                                @error('course.status')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="status" value="{{ old('course.status') }}" class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </label>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('listSection')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Back</a>

                                <x-jet-button type="submit" class="ml-4">
                                    {{ __('Create') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            ClassicEditor.create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: '{{ route('upload', ['_token' => csrf_token()]) }}'
                }
            }).catch(error => {
                console.error(error);
            });
        </script>
    @endpush
</x-app-layout>


