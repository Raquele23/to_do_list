<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar tarefa</h1>
    <form action="{{route('update', $task->id)}}" method="post">
        @method("put")
        @csrf
        <label for="task">Nome da tarefa</label>
        <input type="text" name="task" id="task" value="{{$task->task}}">

        <input type= "submit">
    </form>

    <a href="{{ route('index')}}">Voltar</a>
</body>
</html>