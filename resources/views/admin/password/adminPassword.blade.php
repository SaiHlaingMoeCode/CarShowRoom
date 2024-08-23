@extends('admin.layout.master')

@section('title', 'Profile')

@section('content')


    <div class="container-fluid">
        <h4>{{ now()->toFormattedDayDateString() }}</h4>
        @if (session('updateSuccess'))
            <div class="col-6 offset-6">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check mr-3"></i> {{ session('updateSuccess') }}
                    <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                            class="fa-regular fa-circle-xmark"></i></a>
                </div>
            </div>
        @endif
        <div class="container-fluid">
            <form action="{{ route('admin#passwordChange') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="text-center title-2">Password Info</h4>
                                </div>

                                <form action="" method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-1">Old Password</label>
                                        <input id="cc-pament" name="oldPassword" type="password"
                                            class="form-control  @if (session('notMatch')) is-invalid @endif @error('oldPassword') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false">
                                        @error('oldPassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        @if (session('notMatch'))
                                            <div class="invalid-feedback">
                                                {{ session('notMatch') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">New Password</label>
                                        <input id="cc-pament" name="newPassword" type="password"
                                            class="form-control @error('newPassword') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false">
                                        @error('newPassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Confirm Password</label>
                                        <input id="cc-pament" name="confirmPassword" type="password"
                                            class="form-control @error('confirmPassword') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false">
                                        @error('confirmPassword')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-info btn-block">
                                            <span class="text-white">Change Password</span>
                                            <i class="fa-solid fa-circle-right text-white"></i>
                                        </button>
                                    </div>
                                </form>
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
