<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form action=" {{ url('/register') }} " method="post">
        @csrf
        <label for="name">Nom</label><br>
        <input type="text" name ="name" placeholder ="nom" > <br>

        <label for="username">username</label><br>
        <input type="text" name ="username" placeholder ="username" > <br> <br>

        <button type="submit" >Enregister</button>
    </form>
    <a href="{{ url('/') }}">Back</a>
</body>
</html>