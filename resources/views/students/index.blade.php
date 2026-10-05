<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Список студентов</h1>
        <div class="grid grid-cols-4 gap-2">
            @foreach ($students as $student)
                <div>
                    <h2>
                        {{$student->firstname}} 
                        {{$student->middlename}} 
                        {{$student->lastname}}
                    </h2>
                    <p>{{$student->birthday}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>