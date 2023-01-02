<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="/add"><button>Ajouter tâche</button></a>

<form action="/filtrer" action="GET">
    <input type="date" name="datedebut">
    <input type="date" name="datefin">
    <button>Filtrer</button>
</form>



<table width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    @foreach ($data as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td><a href="/updatetask/{{ $row->id }}">update</a></td>
        <td><a href="/delete/{{ $row->id }}">Delete</a></td>
    </tr>
    @endforeach
</table>
    
<div class="row">{{ $data->links() }}</div>

{{-- {{ $data->onEachSide(1)->links() }} --}}
</body>
</html>