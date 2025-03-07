<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suivie</h1>

    
    <form action="{{ url('/tracking') }}" method="post">
    @csrf 
        <input type="text" placeholder = "Numero de suivie" name = "tracking_number"> <br>
        <button type="submit" >Rechercher</button>
    </form>
    <a href="{{ url('/') }}">Back</a>

</body>
</html>