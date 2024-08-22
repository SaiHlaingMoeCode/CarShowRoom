@extends('admin.layout.master')

@section('title','Profile')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="container mt-5">
       <form action="{{route('admin#updateProfile')}}" method="POST">
        @csrf
        <div class="row align-items-center profile-card">
            <div class="col-md-4 text-center">
                <img src="{{asset('image/default_user.jpg')}}" alt="Profile Picture" class="img-fluid rounded-circle mb-4 w-50 h-50 shadow-sm">
            </div>

            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control text-capitalize @error('name') is-invalid @enderror" value="{{old('name',Auth::user()->name)}}">
                        @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <input type="hidden" name="userId" value={{Auth::user()->id}}>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email',Auth::user()->email)}}">
                        @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" name="role" class="form-control" value="{{old('role',Auth::user()->role)}}" disabled>
                    </div>
                    <button type="submit" class="btn btn-secondary">Save Changes</button>
                </form>
            </div>
        </div>
       </form>
    </div>




</div>


@endsection
