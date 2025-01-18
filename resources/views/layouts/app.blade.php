<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'SMK Telkom Jakarta | Layanan Pengaduan Sekolah') }}</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        :root{
            --merah:#E4262C;
        }
        .btn-merah{
            color: white;
            background: var(--merah);
        }
        .btn-merah:hover{
            color: white;
            background: #e4262cea;
        }
        body{
            font-family: 'Montserrat';
            background: #f9f9f9;
        }

        .hero-section {
            background: {{ asset("assets/img/background.png") }} center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .form-section {
            background-color: #f8f9fa;
            padding: 40px 0;
        }
        /* .nav-link .active{
            background-color: var(--merah);
        } */
        .textjustify{
            text-align: justify;
            text-justify: inter-word;   
        }

        .activenav{
            color: var(--merah);
        }
    </style>
</head>

<body>

</body>
<div id="app">
    @yield('content')
</div>

</html>
