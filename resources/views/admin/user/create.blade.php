@extends('layouts.app')
@section('title', 'Create title')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
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
                        <label for="name" class="form-label">Lastname</label>
                        <input type="text" class="form-control mb-2" name="lastname" value="{{old('lastname')}}">
                        @error('lastname')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-2" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label mb-2">Image</label>
                        <input type="file" class="form-control" name="avatar" value="{{old('avatar')}}">
                        @error('avatar')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @forelse($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{$role->id}}" name="role[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$role->name ?? ''}}
                            </label>
                        </div>
                        @empty
                            <h1 class="text-muted">No roles</h1>
                        @endforelse
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

