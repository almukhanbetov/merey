@extends('layouts.app')
@section('title', 'Категории')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="{{route('admin.category.index')}}" class="btn btn-success"><iconify-icon icon="icon-park-outline:return"></iconify-icon></a>
                <div class="card mb-3 mt-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{asset('storage/category/'.$category->image)}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text"><small class="text-body-secondary">{{$category->created_at}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
