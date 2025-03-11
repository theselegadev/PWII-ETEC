<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <h1>Array</h1>
        <p>São variavéis que podem guardar uma lista de valores identificados por indice ou chave.</p>
        <pre>
            $frutas = ["Banana","Maça","Abacaxi","Mamão"];
            //ou
            $frutas = array("Banana","Maça","Abacaxi","Mamão");
        </pre>
        <?php
            $frutas = array("Banana","Maça","Abacaxi","Mamão");
            echo "<br>$frutas[2]";

            for($i = 0; $i < count($frutas); $i++){
                echo "<br>$frutas[$i]";
            }

            array_push($frutas,"Kiwi");
            array_push($frutas,rand(1,7));

            for($i = 0; $i < count($frutas); $i++){
                echo "<br>$frutas[$i]";
            }

            $b = array(rand(1,15),rand(1,15),rand(1,15),rand(1,15),rand(1,15));
            $i = array(rand(16,30),rand(16,30),rand(16,30),rand(16,30),rand(16,30));
            $n = array(rand(31,45),rand(31,45),rand(31,45),rand(31,45),rand(31,45));
            $g = array(rand(46,60),rand(46,60),rand(46,60),rand(46,60),rand(46,60));
            $o = array(rand(61,75),rand(61,75),rand(61,75),rand(61,75),rand(61,75))
        ?>

        <table style="border: 2px solid black;">
            <thead>
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </thead>
            <tbody>
                <?php
                    for($in=0;$in<5;$in++){
                        echo "<tr>";
                        echo "<td>$b[$in]</td>";
                        echo "<td>$i[$in]</td>";
                        echo "<td>$n[$in]</td>";
                        echo "<td>$g[$in]</td>";
                        echo "<td>$o[$in]</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>