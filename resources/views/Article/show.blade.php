@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop


@section('content_header')
    <h1>Dashboard / Articles</h1>
@stop

@section('content')
<div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">details</th>
                    <th scope="col">Cat_Id</th>
                    <th colspan="2" scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($article as $art)
                    <tr>
                        <th scope="row">{{ $art->id }}</th>
                        <td>{{ $art->name }}</td>
                        <td>{{ $art->details }}</td>
                        <td>{{ $art->cat_id }}</td>
                        <td>
                            <form method="post" action="{{ route('deleteArticle', $art->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        </td>
                        <td> <a class="btn btn-info" href="/art/edit/{{ $art->id }}"> Update </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $article -> links() }}
        <div class="container mt-5">
            <a class="form-control btn btn-primary" href="/art/add"> Add New Article </a>
        </div>
    </div>
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

