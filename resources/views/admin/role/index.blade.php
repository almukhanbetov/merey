@extends('layouts.admin')
@section('title', 'Roles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <a href="{{route('admin.role.create')}}" class="btn btn-success mt-5 mb-5"><iconify-icon icon="fa:plus"></iconify-icon> Create</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">#</th>
                        <th scope="col" style="width: 50%;">Name</th>
                        <th scope="col" style="width: 30%;">Slug</th>

                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @forelse($roles as $role)
                    <tr>
                        <th scope="row">{{$role->id}}</th>
                        <td>{{$role->name}}</td>
                        <td>{{$role->slug}}</td>
                        <td>
                            <a href="{{route('admin.role.show', $role)}}" class="btn btn-primary"><iconify-icon icon="uiw:eye"></iconify-icon> </a>
                            <a href="{{route('admin.role.edit', $role)}}" class="btn btn-success"><iconify-icon icon="fa:edit"></iconify-icon> </a>
                            <form action="{{route('admin.role.destroy', $role)}}" style="display: contents" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><iconify-icon icon="zondicons:trash"></iconify-icon></button>

                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr class="text-center">
                            <th colspan="1"></th>
                            <th>No roles</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
