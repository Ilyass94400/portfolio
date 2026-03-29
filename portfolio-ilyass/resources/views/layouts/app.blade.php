<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ilyass GOURMAT - Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Styles de base pour le layout */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .navbar {
            background-color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.25rem;
            font-weight: bold;
            color: #4338ca;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #4338ca;
        }

        main {
            flex: 1;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #f1f5f9;
            color: #64748b;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="/" class="logo">Ilyass GOURMAT</a>
        <ul class="nav-links">
            <li><a href="/#projets">Expériences</a></li>
            <li><a href="/#formations">Formations</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="{{ route('veille') }}">Veille Techno</a></li>
            <a href="{{ route('projet.pro') }}">Mon Projet Pro</a>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Ilyass GOURMAT - Tous droits réservés.
    </footer>

</body>
</html>