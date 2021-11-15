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
    <link rel="icon" type="image/x-icon" href="/assets/img/teacher.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>
    <?php require_once '../assets/partials/header.php'; ?>
    <section class="text-center title">
        <h1>Cadastrar Horário de Professores</h1>
    </section>
    <main class="container mt-5">
        <form action="action.php" method="post">
            <label for="codProf"><span class="required">*</span> Código do(a) professor(a):</label>
            <input type="text" id="codProf" name="codProf" placeholder="Digite o código de professor" required autofocus>
            <br><br>
            <label for="nomeProf"><span class="required">*</span> Nome do(a) professor(a):</label>
            <input type="text" id="nomeProf" name="nomeProf" placeholder="Nome do(a) professor(a)" required>
            <br><br>
            <table class="table table-striped table-bordered">
                <tr>
                    <th></th>
                    <th>Nome da disciplina</th>
                    <th>Matutino</th>
                    <th>Nome da disciplina</th>
                    <th>Noturno</th>
                </tr>
                <tr>
                    <td>
                        <label for="segM">Segunda-feira</label>
                    </td>
                    <td>
                        <input type="text" id="discSegM" name="discSegM" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="segM" name="segM" placeholder="Turmas, curso e campus">
                    </td>
                    <td>
                        <input type="text" id="discSegN" name="discSegN" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="segN" name="segN" placeholder="Turmas, curso e campus">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="terM">Terça-feira</label>
                    </td>
                    <td>
                        <input type="text" id="discTerM" name="discTerM" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="terM" name="terM" placeholder="Turmas, curso e campus">
                    </td>
                    <td>
                        <input type="text" id="discTerN" name="discTerN" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="terN" name="terN" placeholder="Turmas, curso e campus">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quaM">Quarta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="discQuaM" name="discQuaM" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="quaM" name="quaM" placeholder="Turmas, curso e campus">
                    </td>
                    <td>
                        <input type="text" id="discQuaN" name="discQuaN" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="quaN" name="quaN" placeholder="Turmas, curso e campus">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="quiM">Quinta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="discQuiM" name="discQuiM" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="quiM" name="quiM" placeholder="Turmas, curso e campus">
                    </td>
                    <td>
                        <input type="text" id="discQuiN" name="discQuiN" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="quiN" name="quiN" placeholder="Turmas, curso e campus">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexM">Sexta-feira</label>
                    </td>
                    <td>
                        <input type="text" id="discSexM" name="discSexM" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="sexM" name="sexM" placeholder="Turmas, curso e campus">
                    </td>
                    <td>
                        <input type="text" id="discSexN" name="discSexN" placeholder="Iniciais da disciplina">
                    </td>
                    <td>
                        <input type="text" id="sexN" name="sexN" placeholder="Turmas, curso e campus">
                    </td>
                </tr>
            </table>
            <?php
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <br><br>
            <div class="text-center mb-5">
                <button type="submit" class="btn-register">Cadastrar</button>
            </div>
        </form>
    </main>
    <?php require_once '../assets/partials/footer.php'; ?>
</body>

</html>