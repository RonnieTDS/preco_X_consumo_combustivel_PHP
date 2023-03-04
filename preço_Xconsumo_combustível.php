  <!DOCTYPE html>
<html>
    <head>
        <title>Custo Combustivel</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>Preço 1:</td>
                    <td><input type="text" name="preco1"></td>
                </tr>
                <tr>
                    <td>Consumo 1:</td>
                    <td><input type="text" name="consumo1"></td>
                </tr>
                <tr>
                    <td>Preço 2:</td>
                    <td><input type="text" name="preco2"></td>
                </tr>                
                <tr>
                    <td>Consumo 2:</td>
                    <td><input type="text" name="consumo2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    

    $preco1  = $_POST["preco1"];
    $consumo1 = $_POST["consumo1"];
    $postoA = $preco1/$consumo1;

    

    $preco2  = $_POST["preco2"];
    $consumo2 = $_POST["consumo2"];
    $postoB = $preco2/$consumo2;

    echo "<br>Preço do posto A: ".$postoA."<br>";
    echo "<br>Preço do posto B: ".$postoB."<br>";


    if ($preco1>$preco2)
    {
        echo "<br>Abasteça no posto A!";
    }
    if ($preco1<$preco2)
    {
        echo"<br>Abasteça no posto B!";

    }


   

    echo "<br>";

   
}
?>