<x-front-layout>
    <style>
        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        img.demo {
            width: 300px;
            height: 300px;
            opacity: 0.6;
            object-fit: cover; /* Ensures the image fits into the square without distortion */
        }

        img.hover-shadow {
            width: 300px;
            height: 300px;
            object-fit: cover; /* Ensures the image fits into the square without distortion */
            transition: 0.3s;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Event Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{$event->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$event->name}}</h6>
                <h1 class="mb-2">Event Details</h1>

                <p class="mb-5">{{$event->description}}</p>
            </div>

            <!-- Images used to open the lightbox -->
            <div class="row">
                @foreach ($imgs as $index => $img)
                    <div class="column mb-2">
                        <img src="{{asset('asset/image/'.$img->image)}}" onclick="openModal();currentSlide({{$index + 1}})" class="hover-shadow">
                    </div>
                @endforeach
            </div>

            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor mt-5" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    @foreach ($imgs as $index => $img)
                        <div class="mySlides">
                            <div class="numbertext">{{$index + 1}} / {{count($imgs)}}</div>
                            <img src="{{asset('asset/image/'.$img->image)}}" style="width:100%">
                        </div>
                    @endforeach

                    <!-- Next/previous controls -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Caption text -->
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <!-- Thumbnail image controls -->
                    <div class="row">
                        @foreach ($imgs as $index => $img)
                            <div class="column mb-2">
                                <img class="demo" src="{{asset('asset/image/'.$img->image)}}" onclick="currentSlide({{$index + 1}})" alt="Image {{$index + 1}}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</x-front-layout>
