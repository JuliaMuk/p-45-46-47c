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
        <p>Дата рождения: {{$student->birthday}}</p> 
        <p class="text-avocado-200">Предметы:</p>
        <div>
            @foreach ($student->subjects as $subject)
                <p>{{$subject->title}}: {{$subject->pivot->mark}}</p>
            @endforeach
        </div>       
    </div>
</body>
</html>