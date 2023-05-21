<!DOCTYPE html>
<head>
    <title>Laravel CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

<div class="container bg-light py-3 mt-5">

<div class="row mb-5">
        <div class="col-11">
            <h2>DATA TABLE</h2>
        </div>
        <div class="col-1">
            <a href="{{ route('addform')}}" class="btn btn-success">Add</a>
        </div>
</div>

<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No.</th>
        <th width="280px" class="text-center">Student ID</th>
        <th width="280px" class="text-center">Name</th>
        <th width="280px" class="text-center">Class</th>
        <th width="280px" class="text-center">Action</th>
    </tr>
    @foreach($siswa as $s)
    <tr>
        <td class="text-center">{{++$i}}</td>
        <td>{{$s->ids}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->class}}</td>
        <td>
            <a href="{{ route('editform', $s->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('delete.data', $s->id) }}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="row mb-5 mt-5">{{ $siswa->links() }}</div>
</div>
</body>
</html>
