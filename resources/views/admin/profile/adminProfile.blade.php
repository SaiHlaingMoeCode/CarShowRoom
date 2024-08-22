@extends('admin.layout.master')

@section('title','Profile')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    @if (session('updateSuccess'))
    <div class="col-6 offset-6">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check mr-3"></i> {{ session('updateSuccess') }}
            <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></a>
          </div>
    </div>
    @endif

    <div class="container mt-5 ">
        <div class="row align-items-center ">
            <div class="col-md-4 text-start">
                <img src="{{asset('image/default_user.jpg')}}" alt="Profile Picture" class="img-fluid rounded-circle h-50 w-50 shadow-sm">
            </div>
            <div class="col-md-8 mt-5 text-start">
                <p class="text-capitalize text-dark"><strong class="mr-2">Name:</strong>{{Auth::user()->name}}</p>
                <p class="text-dark"><strong class="mr-2">Email:</strong> {{Auth::user()->email}}</p>
                <p class="text-dark"><strong class="mr-2">Role:</strong>{{Auth::user()->role}}</p>
                <p class="text-dark"><strong class="mr-2">Date:</strong>{{Auth::user()->created_at->format('j-F-Y')}}</p>
            </div>
        </div>
        <div class="row">
            <div class=" btn bg-secondary my-3 mr-3">
                <a href="{{route('admin#dashboard')}}" class="text-decoration-none text-white">Back</a>
            </div>
            <div class="mt-3">
                <a href="{{route('admim#editProfilePage')}}">
                    <button class="btn bg-secondary text-white">Edit Profile</button>
                </a>
            </div>

        </div>

    </div>



</div>


@endsection
