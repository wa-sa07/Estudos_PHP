<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <main>  
       <h1> Trabalhando com números aleatórios</h1>
    <?php 
    //sorteando número entre mínimo e máximo..
    
    $min = 0;
    $max = 100;
    
    $num = mt_rand($min, $max);
    // rand() = 1951 - linear congretial Gerador
    // mais usada antes da versão 7 e mais lentas
    // funçao atualizada  nt_rand() = 1997 - Mersenne Twister
    // menor número no minimo maior número no máximo
    // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    // random_int() gera números aleatórios criptograficamente seguros
    // usado para se vc geradção de hashs, senha , segurança caso trabalhe com números seguros 
    // o algoritmo mais lento, não usar a não ser que seja necessário criar um número criptograficamente seguro
    
    
    echo "<p>Gerando um número aleatório entre $min e $max... <br> O valor
    gerado foi <strong>$num</strong></p>"; // \n para quebrar linhas
    
    
    ?> 

   </main>
</body>
</html>