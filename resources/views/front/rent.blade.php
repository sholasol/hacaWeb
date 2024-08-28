<x-front-layout>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Rentals</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Rent</li>
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
                    <h6 class="section-title bg-white text-center text-primary px-3">Rent One of Our Rooms</h6>
                    <h1 class="mb-5">Rent a Room</h1>
                </div>
                @foreach ($rents as $rent)
                <div class="card shadow mb-4 wow fadeInUp" data-wow-delay="0.3s"> 
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div id="myCarousel{{ $rent->id }}" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                    @foreach($rent->rentalimages as $key => $img)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                      <img src="{{asset('asset/image/'. $img->image)}}"  width="100%" height="100%" alt="">
                                    </div>
                                    @endforeach
                                    
                                  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel{{ $rent->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel{{ $rent->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="card mb-4 rounded-3 shadow-sm mt-5">
                                  <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">{{$rent->title}}</h4>
                                  </div>
                                  <div class="card-body">
                                    <h1 class="card-title pricing-card-title">£{{number_format($rent->price)}}<small class="text-muted fw-light">/day</small></h1>
                                    <h6>Room Features</h6>
                                    <ul class="list-unstyled mt-3 mb-4">
                                      @if($rent->features)
                                        @foreach(explode(',', $rent->features) as $feature)
                                        <li>{{ $feature }} </li>
                                          @endforeach
                                      @endif
                                    </ul>
                                    <a href="/pay/{{$rent->id}}" class="w-100 btn btn-lg btn-primary">Book Room</a>
                                  </div>
                                </div>
                          </div>
                      </div>
                  </div>
                    
                </div>
                @endforeach
            </div>
            <div>
              {{$rents->links()}}
            </div>
        </div>
        <!-- Team End -->
</x-front-layout>