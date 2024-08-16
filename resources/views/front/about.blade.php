<x-front-layout>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    @include('layouts.service')


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



     <!-- About Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Our Mission</h6>
                    <h1 class="mb-4">Our Mission</h1>
                    <h4 class="mb-4">We extend a helping hand to those facing homelessness.</h4>
                    <p class="mb-4">
                        At HACA, we believe in fostering unity, celebrating diversity, and creating positive change. Our tireless efforts are dedicated to enhancing the lives of our community members through various initiatives. We extend a helping hand to those facing homelessness. Our monthly Friday Luncheons provide warm meals and a sense of belonging. Additionally, our bi-weekly brunches and social activities offer companionship and support.
                    </p>
                   
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/docs">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/12.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



</x-front-layout>