<?php

function geraProximoId($tarefas){
    $maximoID = 1;
    if($tarefas == null) {
        return $maximoID;
    }
    for ($i=0; $i < count($tarefas); $i++) {
        if($maximoID < $tarefas[$i]['id']) {
            $maximoID = $tarefas[$i]['id'];
        }
    }
    $maximoID = $maximoID + 1;
    return $maximoID;
}

$tarefasJson = file_get_contents('dados.json'); //ele le os dados do dados.json

$tarefas = json_decode($tarefasJson, true); // ele decodifica o $tarefas , transformando em um array 

$novaTarefa = [
    'id' => geraProximoId($tarefas),
    'descricao' => $_POST['descricao']
];

$tarefas[] = $novaTarefa; // ele adiciona a descrição na lista de tarefas

$tarefasJson = json_encode($tarefas); // ele codifica as tarefas em uma string 

file_put_contents('dados.json', $tarefasJson); // ele grava os dados no  dados.json
 
header('Location:index.php');// ele volta para a localização index.php