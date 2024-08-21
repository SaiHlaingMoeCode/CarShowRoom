@extends('admin.layout.master')

@section('title','Edit Product')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container mt-3">
        <form action="{{route('admin#updateProduct')}}" method="POST">
            @csrf
            <!-- Car Name -->
            <div class="mb-3">
                <label for="carName" class="form-label">Car Name</label>
                <select name="carName" class="form-control @error('carName') is-invalid @enderror" disabled>
                    <option value="">Choose Car Name</option>
                    @foreach ($brandName as $bname)
                    <option value="{{$bname->id}}" @if ($detail->brand_id==$bname->id) selected @endif>{{$bname->name}}</option>
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
                <input type="hidden" value="{{$detail->id}}" name="carId">
                <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" disabled value="{{ old('model', htmlspecialchars($detail->model, ENT_QUOTES, 'UTF-8')) }}"                >
                @error('model')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"  value={{old('price',$detail->price)}}>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control " name="description" rows="3" >{{old('description',$detail->description)}}</textarea>
            </div>

            <!-- Fuel Type -->
            <div class="mb-3">
                <label for="fuelType" class="form-label @error('fuelType') is-invalid @enderror">Fuel Type</label>
                <select class="form-control" name="fuelType">
                    <option value="petrol"  @if ($detail->fuel_type=='petrol') selected @endif>Petrol</option>
                    <option value="diesel"  @if ($detail->fuel_type=='diesel') selected @endif>Diesel</option>
                    <option value="electric"  @if ($detail->fuel_type=='electric') selected @endif>Electric</option>
                    <option value="hybrid"  @if ($detail->fuel_type=='hybrid') selected @endif>Hybrid</option>
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
                <input type="text" class="form-control"  name="engineType" value="{{ old('engineType', htmlspecialchars($detail->engine_type, ENT_QUOTES, 'UTF-8')) }}"                >
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
                    <option value="manual" @if ($detail->transmission=='manual') selected @endif>Manual</option>
                    <option value="automatic" @if ($detail->transmission=='automatic') selected @endif>Automatic</option>
                    <option value="semi-automatic" @if ($detail->transmission=='semi-automatic') selected @endif>Semi-Automatic</option>
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
                <input type="number" class="form-control" name="seatingCapacity"  value={{old('seatingCapacity',$detail->seating_capacity)}}>
                @error('seatingCapacity')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-secondary text-white">Update</button>
            </div>
        </form>
    </div>


</div>


@endsection
