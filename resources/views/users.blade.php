<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>
</head>
<body>
<div>
    <ul>
        @foreach($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
