<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            .register-container {
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="register-container border-1 py-4 px-5 my-5 mx-auto shadow-lg rounded-5  ">
            <div class="register-header text-center mb-4 ">
                <img src="{{asset('image/black-convertible-car_53876-64027.avif')}}" style="width: 100px; height: 70px">
            </div>
            <form action="{{ route('register') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label ">Name</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Enter your name">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label ">Email address</label>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Enter your email">
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter your password">
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label ">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Enter your confirm password">
                    @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn text-white login-btn w-100 mt-2" style="background-color: rgb(9, 201, 214)">Register</button>
            </form>
            <div class="text-center mt-3">
                <small class=""><a href="{{route('auth#loginPage')}}">Already registered?</a></small>
                <small><a href="{{route('guest#homePage')}}">Go to Home Page</a></small>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


