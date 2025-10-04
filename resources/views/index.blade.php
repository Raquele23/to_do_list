<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <h1>Lista de tarefas</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task->task}} | <a href="{{route('edit', $task->id)}}">editar</a> | <form action="{{route('destroy', $task->id)}}" method="post">@method("delete") @csrf <input type= "submit" value="excluir"></form></li>
        @endforeach
    </ul>

    <a href="{{route('create')}}">cadastrar</a>

    
</body>
</html>