<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar tarefa</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="header">
        <h1>Adicionar tarefa</h1>
    </div>

    <div class="container">
        <form action="{{route('store')}}" method="post" class="form-task">
            @csrf
            <label for="task" class="form-label">Nome da tarefa</label>
            <input type="text" name="task" id="task" class="form-input">

            <input type= "submit" value="Salvar" class="btn add-btn">
        </form>
    </div>

    <a href="{{ route('index')}}" class="btn add-btn">Voltar</a>
</body>
</html>


<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>