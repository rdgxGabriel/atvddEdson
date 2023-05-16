<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade prática - 16-05-2023</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <form name="atvdd.php" method="post" action="atvdd.php">
        <table>
            <tr>
                <caption> Login JOGOS WuW</caption><br>

                <br><td><label for="nome">Nome:</label></td>
                <td><input type="text" name="nome" size="40" maxlength="50" required
                        placeholder="Informe o seu nome"></td>
            </tr>

            <tr>
                <td><label for="cpf">CPF: </label></td>
                <td><input type="text" name="cpf" required size="14" maxlength="14"></td>
            </tr>
            <tr>
                <td><label for="data_nascimento">Data de Nascimento:</label></td>
                <td><input type="date" name="data_nascimento" required></label>
            </tr>
            <tr>
                <td><label for="estado">Estado:</td>
                <td>
                    <select name="estado">
                        <option value="#"></option>
                        <option value="acre">AC</option>
                        <option value="alagoas">AL</option>
                        <option value="amapa">AP</option>
                        <option value="amazonas">AM</option>
                        <option value="bahia">BA</option>
                        <option value="ceara">CE</option>
                        <option value="destritofederal">DF</option>
                        <option value="espiritosanto">ES</option>
                        <option value="goias">GO</option>
                        <option value="maranhao">MA</option>
                        <option value="matogrosso">MT</option>
                        <option value="matogrossosul">MS</option>
                        <option value="minas">MG</option>
                        <option value="para">PA</option>
                        <option value="paraiba">PB</option>
                        <option value="parana">PR</option>
                        <option value="pernambuco">PE</option>
                        <option value="piaui">PI</option>
                        <option value="roraima">RR</option>
                        <option value="rondonia">RO</option>
                        <option value="riodejaneiro">RJ</option>
                        <option value="riograndedonorte">RN</option>
                        <option value="riograndedosul">RS</option>
                        <option value="santacatarina">SC</option>
                        <option value="sãopaulo">SP</option>
                        <option value="sergipe">SE</option>
                        <option value="tocantins">TO</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="telefone">Telefone para contato:</label></td>
                <td><input type="text" name="telefone" size="30" maxlength="25" required
                        placeholder="Informe o numero de seu telefone: "></td>
            </tr>
            <tr>
                <td><label for="username">NickName:</label></td>
                <td><input type="text" name="username" size="30" maxlength="25" required
                        placeholder="Informe o seu username: "></td>
            </tr>
            <tr>
            <tr>
                <td colspan="2" align ="center">
                    <input type="submit" value="cadastrar" name="cadastrar" class="botao">
                </td>
            </tr>
            </table>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $data_nascimento = $_POST['data_nascimento'];
                $estado = $_POST['estado'];
                $telefone = $_POST['telefone'];
                $username = $_POST['username'];
            
                echo '<table>';
                    echo '<tr><td>Nome:</td><td>' . $nome . '</td></tr>';
                    echo '<tr><td>CPF:</td><td>' . $cpf . '</td></tr>';
                    echo '<tr><td>Data de nascimento:</td><td>' . $data_nascimento . '</td></tr>';
                    echo '<tr><td>Estado:</td><td>' . $estado . '</td></tr>';
                    echo '<tr><td>Telefone:</td><td>' . $telefone . '</td></tr>';
                    echo '<tr><td>NickName:</td><td>' . $username . '</td></tr>';
                echo '</table>';

            }

        ?>
    </form>
</body>

</html>