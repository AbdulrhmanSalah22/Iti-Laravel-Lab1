<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Category</title>
</head>

<body>
<h1 class="text-center my-5">Update Category</h1>
<div class="container">

    <form  class="form-group" method="POST" action="{{ route('UpdateCategory' , $cat[0] -> id ) }}">
        @csrf
            <label for="exampleInputEmail1" class="fs-3 my-2">Name :: </label>
            <input type="text" class="form-control " name="name" value="{{ $cat[0] -> name }}">
        {{--            @error('name')--}}
            {{--            <small class="form-text text-danger">{{$message}}</small>--}}
            {{--            @enderror--}}
        <button type="submit" class="btn btn-success form-control mt-4">Update</button>
    </form>
</div>
</body>
</html>
