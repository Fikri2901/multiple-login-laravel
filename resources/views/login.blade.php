<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba Login</title>
</head>

<body>

    <div class="container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="text" name="name" id="name"><br>
            <input type="password" name="pass" id="pass"><br>
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>