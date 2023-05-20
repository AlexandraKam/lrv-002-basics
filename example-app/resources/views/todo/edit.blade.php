<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Create ToDo</h1>
<form action="/todo/store" method="post">
    @csrf
    <label>Title</label>
    <input type="text" name="title">
    <label>Description</label>
    <input type="text" name="description">
    <button type="submit">OK</button>
</form>
</body>
</html>
