<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de: </p><strong> {{$msg['name']}} </strong>
    <br>
    <p>correo: </p><strong> {{$msg['email']}} </strong>
    <br>
    <p>mensaje: </p><strong> {{$msg['message']}} </strong>
</body>
</html>
