<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <ul>
        <li> <a href="{{route('/')}}">home</a></li>
        <li><a href="{{route('about')}}">about</a></li>
    </ul>
</header>
<body>
    <?php
    echo 'ciao mondo';
    foreach ($users as $user) {
        echo $user;
    }
    ?>
</body>
</html>