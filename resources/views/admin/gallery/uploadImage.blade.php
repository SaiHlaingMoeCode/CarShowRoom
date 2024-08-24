@extends('admin.layout.master')

@section('title','Gallery Upload')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container-fluid">
        <form action="{{route('admin#createImage')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-3">
                                <h4 class="text-center title-2">Upload Image & Title</h4>
                            </div>
                                <div class="form-group">
                                    <label class=" mb-1">Title</label>
                                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="mb-1">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-info btn-block">
                                        <span class="text-white">Upload</span>
                                        <i class="fa-solid fa-circle-right text-white"></i>
                                    </button>
                                </div>

                        </div>
                    </div>
                </div>

            </div>
        </form>
        <div class=" col-md-3 offset-md-4 col-lg-2 offset-lg-7">
            <a href="{{ route('admin#dashboard') }}" class="btn btn-info text-white my-3 btn-block">Back</a>
        </div>
    </div>



</div>


@endsection
