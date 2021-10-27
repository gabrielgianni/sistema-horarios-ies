<?php
    include_once "../connection.php";

    $disciplina = trim($_POST['disciplina']);

    $result_disciplinas = "SELECT * FROM horarios WHERE CONCAT(discSegM, discSegN, discTerM, discTerN, discQuaM, discQuaN, discQuiM, discQuiN, discSexM, discSexN) LIKE '$disciplina%'";

    $result = mysqli_query($conn, $result_disciplinas);

    echo "Ofertas da disciplina: " . $disciplina . "<br><br>";
    while($linha = mysqli_fetch_array($result)) {
        echo "Segunda, manhã, " . $linha['discSegM'] . " " . $linha['segM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
        echo "Segunda, noite, " . $linha['discSegN'] . " " . $linha['segN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
        echo "Terça, manhã, " . $linha['discTerM'] . " " . $linha['terM'] . ", prof.: " . $linha['nomeProf'] . "<br>";
        echo "Terça, noite, " . $linha['discTerN'] . " " . $linha['terN'] . ", prof.: " . $linha['nomeProf'] . "<br>";
    }
?>