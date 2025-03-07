<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Poste</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae nisi excepturi quod ex totam officia fugiat nihil sequi est ut repellendus recusandae corporis neque, cum accusamus omnis numquam iusto quaerat!</p>
    <img src="/images/itineraire.png" alt="simpleimage d'ulustration">
    @if ($nb > 0 )
        <p>Nombre tiré du fichier php {{$nb}} </p>
    @else
        <p>Il y'a aucun nombre</p>
    @endif

    <a href="{{ url('/register') }}">Register</a> <br>
    <a href="{{ url('/tracking') }}">Suivre une personne</a>
</body>
</html>