<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <title>Home Page</title>

    <div class="container">
        <div class="row">
            @foreach ($categories as $item)

                <div class="col p-3 my-2 bg-light text-center border border-3">
                    {{ $item }}
                </div>

            @endforeach
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $prod)
                    <tr>
                        <th scope="row">{{ $prod[0] }}</th>
                        <td>{{ $prod[1] }}</td>
                        <td>${{ $prod[2] }}</td>

                        <td> <a class="btn btn-info" href="productDetails/{{ $prod[0] }}"> ShowDetails</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
