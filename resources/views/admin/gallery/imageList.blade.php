@extends('admin.layout.master')

@section('title','Gallery Lists')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    @if (session('deleteSuccess'))
    <div class="col-6 offset-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check mr-3"></i> {{ session('deleteSuccess') }}
            <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                    class="fa-regular fa-circle-xmark"></i></a>
        </div>
    </div>
@endif
@if (session('updateSuccess'))
<div class="col-6 offset-6">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check mr-3"></i> {{ session('updateSuccess') }}
        <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                class="fa-regular fa-circle-xmark"></i></a>
    </div>
</div>
@endif
@if (session('updateDetailSuccess'))
<div class="col-6 offset-6">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check mr-3"></i> {{ session('updateDetailSuccess') }}
        <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                class="fa-regular fa-circle-xmark"></i></a>
    </div>
</div>
@endif
    <div class="container mt-5">
        <div class="row">
            @foreach($imgList as $img)
                <div class="col-md-4">
                    <div class="card mb-4 h-100">
                        <img src="{{asset('storage/'.$img->image)}}" class="card-img-top" alt="" style="height: 170px">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$img->title}}</h5>
                            <div class="text-center">
                                <a href="{{route('admin#editImage',$img->id)}}"><button class="btn bg-light shadow-sm" title="edit"><i class="fa-solid fa-pen-to-square text-dark"></i></button></a>
                                <a href="{{route('admin#deleteImage',$img->id)}}"><button class="btn bg-light shadow-sm" title="delete"><i class="fa-solid fa-trash text-dark"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>


@endsection
