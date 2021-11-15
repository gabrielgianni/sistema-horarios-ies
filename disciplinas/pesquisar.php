<?php
    include_once "../connection.php";
    $disciplina = mb_strtoupper(trim($_POST['disciplina']), "UTF-8");
    $result_disciplinas = "SELECT * FROM horarios WHERE CONCAT(discSegM, discSegN, discTerM, discTerN, discQuaM, discQuaN, discQuiM, discQuiN, discSexM, discSexN) LIKE '%$disciplina%'";

    $result = mysqli_query($conn, $result_disciplinas);

    $numRegistros = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da pesquisa: <?php echo $disciplina; ?> - UniTime</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/teacher.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
</head>
<body>
    <?php require_once '../assets/partials/header.php'; ?>
    <section class="text-center title">
        <h1>Horário de Disciplinas</h1>
    </section>
    <main class="container mt-5">
        <?php
        echo "<p class='fw-bold'>Ofertas da disciplina: " . $disciplina . "</p>";
        if ($numRegistros != 0) {
            while ($linha = mysqli_fetch_array($result)) {
                echo "<p>Segunda, manhã, " . $linha['discSegM'] . " " . $linha['segM'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Segunda, noite, " . $linha['discSegN'] . " " . $linha['segN'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Terça, manhã, " . $linha['discTerM'] . " " . $linha['terM'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Terça, noite, " . $linha['discTerN'] . " " . $linha['terN'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Quarta, manhã, " . $linha['discQuaM'] . " " . $linha['quaM'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Quarta, noite, " . $linha['discQuaN'] . " " . $linha['quaN'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Quinta, manhã, " . $linha['discQuiM'] . " " . $linha['quiM'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Quarta, noite, " . $linha['discQuiN'] . " " . $linha['quiN'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Sexta, manhã, " . $linha['discSexM'] . " " . $linha['sexM'] . ", prof.: " . $linha['nomeProf'] . "</p>";
                echo "<p>Sexta, noite, " . $linha['discSexN'] . " " . $linha['sexN'] . ", prof.: " . $linha['nomeProf'] . "</p><br>";
            }
        } else {
            echo "Nenhuma disciplina foi encontrada com a palavra " . $disciplina . "";
        }
        ?>
    </main>
    <?php require_once '../assets/partials/footer.php'; ?>
</body>
</html>