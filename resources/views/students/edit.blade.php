<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$student->fulName()}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto">
        <h1>{{$student->fulName()}}</h1>
        <form action="{{ route('students.update',$student->id) }}" method="POST">
            @csrf
            @method('put')
            <input name="firstname" type="text" placeholder="Введите имя" required 
            value="{{$student->firstname}}"><br>

            <input name="middlename" type="text" placeholder="Введите отчество" value="{{$student->middlename}}"><br>

            <input name="lastname" type="text" placeholder="Введите фамилия" required value="{{$student->lastname}}"><br>
            
            <input name="birthday" type="date" placeholder="Введите дату рождения" required
            value="{{$student->birthday}}"><br>

            <input type="submit" value="Обновить">
        </form>        
    </div>
</body>
</html>