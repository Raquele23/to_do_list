<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarefa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="header">
        <h1>Editar tarefa</h1>
    </div>

    <div class="container">
        <form action="{{route('update', $task->id)}}" method="post" class="form-task">
            @method("put")
            @csrf
            <label for="task" class="form-label">Nome da tarefa</label>
            <input type="text" name="task" id="task" value="{{$task->task}}" class="form-input">

            <input type= "submit" value="Atualizar" class="btn add-btn">
        </form>
    </div>

    <a href="{{ route('index')}}" class="btn add-btn">Voltar</a>
    
</body>
</html>