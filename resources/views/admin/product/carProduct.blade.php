@extends('admin.layout.master')

@section('title','Car Product')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
    <div class="main-content mt-4">
        <div class="col-md-12">
            <div class="col-md-6 ">
                <div class="">
                    <h4 class="title-1">Car Product Lists</h4>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2 text-center">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Engine Type</th>
                            <th>Transmission</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($carlist as $car)
                        <tr class="tr-shadow">
                            <td class="align-middle"><img src="{{asset('storage/productsImg/'.$car->image1)}}" style="width: 120px; height: 100px"></td>
                            <td class="align-middle">{{$car->brand_name}}</td>
                            <td class="align-middle">$ {{$car->price}} </td>
                            <td class="align-middle">{{$car->engine_type}}</td>
                            <td class="align-middle">{{$car->transmission}}</td>
                            <td class="align-middle">
                                <div class="table-data-feature d-flex">
                                    <a href="{{route('admin#detailProduct',$car->id)}}" class="text-decoration-none">
                                        <button class="item rounded-circle bg-success px-2 border-0 ml-2" data-toggle="tooltip" data-placement="top" title="Detail">
                                            <i class="fa-solid fa-eye text-white"></i>
                                        </button>
                                    </a>
                                    <a href="" class="mx-2 text-decoration-none">
                                        <button class="item rounded-circle bg-info px-2 border-0" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="fa-solid fa-pen text-white"></i>
                                        </button>
                                    </a>
                                    <a href="" class=" text-decoration-none">
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
        </div>
    </div>


</div>


@endsection
