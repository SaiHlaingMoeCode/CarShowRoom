@extends('admin.layout.master')

@section('title', 'Admin List')

@section('content')

    <div class="container-fluid">
        <h4>{{ now()->toFormattedDayDateString() }}</h4>
        <div class="main-content mt-4">
            <div class="col-md-12">
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <div class="">
                            <h4 class="title-1">Admin Lists</h4>
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
                            @foreach ($adminList as $list)
                                @if (Auth::user()->id == $list->id)
                                    <tr class="tr-shadow">
                                        <td class="align-middle">{{ $list->id }}</td>
                                        <td class="align-middle">{{ $list->name }}</td>
                                        <td class="align-middle">{{ $list->email }} </td>
                                        <td class="align-middle">{{ $list->role }}</td>
                                    </tr>
                                @endif
                                @if (Auth::user()->id != $list->id && $list->role == 'admin')
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->role }}</td>
                                        <td><a href="" class="btn btn-success">Change Role</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-2">
                    {{ $adminList->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>


    </div>


@endsection
