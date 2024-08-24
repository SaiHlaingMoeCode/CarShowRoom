@extends('admin.layout.master')

@section('title','Gallery Upload')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container form-container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <!-- Car Edit Form -->
                <form action="{{ route('admin#updateImage', $imgList->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Display current car image -->
                    <div class="mb-4 text-center">
                        <img src="{{ asset('storage/' . $imgList->image) }}" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
                    </div>

                    <!-- Car Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Car Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $imgList->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Upload New Image -->
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Upload New Image (optional)</label>
                        <input class="form-control" type="file" name="image">
                    </div>

                    <!-- Update Button -->
                    <button type="submit" class="btn btn-info w-100 text-white">Update</button>

                    <!-- Back to Gallery Link -->
                    <a href="{{ route('admin#imageList') }}" class="btn btn-secondary w-100 mt-3">Back to Gallery</a>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
