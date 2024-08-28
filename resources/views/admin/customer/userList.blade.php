@extends('admin.layout.master')

@section('title','User List')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userList as $list)
                            <tr class="tr-shadow">
                                <td class="align-middle">{{ $list->name }}</td>
                                <td class="align-middle">{{ $list->email }} </td>
                                <td class="align-middle">{{ $list->role }}</td>
                                <td class="align-middle">
                                    <form action="{{ route('admin#changeRole', $list->id) }}" method="POST">
                                        @csrf
                                        <div class="table-data-feature d-flex align-items-center">
                                            <select name="role" class="form-control w-50 text-center mr-3" onchange="this.form.submit()">
                                                <option value="admin" @if ($list->role=='admin') selected @endif>Admin</option>
                                                <option value="user" @if ($list->role=='user') selected @endif>User</option>
                                            </select>
                                            <a href="{{ route('admin#deleteUser', $list->id) }}" class="text-decoration-none">
                                                <button class="item rounded-circle bg-danger px-2 border-0" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="fa-solid fa-trash-can text-white"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </form>
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
