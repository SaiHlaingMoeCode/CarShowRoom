@extends('admin.layout.master')

@section('title', 'User List')

@section('content')


    <div class="container-fluid">
        <h4>{{ now()->toFormattedDayDateString() }}</h4>
        <div class="main-content mt-4">
            <div class="col-md-12">
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <div class="">
                            <h4 class="title-1">User Lists</h4>
                        </div>
                    </div>
                </div>
                @if (session('changeSuccess'))
                    <div class="col-6 offset-6">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check mr-3"></i> {{ session('changeSuccess') }}
                            <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="fa-regular fa-circle-xmark"></i></a>
                        </div>
                    </div>
                @endif
                @if (session('deleteSuccess'))
                    <div class="col-6 offset-6">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check mr-3"></i> {{ session('deleteSuccess') }}
                            <a type="" class="btn-close ml-3" data-bs-dismiss="alert" aria-label="Close"><i
                                    class="fa-regular fa-circle-xmark"></i></a>
                        </div>
                    </div>
                @endif
                <div class="table-responsive table-responsive-data2">
                    @if (count($userList) != 0)
                        <table class="table table-data2 text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userList as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->role }}</td>
                                        <td><a href="{{route('admin#changeRolePage',$list->id)}}" class="btn btn-success">Change Role</a>
                                            <a href="{{route('admin#deleteUser',$list->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center ">
                            <h2 class="text-danger">There is no user</h2>
                        </div>
                    @endif

                </div>
                <div class="mt-2">
                    {{ $userList->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>


    </div>


@endsection
