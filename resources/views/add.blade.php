<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Add Data</title>
</head>
<body>
    <div class="container bg-light py-5 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h2><center>Add Data</center></h2>
                <form action="{{ route('add.data')}}" method="POST">
                @csrf
                @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-outline mb-2 mt-2">
                    <input type="text" name="ids" class="form-control" placeholder="Your Student ID">
                </div>
                <div class="form-outline mb-2 mt-2">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-outline mb-2 mt-2">
                    <input type="text" name="class" class="form-control" placeholder="Your Class">
                </div>
                    <input type="submit" class="btn btn-primary">
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>