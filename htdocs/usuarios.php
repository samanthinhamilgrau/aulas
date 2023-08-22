<?php

    try {
        $conectar = new PDO("sqlite:banco/banco_biblioteca.db");

        $sql = $conectar->query("SELECT * FROM tb_usuario");

        $tb_usuario = $sql->fetchAll(PDO::FETCH_ASSOC);

    //    for($i = 0; $i < count($tb_usuario); $i++){
    //     echo "Matricula: " . $tb_usuario[$i]['matricula'];
    //     echo "Nome:" . $tb_usuario[$i]['nome'];
    //     echo "telefone:" . $tb_usuario[$i]['telefone'];
    //     echo "<br>";
    //    }

    //     echo"ok";
    } catch (\Throwable $th) {
        echo "nao ok";
    }



?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=MuseoModerno&display=swap" rel="stylesheet">

    <title>Biblioteca Municipal</title>

</head>

<body>
    
    <header>
    
       <img src="/img/Biblioteca-Banner.png" alt="Biblioteca-Banner">
       
       <nav class="menu">

            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="usuarios.php">Usuario</a></li>
                <li><a href="livro.php">Livro</a></li>
                <li><a href="#">emprestimo</a></li>
            </ul>

       </nav>

    </header>

    <main>

    <div class="cadastro">
        <h2>Cadastro de usuario</h2>

        <form action="usuario_cadastro.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="Telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">

            <label for="Cep">CEP</label>
            <input type="text" name="cep" id="cep">

            <label for="Rua">Rua</label>
            <input type="text" name="rua" id="rua">

            <label for="Numero">Numero</label>
            <input type="text" name="numero" id="numero">

            <label for="Complemento">Complemento</label>
            <input type="text" name="complemento" id="complemento">

            <label for="Bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro">
            
            <label for="Cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade">

            <label for="Estado">Estado</label>
            <input type="text" name="estado" id="estado">

            <div class="botoes">
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </div>
        </form>

    </div>

    <div class="consulta">
        <h2>Consulta de usuarios</h2>

        <table>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Opçoes</th>
            </tr>

            <?php
             for($i = 0; $i < count($tb_usuario); $i++){
                echo "<tr>";
                echo "<td>" . $tb_usuario[$i]['matricula'] . "</td>";
                echo "<td>" . $tb_usuario[$i]['nome'] . "</td>";
                echo "<td>" . $tb_usuario[$i]['telefone'] . "</td>";
                echo "<td> <a href='#'>vizualizar</a> <a href='#'>Excluir</a> </td>" ;
                echo "</tr>";
            }
            ?>

        </table>
    </div>
    
    </main>

</body>
</html>