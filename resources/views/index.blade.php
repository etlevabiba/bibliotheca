<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheca - The world is quiet here</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <h1 class="logo-text"><a href="#">Bibliotheca</a></h1>
        <div class="toggle-menu" onclick="toggleMenu()"><i class="fa fa-bars"></i></div>
        <nav class="main-nav">
            <ul class="main-menu">
                <li class="menu-item"><a href="/">Home</a></li>
                <li class="menu-item"><a href="#">Blog</a></li>
                <li class="menu-item"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <main>
            <ul class="result-list">
                @foreach($authors as $author)

                    <li class="list-item">
                        <h4 > {{ $author->name }} </h4>
                    </li>
                @endforeach
            </ul>
        </main>
    </div>
    <footer class="footer">
        <p> © 2020. All rights reserved. Developed by <a href="#"> Eva</a></p>
    </footer>
</div>
</body>
</html>