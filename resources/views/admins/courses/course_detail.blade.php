<x-app-layout>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Course Detail Page') }}
            </h2>
        </div>
    </x-slot>


    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-8">
                        <article class="article">
                            <div class="article-img">
                                <img style="margin: 0 auto;" src="{{ asset('/featuredImages/' . $course->featured_image) }}" title="Featured Image" alt="featured_image">
                            </div>
                            <div class="article-title">
                                <h6><a href="#">{{ $course->title ?? ''}}</a></h6>
                                <h2>{{ $course->description ?? '' }}</h2>
                                {!! $course->content !!}
                            </div>
                            <div class="nav tag-cloud">
                                <a href="#">{{$course->level}}</a>
                                <a href="#">{{$course->category}}</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 m-15px-tb blog-aside">
                        <!-- Latest Post -->
                        <div class="widget widget-latest-post">
                            <div class="widget-title">
                                <h3>Other Courses</h3>
                            </div>
                            <div class="widget-body">
                                <div class="latest-post-aside media">
                                    <div class="lpa-left media-body">
                                        @forelse($latestCourses as $latest)
                                            <div class="lpa-title">
                                                <h5><a href="#">{{ $latest->title }}</a></h5>
                                            </div>
                                            </div>
                                        @empty
                                            <p>No Courses yet.</p>
                                        @endforelse
                                    </div>
                                    <div class="lpa-right">
                                        <a href="#">
                                            <img src="{{ asset('/featuredImages/' . $course->featured_image) }}" title="Featured Image" alt="featured_image" width="250px">
                                            <!-- <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt=""> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>