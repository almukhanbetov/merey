@extends('layouts.admin')
@section('title', 'Roles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('admin.role.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control mb-2" name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Slug</label>
                        <input type="text" class="form-control mb-2" name="slug" value="{{old('slug')}}">
                        @error('slug')
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

