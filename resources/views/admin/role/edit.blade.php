@extends('layouts.app')
@section('title', 'Категории')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('admin.category.update', $category)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-2" name="name" value="{{$category->name}}">
                        @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label mb-2">Avatar</label>
                        <input type="file" class="form-control" name="image" value="{{$category->image}}">
                        @error('image')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

