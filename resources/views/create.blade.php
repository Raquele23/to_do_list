<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicione uma tarefa</h1>
    <form action="{{route('store')}}" method="post">
        @csrf
        <label for="task">Nome da tarefa</label>
        <input type="text" name="task" id="task">

        <input type= "submit">
    </form>
</body>
</html>


<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>