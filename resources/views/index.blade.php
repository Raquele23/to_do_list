<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="header">
        <h1>Lista de tarefas</h1>
    </div>

    <div>
        <ul class="task-list">
            @foreach($tasks as $task)
                <div class="container">
                    <li class="task-card"><span>{{$task->task}}</span> <div class="task-actions">
                        <a href="{{route('edit', $task->id)}}" class="btn edit-btn">Editar</a> 
                        <form action="{{route('destroy', $task->id)}}" method="post" class="inline-form">@method("delete") @csrf <input type= "submit" value="Excluir" class="btn delete-btn"></form></li>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>

    <a href="{{route('create')}}" class="btn add-btn">Nova tarefa</a>
</body>
</html>