<?php
require './Modelo/Pessoa.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="css/css.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src='js/jquery.mask.js' ></script>

    </head>
    <body>

        <?php
        //Envia os codigos pro Pessoa.php
        $callClass = new Pessoa();

        if (isset($_POST['cadastrar'])) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $endereco = $_POST['endereco'];

            $callClass->inserir($nome, $idade, $cpf, $telefone, $sexo, $endereco);
        }
        ?>

        <form method="post">
            <table>
                <tr>
                    <td>Nome</td>
                    <td align="center" id="cad">
                        <input id="nome" class='campo' type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <td>Idade</td>
                    <td align="center">
                        <input id="idade" class='campo' type="text"  name="idade" >
                    </td>
                </tr>
                <tr>
                    <td>Cpf</td>
                    <td align="center">
                        <input id="cpf" class='campo' type="text"  name="cpf" size="20" width="50px" height="50px">
                    </td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td align="center">
                        <input id="telefone" class='campo' type="text"  name="telefone">
                    </td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td align="center">
                        <input id="sexo" class='campo' type="text"  name="sexo" >
                    </td>
                </tr>
                <tr>
                    <td>Endereco</td>
                    <td align="center">
                        <input id="endereco" class='campo' type="text"  name="endereco" >
                    </td>
                </tr>
            </table>
            <button type="submit" name="cadastrar">Cadastrar</button>

        </form>

        <br><br>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Cpf</th>
                    <th>Acao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios = $callClass->ler();
                foreach ($usuarios as $usuario):
                    ?>
                    <tr>  
                        <td>
                            <?= $usuario["nome"] ?>
                        </td>
                        <td>
                            <?= $usuario["idade"] ?>
                        </td>
                        <td>
                            <?= $usuario["cpf"] ?>
                        </td>
                        <td>
                            <a href="excluir.php?codigo=<?= $usuario['codigo'] ?>">Deletar</a>
                            <a href="alterar.php?codigo=<?= $usuario['codigo'] ?>">Alterar</a>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
        
        <script>
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.telefone').mask('(00) 0000-0000');
        </script>
        





    </body>
</html>
