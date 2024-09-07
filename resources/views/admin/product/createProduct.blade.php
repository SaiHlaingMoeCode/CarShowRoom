@extends('admin.layout.master')

@section('title','Create Product')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container mt-3">
        <div class=" mb-3 btn bg-secondary ml-2">
            <a href="{{route('admin#carProduct')}}" class="text-decoration-none text-white">Back</a>
        </div>
        <form action="{{route('admin#createProduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Car Name -->
            <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <select name="carName" class="form-control @error('carName') is-invalid @enderror" >
                    <option value="">Choose Car Name</option>
                    @foreach ($brandName as $bname)
                    <option value="{{$bname->id}}">{{$bname->name}}</option>
                    @endforeach
                </select>
                @error('carName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" >
                @error('model')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" >
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control " name="description" rows="3" ></textarea>
            </div>

            <!-- Fuel Type -->
            <div class="mb-3">
                <label for="fuelType" class="form-label @error('fuelType') is-invalid @enderror">Fuel Type</label>
                <select class="form-control" name="fuelType" >
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                    <option value="hybrid">Hybrid</option>
                </select>
                @error('fuelType')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Engine Type -->
            <div class="mb-3">
                <label for="engineType" class="form-label @error('engineType') is-invalid @enderror">Engine Type</label>
                <input type="text" class="form-control"  name="engineType" >
                @error('engineType')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Transmission -->
            <div class="mb-3">
                <label for="transmission" class="form-label @error('transmission') is-invalid @enderror">Transmission</label>
                <select class="form-control" name="transmission" >
                    <option value="manual">Manual</option>
                    <option value="automatic">Automatic</option>
                    <option value="semi-automatic">Semi-Automatic</option>
                </select>
                @error('transmission')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Seating Capacity -->
            <div class="mb-3">
                <label for="seatingCapacity" class="form-label @error('seatingCapacity') is-invalid @enderror">Seating Capacity</label>
                <input type="number" class="form-control" name="seatingCapacity" >
                @error('seatingCapacity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Car Images -->
            <div class="mb-3">
                <label for="images" class="form-label @error('image1') is-invalid @enderror">Image1</label>
                <input class="form-control py-1" type="file" name="image1"  >
                @error('image1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label @error('image2') is-invalid @enderror">Image2</label>
                <input class="form-control py-1" type="file" name="image2"  >
                @error('image2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label @error('image3') is-invalid @enderror">Image3</label>
                <input class="form-control py-1" type="file" name="image3"  >
                @error('image3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label @error('image4') is-invalid @enderror">Image4</label>
                <input class="form-control py-1" type="file" name="image4"  >
                @error('image4')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary text-white">Create Car Product</button>
            </div>
        </form>
    </div>


</div>


@endsection
