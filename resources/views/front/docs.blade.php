<x-front-layout>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Documents</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Documents</li>
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
                    <h6 class="section-title bg-white text-center text-primary px-3">Documents</h6>
                    <h1 class="mb-5">Recent Documents</h1>
                </div>


                <div class="row g-4">
                    @foreach ($docs as $doc)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{asset('images/pdf.jpg')}}" class="card-img-top" alt="{{$doc->title}}">
                                <div class="card-body">
                                  <h5 class="card-title">{{$doc->title}}</h5>
                                  <p class="card-text">
                                    {{substr($doc->description, 0,80)}}...
                                  </p>
                                  <a href="{{asset('asset/image/'.$doc->doc)}}" target="_blank" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    {{$docs->links()}}
                </div>
            </div>
        </div>
        <!-- Team End -->
</x-front-layout>