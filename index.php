<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="css/css.css"/>
    </head>
    <body>

        
        
        
        <form name="cadastro" action="inserir.php" method="post">
            <table >
                <tr>
                    <td>Nome</td>
                    <td align="center" id="cad">
                        <input id="campo" type="text" name="nome">
                    </td>
                </tr>
                <tr>
                    <td>Idade</td>
                    <td align="center">
                        <input id="idade" type="text"  name="idade" size="20" width="50px" height="50px">
                    </td>
                </tr>
                 <tr>
                    <td>Cpf</td>
                    <td align="center">
                        <input id="campo" type="text"  name="cpf" size="20" width="50px" height="50px">
                    </td>
                </tr>
                 <tr>
                    <td>Telefone</td>
                    <td align="center">
                        <input id="campo" type="text"  name="telefone" size="20" width="50px" height="50px">
                    </td>
                </tr>
                 <tr>
                    <td>Sexo</td>
                    <td align="center">
                        <input id="campo" type="text"  name="sexo" size="20" width="50px" height="50px">
                    </td>
                </tr>
                 <tr>
                    <td>Endereco</td>
                    <td align="center">
                        <input id="campo" type="text"  name="endereco" size="20" width="50px" height="50px">
                    </td>
                </tr>
            </table>
            <button type="submit" name="cadastrar">Cadastrar</button>

        </form>
    </body>
</html>
