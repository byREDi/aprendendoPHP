<?php


$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

$valorGasolina = 4.80;
$valorAlcool = 3.80;
$valorDiesel = 3.90;

$calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
$calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
$calculoDiesel = ($distancia / $autonomia) * $valorDiesel;

echo "O valor do consumo em reais foi de: R$ ".$calculoGasolina;
echo "O valor do consumo em reais foi de: R$ ".$calculoAlcool;
echo "O valor do consumo em reais foi de: R$ ".$calculoDiesel;

//<!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
    
//     <main>
//         <div class="painel">
//             <h2>Resultado do cálculo de consumo</h2>
//             <div class="conteudo-painel">
//                 <?php
//                 echo $mensagem;
//                 
//                 <a href="index.php" class="botao">Voltar</a>
//             </div>
//         </div>
//     </main>

// </body>
// </html>