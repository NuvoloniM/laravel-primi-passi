<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Hello World!!!</h1>
    <div>
        <h3>Puoi continuare a seguirci attraverso i social</h3>
        <ul>
            @foreach( $socials as $social )
            <li>{{ $social }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>