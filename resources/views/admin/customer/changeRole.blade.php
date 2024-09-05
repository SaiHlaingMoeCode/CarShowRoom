@extends('admin.layout.master')

@section('title', 'User List')

@section('content')


    <div class="container-fluid">
        <h4>{{ now()->toFormattedDayDateString() }}</h4>
        @if (session('changeSuccess'))
            <div class="col-6 offset-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check mr-3"></i> {{ session('changeSuccess') }}
                    <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                            class="fa-regular fa-circle-xmark"></i></a>
                </div>
            </div>
        @endif
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin#changeRole', $data->id) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $data->name) }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $data->email) }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control" name="role">
                                        <option value="">Change Role</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary me-md-2 mr-2">Change</button>
                                    <a href="{{ route('admin#adminList') }}">
                                        <button type="button" class="btn btn-secondary">Back</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
