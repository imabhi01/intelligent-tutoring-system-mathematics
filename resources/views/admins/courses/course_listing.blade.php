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
                    <a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}"><img class="d-flex rounded-md shadow-sm" src="https://www.bootdey.com/image/350x380/6495ED/000000" alt="Generic placeholder image"></a>
                    <div class="circle">
                        <h5 class="day">14</h5>
                        <span class="month">sep</span>
                    </div>
                    <div class="media-body">
                        <a href=""><h5 class="mt-0">Standard Blog Post</h5></a>
                        Sodales aliquid, in eget ac cupidatat velit autem numquam ullam ducimus occaecati placeat error.
                        <a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}" class="post-link">Read More</a>
                        <ul>
                            <li>by: Admin</li>
                            <li class="text-right"><a href="{{ route('courseDetail', [$course->id, $level, $course->category]) }}">07 comments</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                @empty 
                    <p>No courses available now.</p>
                @endforelse
                <!-- <div class="col-md-6 px-2 py-2">
                    <div class="media blog-media">
                    <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://www.bootdey.com/image/350x380/FFB6C1/000000" alt="Generic placeholder image"></a>
                    <div class="circle">
                        <h5 class="day">12</h5>
                        <span class="month">sep</span>
                    </div>
                    <div class="media-body">
                        <a href=""><h5 class="mt-0">perferendis labore</h5></a>
                        Sodales aliquid, in eget ac cupidatat velit autem numquam ullam ducimus occaecati placeat error.
                        <a href="blog-post-left-sidebar.html" class="post-link">Read More</a>
                        <ul>
                            <li>by: Admin</li>
                            <li class="text-right"><a href="blog-post-left-sidebar.html">04 comments</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 px-2 py-2">
                    <div class="media blog-media">
                    <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://www.bootdey.com/image/350x380/FF7F50/000000" alt="Generic placeholder image"></a>
                    <div class="circle">
                        <h5 class="day">09</h5>
                        <span class="month">sep</span>
                    </div>
                    <div class="media-body">
                        <a href=""><h5 class="mt-0">deleniti incdunt magni</h5></a>
                        Sodales aliquid, in eget ac cupidatat velit autem numquam ullam ducimus occaecati placeat error.
                        <a href="blog-post-left-sidebar.html" class="post-link">Read More</a>
                        <ul>
                            <li>by: Admin</li>
                            <li class="text-right"><a href="blog-post-left-sidebar.html">10 comments</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 px-2 py-2">
                    <div class="media blog-media">
                    <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://www.bootdey.com/image/350x380/008B8B/000000" alt="Generic placeholder image"></a>
                    <div class="circle">
                        <h5 class="day">04</h5>
                        <span class="month">sep</span>
                    </div>
                    <div class="media-body">
                        <a href=""><h5 class="mt-0">Explicabo magnam </h5></a>
                        Sodales aliquid, in eget ac cupidatat velit autem numquam ullam ducimus occaecati placeat error.
                        <a href="blog-post-left-sidebar.html" class="post-link">Read More</a>
                        <ul>
                            <li>by: Admin</li>
                            <li class="text-right"><a href="blog-post-left-sidebar.html">06 comments</a></li>
                        </ul>
                    </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- </section> -->
</x-app-layout>