@extends('admin.layout.master')

@section('title','dashboard')

@section('content')


<div class="container-fluid">
    <h3>{{ now()->toFormattedDayDateString(); }}</h3>
        <!-- Content Row -->
        <div class="row">


            <!-- Total Customer Card -->
            {{-- border-left-primary <= color for side bar --}}
            <div class="col-xl-3 col-md-6 mb-4" >
                <div class="card  shadow h-100 py-2" style="background-color: #4B49AC">
                    <div class="card-body" >
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                    Total User</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">23</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: white;" class="fa-solid fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Customer Card -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  shadow h-100 py-2" style="background-color: #574476">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                    Total Order</div>
                                <div class="h5 mb-0 font-weight-bold text-white">23</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: white;" class="fa-solid fa-book-bookmark fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photo Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  shadow h-100 py-2" style="background-color: #FA9F1B">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Car Photos
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 font-weight-bold text-white">23</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i style="color: white;" class="fa-solid fa-photo-film fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blogs Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  shadow h-100 py-2" style="background-color: #FA1763">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                    Total Car Blogs</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">23</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: white;" class="fa-solid fa-file-lines fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  shadow h-100 py-2" style="background-color: #F29f67">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                    Services Categories</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">23</div>
                            </div>
                            <div class="col-auto">
                                <i style="color: white;" class="fa-solid fa-file-lines fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

            </div>
        </div>

    </div>


@endsection
