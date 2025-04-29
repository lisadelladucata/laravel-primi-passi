<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $titolo }}</title>
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
        <h1>{{ $titolo }}</h1>
        <ul>
        <?php
            foreach ($team as $membro) {
                echo "<li>$membro</li>";
            }
        ?>
        </ul>
    </main>
</body>
</html>
