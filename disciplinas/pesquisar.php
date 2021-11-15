<?php
    include_once "../connection.php";

    $disciplina = mb_strtoupper(trim($_GET['disciplina']), "UTF-8");

    $result_disciplinas = "SELECT * FROM horarios WHERE CONCAT(discSegM, discSegN, discTerM, discTerN, discQuaM, discQuaN, discQuiM, discQuiN, discSexM, discSexN) LIKE '%$disciplina%'";

    $result = mysqli_query($conn, $result_disciplinas);

    $numRegistros = mysqli_num_rows($result);

    echo "Ofertas da disciplina: " . $disciplina . "<br><br>";
    if ($numRegistros != 0) {
        while($linha = mysqli_fetch_array($result)) {
            echo "Segunda, manhã, " . $linha['discSegM'] . " " . $linha['segM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Segunda, noite, " . $linha['discSegN'] . " " . $linha['segN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Terça, manhã, " . $linha['discTerM'] . " " . $linha['terM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Terça, noite, " . $linha['discTerN'] . " " . $linha['terN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Quarta, manhã, " . $linha['discQuaM'] . " " . $linha['quaM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Quarta, noite, " . $linha['discQuaN'] . " " . $linha['quaN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Quinta, manhã, " . $linha['discQuiM'] . " " . $linha['quiM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Quarta, noite, " . $linha['discQuiN'] . " " . $linha['quiN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Sexta, manhã, " . $linha['discSexM'] . " " . $linha['sexM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
            echo "Sexta, noite, " . $linha['discSexN'] . " " . $linha['sexN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
        }
    } else {
        echo "Nenhuma disciplina foi encontrada com a palavra ".$disciplina."";
    }
?>