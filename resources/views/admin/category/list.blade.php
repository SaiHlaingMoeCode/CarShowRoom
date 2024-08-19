@extends('admin.layout.master')

@section('title','Car Brand')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <!-- MAIN CONTENT-->
<div class="main-content mt-4">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @if (session('createSuccess'))
            <div class="col-4 offset-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check"></i> {{ session('createSuccess') }}
                    <a type="" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></a>
                  </div>
            </div>
        @endif
        @if (session('updateSuccess'))
        <div class="col-4 offset-8">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-check"></i> {{ session('updateSuccess') }}
                <a type="" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></a>
              </div>
        </div>
    @endif
    @if (session('deleteSuccess'))
    <div class="col-4 offset-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-check"></i> {{ session('deleteSuccess') }}
            <a type="" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></a>
          </div>
    </div>
@endif
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <div class="d-flex mb-3">
                    <div class="col-md-6 ">
                        <div class="">
                            <h4 class="title-1">Brand List</h4>
                        </div>

                    </div>

                    <div class="col-md-6 offset-4">

                        <a href="{{route('admin#createBrandPage')}}">
                            <button class="btn btn-dark text-white">
                                <i class="fa-solid fa-plus mr-2"></i>Create Category
                            </button>
                        </a>

                    </div>

                </div>

                {{-- search box --}}
                <div class="row my-2">

                    <div class="col-3 offset-9">
                        <form action="" method="get">
                            @csrf
                            <div class="d-flex">
                                <input type="search" name="key" class="form-control" placeholder="search.." value="">
                                <button class="btn btn-dark text-white">
                                <i class="fa-solid fa-magnifying-glass text-white"></i>
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
               @if (count($categories) != 0 )
               <div class="table-responsive table-responsive-data2">
                <table class="table table-data2 text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Car Brand Name</th>
                            <th>Created Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $g)
                        <tr class="tr-shadow">
                            <td>{{$g->id}}</td>
                            <td class="col-6">{{$g->name}}</td>
                            <td>{{$g->created_at->format('j-F-Y')}}</td>
                            <td>
                                <div class="table-data-feature d-flex">
                                    {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                        <i class="fa-solid fa-eye"></i>
                                    </button> --}}
                                    <a href="{{route('admin#editBrandPage',$g->id)}}" class="mx-2 text-decoration-none">
                                        <button class="item rounded-circle bg-info px-2 border-0" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa-solid fa-pen text-white"></i>
                                        </button>
                                    </a>
                                    <a href="{{route('admin#deleteBrand',$g->id)}}" class="text-decoration-none">
                                        <button class="item rounded-circle bg-danger px-2 border-0" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="fa-solid fa-trash-can text-white"></i>
                                        </button>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-2">
              {{$categories->links('pagination::bootstrap-5')}}
            </div>

               @else
               <h4 class=" text-center mt-5" style="color:cornflowerblue;">No Brand Categories Here! Please Create Your Category.</h4>

               @endif

            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

    </div>


@endsection
