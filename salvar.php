<?php
$dados = json_decode(file_get_contents("dados.json"), 
true);

if (!is_array($dados)){
    $dados = [];
}

$novoDado = [
    "nome" => $_POST["nome"],
    "idade" => $_POST["idade"]
];

$dados [] = $novoDado;
file_put_contents("dados.json" , json_encode($dados, 
JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso! <a href='index.
php'>Voltar <a/>";
?>