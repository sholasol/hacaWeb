<x-front-layout>
    <style>
        body{
        background:#f5f5f5;
        margin-top:20px;
        }

        .events-date {
            text-align: center;
            position: absolute;
            right: 30px;
            top: 30px;
            background-color: rgba(25, 47, 89, 0.9);
            color: #fff;
            padding: 12px 20px 8px 20px;
            text-transform: uppercase
        }

        .event-time li {
            display: inline-block;
            margin-right: 20px
        }

        .event-time li:last-child {
            margin-right: 0
        }

        .event-time li i {
            color: #59c17a
        }

        .event-block {
            box-shadow: 0px 0px 16px 0px rgba(187, 187, 187, 0.48)
        }

        .event-block ul li i {
            color: #59c17a
        }

        @media screen and (max-width: 1199px) {
            .event-date {
                padding: 10px 18px 6px 18px
            }
        }

        @media screen and (max-width: 575px) {
            .event-date {
                padding: 8px 15px 4px 15px
            }
            .events-date {
                padding: 10px 15px 6px 15px
            }
        }

        .position-relative {
            position: relative !important;
        }

        .margin-40px-bottom {
            margin-bottom: 40px;
        }
        .padding-60px-lr {
            padding-left: 60px;
            padding-right: 60px;
        }

        .margin-15px-bottom {
            margin-bottom: 15px;
        }
        .font-weight-500 {
            font-weight: 500;
        }
        .font-size22 {
            font-size: 22px;
        }
        .text-theme-color {
            color: #192f59;
        }
        .margin-10px-bottom {
            margin-bottom: 10px;
        }
        .margin-10px-right {
            margin-right: 10px;
        }
    </style>

     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 page-header">
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
                @foreach ($data as $video)
                <!-- start event block -->
                <div class="row align-items-center event-block no-gutters margin-40px-bottom">
                    <div class="col-lg-5 col-sm-12">
                        <div class="position-relative">
                            <img src="https://www.bootdey.com/image/450x280/FFB6C1/000000" alt="">
                            <div class="events-date">
                                <div class="font-size28">10</div>
                                <div class="font-size14">Mar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                            <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Business Conference</a></h5>
                            <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                                <li><i class="far fa-clock margin-10px-right"></i> 01:30 PM - 04:30 PM</li>
                                <li><i class="fas fa-user margin-5px-right"></i> Speaker : John Sminth</li>
                            </ul>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                            <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end event block -->
                @endforeach
            
            </div>


            </div>
        </div>
        <!-- Team End -->
</x-front-layout>