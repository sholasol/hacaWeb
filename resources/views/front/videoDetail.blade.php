<x-front-layout>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Video Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Video Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->





        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Videos</h6>
                    <h1 class="mb-5">Videos</h1>
                </div>

                <div class="container">
                    {{-- src="{{$video->youtube}}" --}}
                    <div class="row g-4">
                        @foreach ($data as $video)
                            @php
                                // Extract the video ID from the shortened URL
                                $videoId = str_replace('https://youtu.be/', '', $video->youtube);
                                // Create the full embed URL
                                $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
                            @endphp

                            <div class="ratio ratio-16x9">
                                <iframe src="{{$embedUrl}}" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        @endforeach
                    </div><!--end row-->
                    <div class="mt-2">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
</x-front-layout>