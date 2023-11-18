<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">
<form method="get" action="{{ 'diff' }}">
    <label>Переменная a</label>
    <input name="a">
    <label>Переменная b</label>
    <input name="b">
    <button submit="button">Результат</button>
</form>
<div>
    @if($diff > 20)
        @for ($i = 0; $i < 10; $i++)
            <span>Разница чисел {{ $diff }}</span>
        @endfor
    @else
        @for ($i = 0; $i < 10; $i++)
            <p>Разница чисел {{ $diff }}</p>
        @endfor
    @endif
</div>
</body>
</html>
