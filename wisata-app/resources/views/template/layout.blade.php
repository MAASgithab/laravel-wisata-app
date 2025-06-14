<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
    crossorigin="anonymous">
    <style>
nav a.nav-link {
    position: relative;
    display: inline-block;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav a.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
     background: linear-gradient(90deg, #ff6b6b, #ffd93d);
    transition: width 0.3s ease, left 0.3s ease;
}

nav a.nav-link:hover {
    color: #ccc;
}

nav a.nav-link:hover::after {
    width: 100%;
    left: 0;
}

body{
    font-family: 'Times New Roman', Times, serif !important;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #1b1b18;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/Logo LokaWi.png') }}" alt="Logo" style="height:100px;">
            </a>
            <div class="d-flex" style="font-size: 19px">
                <a class="nav-link text-white mx-2" href="{{ route('home') }}">Home</a>
                <a class="nav-link text-white mx-2" href="{{ route('lokawi') }}">LokaWi</a>
                <a class="nav-link text-white mx-2" href="{{ route('about') }}">About</a>
                <a class="nav-link text-white mx-2" href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    {{-- footer --}}
    <footer class="text-center mt-5">
        <p>&copy; 2025 LOKA PRODUCTION. All rights reserved.</p>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>
