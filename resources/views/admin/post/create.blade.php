@extends('layouts.admin')
@section('title', 'Post')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">@yield('title')</h3>
                    </div>
                    <form action="{{route("admin.post.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
                            </div>
                            @error('title')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label>Categories</label>
                                <select class="form-control" name="category_id">
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @empty
                                        <h2>No categories</h2>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" class="form-control" name="content" placeholder="Content" value="{{old('content')}}">
                            </div>
                            @error('content')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" placeholder="Author" value="{{old('author')}}">
                            </div>
                            @error('author')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputFile">Image input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" value="{{old('image')}}">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('image')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </section>

@endsection

