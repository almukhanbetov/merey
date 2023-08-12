@extends('layouts.admin')
@section('title', 'Категории')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$category->name}}</h1>
                </div>
                <div class="col-sm-6 text-center">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}" class="btn btn-outline-primary"><i class="fas fa-undo"></i></a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="{{asset('storage/category/'.$category->image)}}" class="product-image" alt="Product Image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
