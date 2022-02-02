<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masoookkk</title>
</head>

<body>

    @if ($user->roles_id == 1)
    <h1>iki gawe table admin</h1>
    @endif
    @if ($user->roles_id == 2)
    <h1>iki gawe table siswa</h1>
    @endif
    @if ($user->roles_id == 3)
    <h1>iki gawe table guru</h1>
    @endif

    <h3>{{$user->name}}</h3>
    <h3>{{$user->password}}</h3>
    <h3>{{$user->roles_id}}</h3>

</body>

</html>