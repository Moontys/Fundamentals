@extends('layouts.app')


@section('content')

    <h1>Contact Page</h1>

    @if (count($people))

        <ul>

            @foreach($people as $peopleList)

                <li>{{$peopleList}}</li>

            @endforeach

        </ul>

    @endif
    
@stop


@section('footer')

    <script>alert('app.blade.php Is the Master Template')</script>

@stop


<!-- Views + Controllers - Example 2
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>This is the Contact VIEW</h1>
    </body>
</html>
-->