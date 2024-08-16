@extends('admin.layout.master')

@section('title','Car Brand')

@section('content')


<div class="container-fluid">
    <h4>{{ now()->toFormattedDayDateString(); }}</h4>
         <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 offset-8">
                        <a href="{{route('admin#brandCategory')}}"><button class="btn  btn-info text-white my-3">List</button></a>
                    </div>
                </div>
                <div class="col-lg-6 offset-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="text-center title-2">Edit Your Brand </h4>
                            </div>
                            <hr>
                            <form action="{{route('admin#updateBrand')}}" method="post" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="categoryId" value="{{$categories->id}}">
                                    <label class="control-label mb-1">Name</label>
                                    <input id="cc-pament" name="categoryName" type="text" value="{{old('categoryName',$categories->name)}}" class="form-control @error('categoryName')
                                        is-invalid
                                    @enderror" aria-required="true" aria-invalid="false">
                                    @error('categoryName')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn bg-info btn-block">
                                        <span class="text-white">Update</span>
                                        {{-- <span id="payment-button-sending" style="display:none;">Sending…</span> --}}
                                        <i class="fa-solid fa-circle-right text-white"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->

</div>


@endsection
