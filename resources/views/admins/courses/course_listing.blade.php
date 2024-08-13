<x-app-layout>
<x-slot name="header">
    <div class="md:flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Latest Courses') }}
        </h2>
    </div>
</x-slot>

<div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="container">
            <div class="row px-2 py-2 flex">
                @forelse($courses as $key => $course)
                <div class="col-md-6 px-2 py-2">
                    <div class="media blog-media">
                    <a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}">
                        <img class="d-flex rounded-md shadow-sm" src="{{ asset('/featuredImages/' . $course->featured_image) }}" title="Featured Image" alt="featured_image" width="200px">
                        <!-- <img class="d-flex rounded-md shadow-sm" src="https://www.bootdey.com/image/350x380/6495ED/000000" alt="Generic placeholder image"></a> -->
                    <div class="circle flex">
                        <h5 class="day">14</h5>
                        <span class="month">sep</span>
                    </div>
                    <div class="media-body">
                        <a href=""><h5 class="mt-0">{{ $course->title ?? ''}}</h5></a>
                        {{ $course->description ?? '' }}
                        <a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}" class="post-link"><strong>Read More</strong></a>
                        <ul>
                            <li>Author: Math Mentor</li>
                            <!-- <li class="text-right"><a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}">07 comments</a></li> -->
                        </ul>
                    </div>
                    </div>
                </div>
                @empty 
                    <p>No courses available now.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- </section> -->
</x-app-layout>