<x-front-layout>
    <style>

        .card.box1 {
            width: 450px;
            height: 500px;
            background-color: #3ecc6d;
            color: #fbfdfb;
            border-radius: 0
        }

        .card.box2 {
            width: 450px;
            height: 580px;
            background-color: #ffffff;
            border-radius: 0
        }

        .text {
            font-size: 13px
        }

        .box2 .btn.btn-primary.bar {
            width: 20px;
            background-color: transparent;
            border: none;
            color: #3ecc6d
        }

        .box2 .btn.btn-primary.bar:hover {
            color: #baf0c3
        }

        .box1 .btn.btn-primary {
            background-color: #57c97d;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ddd
        }

        .box1 .btn.btn-primary:hover {
            background-color: #f6f8f7;
            color: #57c97d
        }

        .btn.btn-success {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ddd;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none
        }

        .nav.nav-tabs {
            border: none;
            border-bottom: 2px solid #ddd
        }

        .nav.nav-tabs .nav-item .nav-link {
            border: none;
            color: black;
            border-bottom: 2px solid transparent;
            font-size: 14px
        }

        .nav.nav-tabs .nav-item .nav-link:hover {
            border-bottom: 2px solid #3ecc6d;
            color: #05cf48
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            border: none;
            border-bottom: 2px solid #3ecc6d
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ddd;
            box-shadow: none;
            height: 20px;
            font-weight: 600;
            font-size: 14px;
            padding: 15px 0px;
            letter-spacing: 1.5px;
            border-radius: 0
        }

        .inputWithIcon {
            position: relative
        }

        img {
            width: 50px;
            height: 20px;
            object-fit: cover
        }

        .inputWithIcon span {
            position: absolute;
            right: 0px;
            bottom: 9px;
            color: #57c97d;
            cursor: pointer;
            transition: 0.3s;
            font-size: 14px
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 1px solid #ddd
        }

        .btn-outline-primary {
            color: black;
            background-color: #ddd;
            border: 1px solid #ddd
        }

        .btn-outline-primary:hover {
            background-color: #05cf48;
            border: 1px solid #ddd
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
            color: #baf0c3;
            background-color: #3ecc6d;
            box-shadow: none;
            border: 1px solid #ddd
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
            border-radius: 50px;
            margin-right: 20px
        }

        form {
            font-size: 14px
        }

        form .btn.btn-primary {
            width: 100%;
            height: 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #3ecc6d;
            border: 1px solid #ddd
        }

        form .btn.btn-primary:hover {
            background-color: #05cf48
        }

        @media (max-width:750px) {
            .container {
                padding: 10px;
                width: 100%
            }

            .text-green {
                font-size: 14px
            }

            .card.box1,
            .card.box2 {
                width: 100%
            }

            .nav.nav-tabs .nav-item .nav-link {
                font-size: 12px
            }
        }
            </style>
     <!-- Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Payment</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Payment</li>
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
                    <h1 class="mb-5">Pay for Room Rental</h1>
                </div>



                <div class="container bg-light d-md-flex align-items-center" style="background-color:#3ecc6d;  margin: 20px auto; width: 1000px; padding: 30px"> 
                    <div class="card box1 shadow-sm p-md-5 p-md-5 p-4"> 
                        <div class="fw-bolder mb-4"><span class="fas fa-home"></span>
                           Room Name:  <span class="ps-1">{{$rental->title}}</span>
                        </div> 
                        <div class="fw-bolder mb-4"><span class="fas fa-money"></span>
                           Room Price:  <span class="ps-1">£{{number_format($rental->price)}}</span>
                        </div> 
                        <div class="fw-bolder mb-4"><span class="fas fa-users"></span>
                           Room Capacity:  <span class="ps-1">{{$rental->capacity}}</span>
                        </div> 
                        <div class="d-flex flex-column mt-5"> 
                            <div class="border-bottom mb-4"></div> 
                            <div class="d-flex align-items-center justify-content-between text mt-5"> 
                                <div class="d-flex flex-column text"> <span>Customer Support:</span> <span>+447366191996</span> </div>
                                <div class="btn btn-primary rounded-circle"><span class="fas fa-phone"></span></div> 
                            </div> 
                        </div> 
                    </div> 
                    <div class="card box2 shadow-sm"> 
                        <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> 
                            <span class="h5 fw-bold m-0">Booking Details</span> 
                            <div class="btn btn-primary bar"><span class="fas fa-bars"></span></div> 
                        </div> 
                        <ul class="nav nav-tabs mb-3 px-md-4 px-2"> 
                            <li class="nav-item"> <a class="nav-link px-2 active" aria-current="page" href="#">Booking Details</a> </li> 
                        </ul> 
                        <div class="px-md-5 px-4 mb-4 d-flex align-items-center py-2"> 
                            <div class="btn btn-success me-4"><span class="fas fa-credit-card"></span></div> 
                            
                        </div> 
                        <form action="{{ route('stripe') }}" method="POST"> 
                            @csrf
                            <div class="row"> 
                                <input type="hidden" name="type" value="rental">
                                <input type="hidden" name="currency" value="gbp">
                                <div class="col-md-12"> 
                                    <div class="col-12"> 
                                        <div class="d-flex flex-column px-md-5 px-4 mb-2"> 
                                            <span>Room Name</span> 
                                            <div class="inputWithIcon"> 
                                                <input class="form-control text-uppercase" type="text" name="product" value="{{$rental->title}}" readonly> 
                                                <span class="far fa-home"></span> 
                                            </div> 
                                        </div> 
                                    </div> 
                                    <div class="col-12"> 
                                        <div class="d-flex flex-column px-md-5 px-4 mb-2"> 
                                            <span>Price</span> 
                                            <div class="inputWithIcon"> 
                                                <input class="form-control text-uppercase" type="number" name="price" value="{{$rental->price}}" readonly>
                                            </div> 
                                        </div> 
                                    </div> 
                                    <div class="col-12"> 
                                        <div class="d-flex flex-column px-md-5 px-4 mb-2"> 
                                            <span>Event Date</span> 
                                            <div class="inputWithIcon"> 
                                                <input class="form-control text-uppercase" min="{{date('Y-m-d')}}" type="date" name="date" required> 
                                            </div> 
                                        </div> 
                                    </div> 
                                    <div class="col-12"> 
                                        <div class="d-flex flex-column px-md-5 px-4 mb-4"> 
                                            <span> Name</span> 
                                            <div class="inputWithIcon"> 
                                                <input class="form-control text-uppercase" type="text" name="name" placeholder="Enter Your Name"> 
                                                <span class="far fa-user"></span> 
                                            </div> 
                                        </div> 
                                    </div> 
                                    <div class="col-12 px-md-5 px-4 mt-3"> 
                                        <button type="submit" class="btn btn-primary w-100">Pay £{{$rental->price}}</button> 
                                    </div> 
                                </div> 
                            </form> 
                        </div> 
                    </div>

                </div>
        </div>
        <!-- Team End -->
</x-front-layout>