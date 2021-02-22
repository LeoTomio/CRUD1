<?php
require './Modelo/Pessoa.php';

$callClass = new Pessoa();

$codigo = $_GET['codigo'];

$callClass->alterar($nome, $idade, $cpf, $telefone, $sexo, $endereco, $codigo);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src='js/jquery.mask.js' ></script>

    </head>
    <body>

        <?php
        //Envia os codigos pro Pessoa.php
        $callClass = new Pessoa();

        if (isset($_POST['alterar'])) {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $endereco = $_POST['endereco'];

            $callClass->alterar($nome, $idade, $cpf, $telefone, $sexo, $endereco);
        }
        ?>

        <form method="post">
            <table>
                <tr>
                    <td>Nome</td>
                    <td align="center" id="cad">
                        <input id="nome" class='campo' type="text" name="nome" placeholder="Nome">
                    </td>
                </tr>
                <tr>
                    <td>Idade</td>
                    <td align="center">
                        <input id="idade" class='campo' type="text"  name="idade" placeholder="idade">
                    </td>
                </tr>
                <tr>
                    <td>Cpf</td>
                    <td align="center">
                        <input id="cpf" class='campo' type="text"  name="cpf"  placeholder="Cpf">
                    </td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td align="center">
                        <input id="telefone" class='campo' type="text"  name="telefone" placeholder="Telefone">
                    </td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td align="center">
                        <input id="sexo" class='campo' type="text"  name="sexo" placeholder="Sexo">
                    </td>
                </tr>
                <tr>
                    <td>Endereco</td>
                    <td align="center">
                        <input id="endereco" class='campo' type="text"  name="endereco" placeholder="Endereço">
                    </td>
                </tr>
            </table>
            <button type="submit" id="botao"  name="alterar">Alterar</button>

        </form>

        <br><br>
         <table border="5" >
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Cpf</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Acao</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios = $callClass->alterar();
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
                            <?= $usuario["telefone"] ?>
                        </td>
                        <td>
                            <?= $usuario["sexo"] ?>
                        </td>
                        <td>
                            <?= $usuario["endereco"] ?>
                        </td>
                        <td>
                            
                            //
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
