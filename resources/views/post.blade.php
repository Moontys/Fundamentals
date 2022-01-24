@extends('layouts.app')


@section('content')

    <h1>Post Page {{$id}} {{$name}}</h1>

@stop

<!-- Views + Controllers - Example 3
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>This is the Post VIEW! ID&Name: {{$id}} {{$name}}</h1>
    </body>
</html>
-->