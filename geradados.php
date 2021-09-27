<?php


//PARA RODAR O PROJETORUI P ESTUDAR
//ABRIR O TERMINAL
// usar o comando >>>> php -S localhost:8000
//para parar o servidor é só dar um control+c


// IMPORTANTE
$tarefas = [];
// $tarefas[] = 'eu sou o melhor do mundo';
// $tarefas[] = 'eu sou sim o melhor do mundo';
// $tarefas[] = 'Tenho O melhor preparador do mundo';
// array_push($tarefas, 'vou ganhar esse jogo');
// $tarefas[] = 'GOL de bicileta';
// $tarefas[] = 'O MELHOR GOL DO MUNDO';



//concatenar (somar adicionar) uma informação em um array que já existe sem perder os dados antigos
// array_push($tarefas, 'Fazer Gols'); //push é empurrar, empurra um dado novo no array.

/*
entrada
(recebe, processa, devolve)
saída
*/

for ($i = 0; $i < 100; $i++ ) {
    echo $i."<br>";
 }

echo "quantas posicoes tem meu array?<br><br>";

$quantidadeDeTarefas = count($tarefas); //$quantidadeDeTarefas = 5 
echo $quantidadeDeTarefas." posições!<br>";

 for ($i=0; $i < $quantidadeDeTarefas; $i++) { 
    echo $tarefas[$i];
    echo "<br>".$i."<br>";
    echo $tarefas[$i];
}



//IMPORTANTE




//não se preocupar muito com essa parte de baixo. ela só serve para guardar o dado no arquivo para usar depois
$dadosParaGuardar = json_encode($tarefas);
file_put_contents('dados.json', $dadosParaGuardar);

echo "arquivo gerado com sucesso!";
echo 'Esse Arquivo Foi executado <br><br>' ;