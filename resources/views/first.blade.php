<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Первая страница</title>
</head>
<body>
    <h1>Привет, мир!</h1>
    <a href="/">главная</a>
    <p>Сумма чисел {{$a}} и {{$b}} равна {{$c}}</p>
</body>
</html>