
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PracticaR02</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
</head>
<body>
<main>
    <h1>Votación de la mejor pelicula</h1>
    <article>
        <form action="verificar.php" method="get">
            <label for="pelicula1">Todo a la vez en todas partes</label>
            <input type="text" id="pelicula1" name="pelicula1"><br>
            <label for="pelicula2">Sin novedad en el frente</label>
            <input type="text" id="pelicula2" name="pelicula2"><br>
            <label for="pelicula3">Almas en pena de Inisherin</label>
            <input type="text" id="pelicula3" name="pelicula3"><br>
            <button>Votar</button>
        </form>
        <form action="borrar.php">
            <button>Borrar</button>
        </form>
    </article>
    <article>
        <?php
        if (isset($_COOKIE["pelicula1"]) && isset($_COOKIE["pelicula2"]) && isset($_COOKIE["pelicula3"])){
        echo "<h1>Resultados</h1>";
        echo "Todo a la vez en todas partes:".$_COOKIE["pelicula1"]."<br>";
        echo "Sin novedad en el frente:".$_COOKIE["pelicula2"]."<br>";
        echo "Almas en pena de Inisherin:".$_COOKIE["pelicula3"]."<br>";
        }
        else if (isset($_COOKIE["error"])){
            echo "<h1>ERROR</h1>";
            echo "<p style='color:red'>".$_COOKIE["error"]."</p>";
        }
        ?>
    </article>
</main>
</body>
</html>