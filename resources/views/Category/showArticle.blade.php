<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Category Articles </title>
</head>
<body>

<ul class="list-group">
    @foreach($article as $art)
        <li class="list-group-item">{{$art -> id}}</li>
        <li class="list-group-item">{{$art -> name}}</li>
        <li class="list-group-item">{{$art -> details}}</li>
    @endforeach

</ul>


</body>
</html>
