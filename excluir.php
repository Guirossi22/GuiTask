<?php

$tarefasJson = file_get_contents('dados.json');
$tarefas = json_decode($tarefasJson, true);

$tarefaAExcluir = $_GET ['tarefa']; // $_GET é o array "Global" que traz todos os parametros da requisição GET (incluindo queryString)              
//print_r($tarefas[3][""]);

for ($i=0; $i < count($tarefas); $i++) { //passando/passeando/iterando 
    if(isset($tarefas[$i] )) {
        if($tarefaAExcluir == $tarefas[$i]["id"]){
            //aqui eu vou excluir
            unset ($tarefas[$i]);
            break; 
        }
        
    }
}

$tarefas = array_values($tarefas);

$tarefasJson = json_encode($tarefas);
file_put_contents('dados.json', $tarefasJson);

header('Location:index.php');
