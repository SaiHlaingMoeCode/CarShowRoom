<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Showroom</title>
    {{-- css bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- public css  --}}

    {{-- fontawesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    {{-- navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h2 style="color: rgb(9, 201, 214);" class="navbar-brand ms-3"><i class="fa-solid fa-car-rear "></i> Mobing</h2>

            <div class="collapse navbar-collapse justify-content-center ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex me-3">
                <a href="{{route('auth#loginPage')}}" class="btn btn-sm me-2">LOGIN</a>
                <a href="{{route('auth#registerPage')}}" class="btn btn-sm">REGISTER</a>
            </div>
            <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: rgb(9, 201, 214);"><i class="fa-solid fa-car-rear "></i> Mobing</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth#loginPage')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth#registerPage')}}">Register</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- navbar end  --}}
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Perfect Way To Buy And Sell Car On Your Platform</h1>
                <p>We will help you sell or buy your dream car here easily and quickly that is reliable</p>
                <div class="d-flex">
                    <button class="btn btn-sm me-2">Buy Car</button>
                    <button class="btn btn-sm">Sell Car</button>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{asset('image/10815870.png')}}" alt="Car Image" class="car-image">
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="text-center ">
                <h2>What Our Serve For You</h2>
                <p>We provide many of the best service for you and you will get the best benefits here</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Buy & Sell Car Card -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-regular fa-thumbs-up mb-3 fs-4"></i>
                        <h5 class="card-titler">Top Buy & Sell Car</h5>
                        <small class="card-text text-muted">Buy and sell the best and most trusted car.We provide the best platform for you and easy to use.</small>
                    </div>
                </div>
            </div>
            <!-- Easy Payment Card -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-wallet mb-3 fs-4"></i>
                        <h5 class="card-title">Easy Payment</h5>
                        <small class="card-text text-muted">Transactions are very easy and safe, you can pay using anything and the money will be received by us first</small>
                    </div>
                </div>
            </div>
            <!-- Easy to Use Card -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa-regular fa-face-laugh-beam  mb-3 fs-4"></i>
                        <h5 class="card-title">Easy to Use</h5>
                        <small class="card-text text-muted">We will make it easier for you to use our platform and be able to sell or buy the car of your dreams</small>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
