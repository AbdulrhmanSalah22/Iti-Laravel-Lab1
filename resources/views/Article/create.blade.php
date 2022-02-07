<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Article</title>
</head>

<body>
<h1 class="text-center my-5">Add New Article</h1>
<div class="container">

    <form method="POST" action="{{ route('StoreArticle') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1" class="fs-3 my-2">Name :: </label>
            <input type="text" class="form-control" name="name"  placeholder="Enter New Article Name">
            @error('name')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
            <br>
            <label for="exampleInputEmail1" class="fs-3 my-2">Details :: </label>
            <input type="text" class="form-control" name="details"  placeholder="Enter New Article Details">
            @error('details')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
            <br>
            <br>
                <select class="form-control" name="cat_name" >
                <option value="" disabled selected>Please select Category</option>
            @foreach($cats as $cat)
                <option  value="{{$cat->name}}">{{ $cat->name }}</option>
            @endforeach
            </select>
            @error('cat_name')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary form-control mt-4">Submit</button>
    </form>
</div>
</body>
</html>
