<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário de Professores</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/teacher.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- CSS library -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<?php
    include_once '../connection.php';

    $resultado ="";
    $str = "";
    if (mysqli_connect_errno())
        $resultado = "Erro de conexão com o BD: " . mysqli_connect_error() . ". ";

    $sqlres = mysqli_query($conn, "SELECT * FROM horarios ORDER BY nomeProf ASC");
    if($sqlres == false) {
        $resultado = "Erro ao tentar listar disciplinas.";
    } else {
        mysqli_select_db($conn, $dbname);
        $dados = mysqli_query($conn,"SELECT * FROM horarios ORDER BY nomeProf ASC");
        $linha = mysqli_fetch_assoc($dados);
        $total = mysqli_num_rows($dados);
        if($total > 0) {
            do {
                $str .= "<p class='fw-bold'>Código do(a) professor(a): " . $linha['codProf'] . "</p>"; 
                $str .= "<p class='fw-bold'>Nome do(a) professor(a): " . $linha['nomeProf'] . "</p>";
                $str .= "<fieldset>
                            <div class='table-responsive'>
                                <table class='table table-striped table-hover table-bordered'>
                                    <tr>
                                        <th></th>
                                        <th>Nome da disciplina</th>
                                        <th>Matutino</th>
                                        <th>Nome da disciplina</th>
                                        <th>Noturno</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class='fw-bold'>Segunda-feira</label>
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discSegM']}
                                        </td>
                                        <td>
                                            {$linha['segM']}
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discSegN']}
                                        </td>
                                        <td>
                                            {$linha['segN']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class='fw-bold'>Terça-feira</label>
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discTerM']}
                                        </td>
                                        <td>
                                            {$linha['terM']}
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discTerN']}
                                        </td>
                                        <td>
                                            {$linha['terN']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class='fw-bold'>Quarta-feira</label>
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discQuaM']}
                                        </td>
                                        <td>
                                            {$linha['quaM']}
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discQuaN']}
                                        </td>
                                        <td>
                                            {$linha['quaN']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class='fw-bold'>Quinta-feira</label>
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discQuiM']}
                                        </td>
                                        <td>
                                            {$linha['quiM']}
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discQuiN']}
                                        </td>
                                        <td>
                                            {$linha['quiN']}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class='fw-bold'>Sexta-feira</label>
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discSexM']}
                                        </td>
                                        <td>
                                            {$linha['sexM']}
                                        </td>
                                        <td class='fw-bold'>
                                            {$linha['discSexN']}
                                        </td>
                                        <td>
                                            {$linha['sexN']}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset><br>
                        <hr>
                        <br>";
            } while($linha = mysqli_fetch_assoc($dados));
        }
        mysqli_free_result($dados);
 }
?>
<body>
    <?php require_once '../assets/partials/header.php'; ?>
    <section class="text-center title">
        <h1>Lista de Horário de Professores</h1>
    </section>
    <main class="container mt-5">
        <?php
            echo $resultado . $str;
        ?>
    </main>
    <?php require_once '../assets/partials/footer.php'; ?>
</body>
</html>