<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demo ASIX</title>
    </head>
    <body>
        <h1>
            <?php
                $x = 5;
                $y = "John";

            for ($i = 0; $i < $x; $i++) {
                if ($i%2 == 0){
                    echo "Hola $y <br> ";
                }
                else{
                    echo "Hola word<br> ";
                }
            }
            $books=[
                    "dune",
                    "the hobbit",
                   "the lord of the rings",
                    "harry poter",
                    "a song of ice and fire",
                    "foundation",
                    "do androids dreams of electric sheep"
                ]




            ?>

        </h1>
        <p>llista de series:</p>
        <ul>
            <?php foreach ($books as $book):?>
                <li><?= $book?></li>
            <?php endforeach;?>
        </ul>
    </body>
</html>