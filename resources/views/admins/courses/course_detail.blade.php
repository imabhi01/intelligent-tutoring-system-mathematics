<x-app-layout>
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8">
                    <article class="article">
                        <div class="article-img">
                            <img src="https://www.bootdey.com/image/800x350/87CEFA/000000" title="" alt="">
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
                                        <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>