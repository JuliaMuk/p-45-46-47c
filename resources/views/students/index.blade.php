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
        <h1>Список студентов</h1>
        <a href="{{ route('students.create') }}">Создать запись</a>
        <div class="grid grid-cols-4 gap-2">
            @foreach ($students as $student)
                <div class="bg-blue-300">
                    <h2>
                        {{$student->firstname}} 
                        {{$student->middlename}} 
                        {{$student->lastname}}
                    </h2>
                    <p>{{$student->birthday}}</p>
                    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>