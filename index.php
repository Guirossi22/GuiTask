<?php
$tarefasJson = file_get_contents('dados.json');
$tarefas = json_decode($tarefasJson,true);
if($tarefas == null) {
    $tarefas = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>
<body>

    <form action="insereTarefa.php" method="POST" class="box">
        Descricao<br>
        <input type="text" name="descricao" placeholder="digite a descricao">
        <br><br>
        <input class="btn" type="submit" value="Criar!">
    </form>

    <hr>
    
    <?php
        for ($i=0; $i < count($tarefas); $i++) { 
            if(isset($tarefas[$i])) {
                echo "<div class='box'>";
                echo "<a class='btn' href='excluir.php?tarefa=" . $tarefas[$i]['id'] . " '>Excluir</a> ";
                echo $tarefas[$i]['id'] . " - " . $tarefas[$i]['descricao'];
                echo "</div>";
            }
        }
    ?>
    <img src="https://uploads.metropoles.com/wp-content/uploads/2021/08/26103546/GettyImages-1335692640-600x400.jpg">
    <img src="https://s2.glbimg.com/4jwtZtzwWhrUMxAH0_uW7b_Jqt8=/0x782:2394x2256/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/9/D/LSfNq1Q7GSqhjeh0AyzA/gettyimages-85991493.jpg">
 
</body>
</html>