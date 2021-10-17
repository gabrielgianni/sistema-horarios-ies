<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Horário de Professores</title>
</head>

<body>
    <h1>Cadastrar Horário de Professores</h1>

    <form action="action.php" method="post">
        <label for="codProf">Código do(a) professor(a): <span class="required">*</span></label>
        <br>
        <input type="text" id="codProf" name="codProf" placeholder="Digite o código de professor" required autofocus>
        <br>
        <label for="nomeProf">Nome do(a) professor(a): <span class="required">*</span></label>
        <br>
        <input type="text" id="nomeProf" name="nomeProf" placeholder="Nome do(a) professor(a)" required>
        <br>
        <fieldset>
            <table>
                <tr>
                    <th></th>
                    <th>Matutino</th>
                    <th>Noturno</th>
                </tr>
                <tr>
                    <td>
                        <label for="segM">Segunda-feira</label>
                    </td>
                    <td>
                        <input type="text" id="segM" name="segM">
                    </td>
                    <td>
                        <input type="text" id="segN" name="segN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="terM">Terça-feira</label>
                    </td>
                    <td>
                        <input type="text" id="terM" name="terM">
                    </td>
                    <td>
                        <input type="text" id="terN" name="terN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quaM">Quarta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="quaM" name="quaM">
                    </td>
                    <td>
                        <input type="text" id="quaN" name="quaN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quiM">Quinta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="quiM" name="quiM">
                    </td>
                    <td>
                        <input type="text" id="quiN" name="quiN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexM">Sexta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="sexM" name="sexM">
                    </td>
                    <td>
                        <input type="text" id="sexN" name="sexN">
                    </td>
                </tr>
            </table>
            <br>
            <?php
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </fieldset>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    
</body>

</html>