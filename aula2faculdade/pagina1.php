<html>
    <head>
        <title>Página teste php</title>
        <style>
            body {
                background-color: yellow;
                color: blue;
            }
            </style>
    </head>
    <body>
        <p>Parágrafo em HTML</p>
        <?php
            echo "<p>Hoje é dia " . date("d/m/Y") . ".</p>";
            echo "<p>Parágrafo em PHP</p>";
        ?>
    </body>
</html>