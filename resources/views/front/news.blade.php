<x-front-layout>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Newsletters</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Newsletter</li>
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
                    <h6 class="section-title bg-white text-center text-primary px-3">Newsletters</h6>
                    <h1 class="mb-5">Newsletters</h1>
                </div>
                <div class="row g-4">
                    @foreach ($news as $event )
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card service-wrapper rounded border-0 shadow p-4">
                            <div class="icon text-center text-custom h1 shadow rounded bg-white">
                                <img class="uim-svg" src="{{asset('images/news.jpg')}}" alt="">
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">{{$event->title}}</h5>
                                <p class="text-muted mt-3 mb-0">
                                    {{substr($event->description, 0, 60)}}
                                </p>
                                <div class="mt-3">
                                    <a>
                                        <span class="fa fa-calendar mr-5"></span>: {{$event->created_at->DiffForHumans()}}
                                    </a>
                                    <a href="{{asset('asset/image/'.$event->doc)}}" target="_blank" class="text-custom float-end">Download/Read <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="big-icon h1 text-custom">
                                <i class="fa fa-newspaper-o uim-icon fa-2x"></i>
                                </div>
                        </div>
                    </div><!--end col-->

                    @endforeach
                </div><!--end row-->
                <div class="mt-2">
                    {{$news->links()}}
                </div>
            </div>
        </div>
        <!-- Team End -->
</x-front-layout>