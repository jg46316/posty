<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-6">Home</a>
            </li>
            <li>
                <a href="" class="p-6">Dashboard</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-6">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-6">{{auth()->user()->name}}</a>
            </li>
            <form action="{{route('logout')}}" method="post" class="inline">
                @csrf
                <button type="submit" >Logout</button>
            </form>

            @endauth

            @guest
            <li>
                <a href="{{ route('register')}}" class="p-6">Register</a>
            </li>
            <li>
                <a href="{{route('login')}}" class="p-6">login</a>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
