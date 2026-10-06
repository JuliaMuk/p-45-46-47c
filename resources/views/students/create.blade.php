<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto">
        <h1>Создание записи о студенте</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <input name="firstname" type="text" placeholder="Введите имя" required><br>
            <input name="middlename" type="text" placeholder="Введите отчество"><br>
            <input name="lastname" type="text" placeholder="Введите фамилия" required><br>
            <input name="birthday" type="date" placeholder="Введите дату рождения" required><br>
            <input type="submit" value="Создать">
        </form>
    </div>
</body>
</html>