@extends('layouts.admin')
@section('title', 'Категории')
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
                        <th style="width: 10%">
                            ID
                        </th>
                        <th style="width: 30%">
                            Name
                        </th>
                        <th style="width: 30%">
                            Image
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
                        <td>
                            <a>
                                {{$category->name}}
                            </a>
                            <br/>
                            <small>
                                {{$category->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="{{asset('storage/category/'.$category->image)}}" width="50" alt="">
                                </li>
                            </ul>
                        </td>
                        <td class="text-right">
                            <a href="{{route('admin.category.show', $category)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.category.edit', $category)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <form action="{{route('admin.category.destroy', $category)}}" style="display: contents" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <th>No categories</th>
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
