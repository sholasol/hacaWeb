<x-front-layout>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/banner/01.jpeg')}}" style="height: 768px !important;" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .6);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">We understand the importance of economic stability.</h1>
                                <a href="/register" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/banner/02.jpeg')}}" style="height: 768px !important;" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .6);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">We promote physical well-being through exercise sessions</h1>
                                <a href="/register" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('img/banner/03.jpeg')}}" style="height: 768px !important;" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .6);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Since 1983, we’ve been a vibrant and integral part of the Hull community</h1>
                                <a href="/register" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    @include('layouts.service')
    <!-- Service End -->


     <!-- About Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/18.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Our Journey</h1>
                    <h4 class="mb-4">We’ve been a vibrant and integral part of the Hull community.</h4>
                    <p class="mb-4">
                        Since 1983, we’ve been a vibrant and integral part of the Hull community. Our roots run deep, and our commitment to uplifting and empowering our Afro-Caribbean and BAME (Black, Asian, and Minority Ethnic) communities remains unwavering.
                    </p>
                   
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/docs">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Events Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Events</h6>
                <h1 class="mb-5">Recent Events</h1>
            </div>
            <div class="row g-4">
                @foreach ($events as $event )
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card service-wrapper rounded border-0 shadow p-4">
                        <div class="icon text-center text-custom h1 shadow rounded bg-white">
                            <img class="uim-svg" src="{{asset('asset/image/'.$event->image)}}" alt="">
                        </div>
                        <div class="content mt-4">
                            <h5 class="title">{{$event->name}}</h5>
                            <p class="text-muted mt-3 mb-0">
                                {{$event->description}}
                            </p>
                            <div class="mt-3">
                                <a>
                                    <span class="fa fa-calendar mr-5"></span>: {{$event->date}}
                                </a>
                                <a href="javascript:void(0)" class="text-custom float-end">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="big-icon h1 text-custom">
                            <i class="fa fa-calendar uim-icon fa-2x"></i>
                            </div>
                    </div>
                </div><!--end col-->

                @endforeach
            </div>
        </div>
    </div>
    <!-- Events Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Newsletter</h6>
                <h1 class="mb-5">Recent Newsletter</h1>
            </div>


            <div class="row g-4 justify-content-center">
                @foreach ($news as $event )
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card service-wrapper rounded border-0 shadow p-4">
                        <div class="icon text-center text-custom h1 shadow rounded bg-white">
                            <img class="uim-svg" src="{{asset('images/news.jpg')}}" alt="">
                        </div>
                        <div class="content mt-4">
                            <h5 class="title">{{$event->title}}</h5>
                            <p class="text-muted mt-3 mb-0">
                                {{substr($event->description, 0, 80)}}
                            </p>
                            <div class="mt-3">
                                <a>
                                    <span class="fa fa-calendar mr-5"></span>: {{$event->created_at->DiffForHumans()}}
                                </a>
                                <a href="{{asset('asset/image/'.$event->doc)}}" target="_blank" class="text-custom float-end">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="big-icon h1 text-custom">
                            <i class="fa fa-newspaper-o uim-icon fa-2x"></i>
                            </div>
                    </div>
                </div><!--end col-->

                @endforeach
            </div><!--end row-->

        </div>
    </div>
    <!-- Courses End -->


</x-front-layout>