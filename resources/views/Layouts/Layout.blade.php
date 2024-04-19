<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @yield('styles')
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            font-weight: 400;
            color: white;
            text-align: center;
            background-image: linear-gradient(to bottom right, rgb(0, 0, 0) 0%, rgb(28, 28, 48) 100%);
            background-color: rgb(18, 18, 20);
            position: relative;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        .punto-grande {
            position: absolute;
            top: -15vw;
            left: -15vw;
            width: 35vw;
            height: 35vw;
            background: linear-gradient(to right, rgb(255, 0, 38) 0%, rgba(145, 10, 0, 0.808) 100%);
            background: radial-gradient(circle at 0% 0%, rgb(255, 0, 38) 0%, rgba(145, 10, 0, 0.37) 100%);
            border-radius: 100%;
            filter: blur(100px);
            z-index: -1;
        }

        .barra-superior {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .barra-superior .favicon {
            width: 30px;
            height: 30px;
        }

        .barra-superior .opciones {
            display: flex;
            gap: 10px;
        }

        .portafolio-profesional {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: none;
            margin: 0 auto;
            
        }

        .contenedor-portafolio {
            background-color: rgb(21, 21, 24);
            background-image: linear-gradient(to bottom right, rgb(21, 21, 32) 0%, rgb(56, 56, 64) 100%);
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            position: relative;
            margin: 0 auto;
        }

        .contenedor-portafolio img {
            width: 100%;
            height: auto;
            object-fit: cover;
            box-shadow: 10px 10px 0px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .menu-desplegable {
            position: fixed;
            top: 50px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            display: flex;
            gap: 10px;
            z-index: 100;
        }

        .menu-desplegable a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .menu-desplegable a:hover {
            color: rgb(255, 0, 38);
        }

    </style>

</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


