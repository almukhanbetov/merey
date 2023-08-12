@extends('layouts.admin')
@section('title', 'Категории')
@section('content')
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
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 20%;">Title</th>
                        <th scope="col" style="width: 15%;">Categories</th>
                        <th scope="col" style="width: 20%">Content</th>
                        <th scope="col" style="width: 10%">Author</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->author}}</td>
                            <td><img src="{{asset('storage/post/'.$post->image ?? 'no-image.png')}}" width="70" alt=""></td>
                            <td>
                                <a href="{{route('admin.post.show', $post)}}" class="btn btn-primary"><i class="fas fa-eye"></i> </a>
                                <a href="{{route('admin.post.edit', $post)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <form action="{{route('admin.post.destroy', $post)}}" style="display: contents" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>No posts</th>
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

<div class="container">
        <div class="row">
            <div class="col-12">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <a href="{{route('admin.post.create')}}" class="btn btn-success"><iconify-icon icon="fa:plus"></iconify-icon> Create</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 20%;">Title</th>
                        <th scope="col" style="width: 15%;">Categories</th>
                        <th scope="col" style="width: 20%">Content</th>
                        <th scope="col" style="width: 10%">Author</th>
                        <th scope="col" style="width: 10%">Published</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @forelse($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->author}}</td>
                        <td>{{$post->published}}</td>
                        <td>
                            <a href="{{route('admin.post.show', $post)}}" class="btn btn-primary"><iconify-icon icon="uiw:eye"></iconify-icon> </a>
                            <a href="{{route('admin.post.edit', $post)}}" class="btn btn-success"><iconify-icon icon="fa:edit"></iconify-icon> </a>
                            <form action="{{route('admin.post.destroy', $post)}}" style="display: contents" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><iconify-icon icon="zondicons:trash"></iconify-icon></button>

                            </form>
                        </td>

                    </tr>
                    @empty
                        <tr class="text-center">
                            <th colspan="1"></th>
                            <th>No posts</th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
