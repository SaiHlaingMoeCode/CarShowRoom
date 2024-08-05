<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showroom</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="h-100">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container-fluid text-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">Services</a>
                    </li>
                </ul>
                <h1 class="navbar-brand" style="color:orange">
                    <img src="./image/carLogo.jpg" class="img-thumbnail rounded-circle" style="width: 55px; height: 40px;">
                </h1>
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:orange">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--intro get started-->
    <div class="row m-5" id="introRow">
        <div class="col-md-6">
            <p class=" p-4 txt1 rounded">The Easiest Way To<br> Buy A Car</p>
        </div>
        <div class="col-md-6">
            <div class=" p-4 rounded">
                <p class="txt2">Explore the last innovation and Hottest Wheels on our car enthusiast website!</p>
                <button class="btn btn-sm" id="getStarted">Get Started</button>
            </div>
        </div>
    </div>

    <!--car wallpaper-->
    <div class="col-10 offset-1 text-center">
        <img src="./image/carwallpaper.jpg" class="w-75">
    </div>
    <hr class="my-5">

    <!-- our service  -->
    <div class="row m-5">
        <div class="col-md-6 mb-3 p-3 h-100 ">
            <h3 class="mb-4">Our Service</h3>
            <p id="serviceText">Our services involves repairing and replacing major components of your car such as the engine, transimissions or suspension</p>
            <button class="btn" id="learnMore">Learn more</button>
        </div>
        <div class="col-md-6 p-3 h-100">
            <div class="container text-center">
                <div class="row row-cols-2">
                    <div class="col mb-2">
                        <img src="{{asset('image/crown_bronze.jpg')}}" class="img-thumbnail" style="height: 120px; width: 270px;">
                    </div>
                    <div class="col mb-2">
                        <img src="{{asset('image/ferrari_aperta.jpg')}}" class="img-thumbnail" style="height: 120px; width: 270px;">
                    </div>
                    <div class="col mb-2">
                        <img src="{{asset('image/mercedes_benz.jpg')}}" class="img-thumbnail" style="height: 120px; width: 270px;">
                    </div>
                    <div class="col mb-2">
                        <img src="{{asset('image/porshce911.jpg')}}" class="img-thumbnail" style="height: 120px; width: 270px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">

    <!-- about us  -->
    <div class="row mx-5 mb-5">
        <div class="col-md-6 mb-3 p-3 h-100 ">
            <h3 class="abtusTitle mb-3">About Us</h3>
            <p id="aboutusText">We are here to help you find the perfect car</p>
        </div>
        <div class="col-md-6 mb-3 p-3 h-100">
            <p id="aboutusText">We are commited to provide our customers with the best possible service at a fair price</p>
            <button class="btn" id="learnMore">Learn more</button>
        </div>
    </div>


    <!-- car wallpaper second  -->
    <div class="col-10 offset-1 text-center">
        <img src="./image/ferrari_aperta.jpg" class="w-75">
    </div>
    <hr class="my-5">

    <!-- highlight style with img-->
    <div class="row mx-5 mb-5">
        <div class="col-md-6 p-3 h-100 ">
            <p id="hightlightText">Hightlight Style</p>
        </div>
        <div class="col-md-6 mb-3 p-3 h-100">
            <p id="hightlightText">We understand that every event is unique and we strive to accommodate your individual needs</p>
        </div>
    </div>
    <div class="row m-4 text-center">
        <div class="col-md-4 mb-3">
            <img src="./image/ford_mustang.jpg" class="img-thumbnail" style="height: 150px; width: 250px;">
        </div>
        <div class="col-md-4 mb-3">
            <img src="./image/toyotaGR.jpg" class="img-thumbnail" style="height: 150px; width: 250px;">
        </div>
        <div class="col-md-4">
            <img src="./image/crown_bronze.jpg" class="img-thumbnail" style="height: 150px; width: 250px;">
        </div>
    </div>
    <hr class="my-5">

    <!-- contact footer  -->
    <section class="car_footer">
        <div class="box">
            <h3 class="p-3">
                <img src="./image/carLogo.jpg" class="img-thumbnail rounded-circle" style="width: 100px;">
            </h3>
        </div>
        <div class="box">
            <div class="p-3">
                <h3 class="fw-bold pb-4">Menu</h3>
                <a href="#" class="text-decoration-none txt">About Us</a><br>
                <a href="#" class="text-decoration-none txt">Newsroom</a ><br>
                <a href="#"  class="text-decoration-none txt">Careers</a ><br>
                <a href="#"  class="text-decoration-none txt">Partnership</a ><br>
            </div>
        </div>
        <div class="box">
            <div class="p-3">
                <h3 class="fw-bold pb-4">Services</h3>
                <a href="#" class="text-decoration-none txt">Support Career</a><br>
                <a href="#" class="text-decoration-none txt">24hr service</a ><br>
                <a href="#"  class="text-decoration-none txt">Quick chat</a ><br>
            </div>
        </div>
        <div class="box">
            <div class="p-3">
                <h3 class="fw-bold pb-4">Support</h3>
                <a href="#" class="text-decoration-none txt">FAQ</a><br>
                <a href="#" class="text-decoration-none txt">Policy</a ><br>
                <a href="#"  class="text-decoration-none txt">Business</a ><br>
            </div>
        </div>
        <div class="box">
            <div class="p-3">
                <h3 class="fw-bold pb-4">
                <iframe style="height:200px; width: 200px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d257.4780512592872!2d96.93926515122757!3d20.76236215675063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1smy!2smm!4v1721886841564!5m2!1smy!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </h3>
            </div>
        </div>
    </section>




   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
