<!DOCTYPE html>
<html>
<head>
    <title>Fűszerezés</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/1.jpg') }}" alt="Fejléc kép">
        <nav>
            <ul>
                <li><a href="/">Főolda</a></li>
                <li><a href="/spices">Fűszerek</a></li>
                <li><a href="/posts">Bejegyzések</a></li>
                <li><a href="/spices/create">Fűszer Hozzáadása</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>&copy; 2025 Fűszerezes</div>
        <div class="current-time"></div>
    </footer>
    <script>
        function updateTime() {
            const timeElement = document.querySelector('.current-time');
            const now = new Date();
            timeElement.textContent = `Pontos idő: ${now.toLocaleTimeString()}`;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>










