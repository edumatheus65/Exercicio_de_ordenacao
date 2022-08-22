<?php

include_once("conection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  

        if(isset($_GET['ordem']) && empty($_GET['ordem']) == false) {

            $ordem = addslashes($_GET['ordem']);

            $sql = "SELECT * FROM usuarios ORDER BY ".$ordem;


        } else {

            $ordem = '';
            $sql = "SELECT * FROM usuarios";
        } 



    ?>

    <form action="" method="GET">

        <select name="ordem" onchange="this.form.submit()">
            <option value=""></option>
            <option value="nome" <?php echo ($ordem == "nome")?'selected="selected"':''; ?>>Pelo Nome</option>
            <option value="idade" <?php echo ($ordem == "idade")?'selected="selected"':''; ?>>Pala idade</option>
        </select>

    </form>

    <table border="1" width="400">

        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>


        <?php            


        
        $sql = $conn->query($sql);
        if($sql->rowCount() > 0) {

            foreach($sql->fetchAll() as $usuario):
                ?>
    
                <tr>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['idade']; ?></td>
                </tr>
    
                <?php
            endforeach;
    
        }
        ?>
    
    </table>
    
</body>
</html>