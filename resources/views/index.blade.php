<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    <h2>User email : {{auth()->user()->email}}</h2>
    <a href="{{ route('logout') }}">logout</a>
</body>
</html>