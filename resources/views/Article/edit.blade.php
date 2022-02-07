<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Article</title>
</head>

<body>
<h1 class="text-center my-5">Update Article</h1>
<div class="container">

    <form  class="form-group" method="POST" action="{{ route('UpdateArticle' , $article -> id ) }}">
        @csrf
            <label for="exampleInputEmail1" class="fs-3 my-2">Name :: </label>
            <input type="text" class="form-control " name="name" value="{{ $article -> name }}">

            <label for="exampleInputEmail1" class="fs-3 my-2">Details :: </label>
            <input type="text" class="form-control " name="details" value="{{ $article -> details }}">
        <br>
        <label for="exampleInputEmail1" class="fs-3 my-2">Category_Name :: </label>
        <select class="form-control" name="cat_name" required>
            <option value="" disabled selected>{{$article -> category -> name }}</option>
            @foreach($cats as $cat)
                <option  value="{{$cat->name}}">{{ $cat->name }}</option>
            @endforeach
        </select>
{{--            <label for="exampleInputEmail1" class="fs-3 my-2">Category_Name :: </label>--}}
{{--            <input type="text" class="form-control " name="cat_name" value="{{ $article -> category -> name }}">--}}

        <button type="submit" class="btn btn-success form-control mt-4">Update</button>
    </form>
</div>
</body>
</html>
