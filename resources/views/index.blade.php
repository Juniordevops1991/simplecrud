<!DOCTYPE html>
<head>
    <title>Laravel CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container bg-light">

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>DATA TABLE</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success">Add</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No.</th>
        <th width="280px" class="text-center">Student ID</th>
        <th width="280px" class="text-center">Name</th>
        <th width="280px" class="text-center">Class</th>
    </tr>
    @foreach($siswa as $s)
    <tr>
        <td class="text-center">{{++$i}}</td>
        <td>{{$s->ids}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->class}}</td>
    </tr>
    @endforeach
</table>

</div>

</body>
</html>
