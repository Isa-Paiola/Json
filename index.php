<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>

</head>
<body>
    <h2>Cadastro de Usuários</h2>
    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome" 
        required> <br><br>
        Idade: <input type="number" name="idade"
        required> <br><br>
        <button type="submit">Salvar</button>
    </form>

    <h2>Usuarios Cadastrados</h2>
    <ul>
        <?php
        $dados = json_decode(file_get_contents
        ("dados.json"), true);

        if(!empty ($dados)) {
            foreach($dados as $usuario) {
                echo "<li>{$usuario['nome']} - {$usuario
                ['idade']} anos </li>";
            }
         } else {
            echo "<li> nenhum usuário cadastrado ainda. </li>";
         }
        ?>
    </ul>
    
</body>
</html>