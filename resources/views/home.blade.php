<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a> |
            <a href="/chi-siamo">Chi siamo</a> |
            <a href="/contatti">Contatti</a>
        </nav>
        <hr>
    </header>

    <main>
        <h1>Hello {{ $nome }}</h1>
        <h3>{{ $messaggio }}</h3>
    </main>
</body>
</html>
