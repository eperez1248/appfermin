<html>
    <head></head>
    <body>
        <h1>Mi primer fichero en PHP</h1>
        <?php
        echo '<p>En un lugar de la mancha,</p>';
        echo '<p>de cuyo nombre no quiero acordarme...</p>';
        ?>
        <div>
            <p>
                <?php
                $edad = 234;
                echo $edad;
                ?>
            </p>
            <p>
                <?php
                $num1 = 3;
                $num2 = 5;
                $resultado = $num1 + $num2;
                echo $resultado
                ?>
            </p>
        </div>

    </body>
</html>
