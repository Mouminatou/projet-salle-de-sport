<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])

</head>
<body>
<div class="header_content">
        <span class="bg_blur"></span>
        <span class="bg_blur header_blur"></span>
          <nav>
            <div class="nav_logo">
                <a href="#"><img src="fitt3.png" alt="logo "></a>
            </div>
            
        <ul class="nav_links">
            <li class="link"><a href="{{ route('accueil.index') }}">Accueil</a></li>
            <li class="link"><a href="{{ route('cours.index') }}">Cours</a></li>
            <li class="link"><a href="{{ route('tarifs.index') }}">Tarifs</a></li>
            <li class="link"><a href="{{ route('contact.index') }}">Contact</a></li>
            <li class="link"><a href="{{ route('mentionslegales.index') }}">Mentions Légales</a></li>
            
        </ul>
        <button class="btn">Rejoindre Maintenant</button>
        </nav>
          </div>
            
    @yield('content')
</body>
</html>