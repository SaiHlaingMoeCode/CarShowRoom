@extends('admin.layout.master')

@section('title','Car Product Detail')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="mb-3 btn bg-secondary ml-2 ">
                <a href="{{route('admin#carProduct')}}" class="text-decoration-none text-white">Back</a>
            </div>
            @if (session('updateSuccess'))
            <div class="col-6 offset-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check mr-3"></i> {{ session('updateSuccess') }}
                    <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
            </div>
        @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('storage/productsImg/'.$detail->image1)}}" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/productsImg/'.$detail->image2)}}" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/productsImg/'.$detail->image3)}}" alt="Image 3">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('storage/productsImg/'.$detail->image4)}}" alt="Image 4">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Car Name: <span class="text-info">{{$detail->brand_name}}</span> </h2>
                <p><strong>Model:</strong> <span class="text-info">{{$detail->model}}</span></p>
                <p><strong>Engine Type:</strong> <span class="text-info">{{$detail->engine_type}}</span></p>
                <p><strong>Fuel Type:</strong> <span  class="text-info">{{$detail->fuel_type}}</span></p>
                <p><strong>Transmission:</strong> <span  class="text-info">{{$detail->transmission}}</span></p>
                <p><strong>Price:</strong> <span class="text-info">$ {{$detail->price}}</span></p>
                <p><strong>Seating Capacity:</strong> <span  class="text-info">{{$detail->seating_capacity}}</span></p>
                <p><strong>Description:</strong></p>
                <p  class="text-info">{{$detail->description}}</p>
            </div>
        </div>
    </div>

</div>


@endsection
