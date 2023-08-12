@extends('layouts.admin')
@section('title', 'Users')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 20%">
                            LastName
                        </th>
                        <th style="width: 10%">
                            E-mail
                        </th>
                        <th style="width: 10%">
                            Avatar
                        </th>
                        <th style="width: 10%">
                            Role
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>
                            <a>
                                {{$user->name}}
                            </a>
                            <br/>
                            <small>
                                {{$user->created_at}}
                            </small>
                        </td>
                        <td>
                            <a>
                                {{$user->lastname}}
                            </a>
                        </td>
                        <td>
                            <a>
                                {{$user->email}}
                            </a>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{asset('storage/user/'.$user->avatar)}}" width="50" alt="">
                                </li>
                            </ul>
                        </td>
                        <td>
                                {{$user->name}}
                        </td>
                        <td class="text-right">
                            <a href="{{route('admin.user.show', $user)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.user.edit', $user)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <form action="{{route('admin.user.destroy', $user)}}" style="display: contents" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <th>No users</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection
