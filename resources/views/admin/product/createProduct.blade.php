@extends('admin.layout.master')

@section('title','Create Product')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container mt-3">
        <form action="{{route('admin#createProduct')}}" method="POST" enctype="multipart/form-data">
            <!-- Car Name -->
            <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <select name="carName" class="form-control" required>
                    <option value="">Choose Car Name</option>
                    @foreach ($brandName as $bname)
                    <option value="{{$bname->name}}">{{$bname->name}}</option>
                    @endforeach
                </select>

            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
            </div>

            <!-- Fuel Type -->
            <div class="mb-3">
                <label for="fuelType" class="form-label">Fuel Type</label>
                <select class="form-control" name="fuelType" required>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>

            <!-- Engine Type -->
            <div class="mb-3">
                <label for="engineType" class="form-label">Engine Type</label>
                <input type="text" class="form-control"  name="engineType" required>
            </div>

            <!-- Transmission -->
            <div class="mb-3">
                <label for="transmission" class="form-label">Transmission</label>
                <select class="form-control" name="transmission" required>
                    <option value="manual">Manual</option>
                    <option value="automatic">Automatic</option>
                    <option value="semi-automatic">Semi-Automatic</option>
                </select>
            </div>

            <!-- Seating Capacity -->
            <div class="mb-3">
                <label for="seatingCapacity" class="form-label">Seating Capacity</label>
                <input type="number" class="form-control" name="seatingCapacity" required>
            </div>

            <!-- Car Images -->
            <div class="mb-3">
                <label for="images" class="form-label">Car Images</label>
                <input class="form-control py-1" type="file" name="images" multiple required>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary text-white">Create Car Product</button>
            </div>
        </form>
    </div>


</div>


@endsection
