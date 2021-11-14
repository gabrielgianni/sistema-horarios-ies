<?php
session_start();
include_once "../connection.php";

mysqli_set_charset($conn, "utf8");

if (!empty($_POST["codProf"]) && !empty($_POST["nomeProf"]) && is_numeric($_POST["codProf"])) {
    $codProf = $_POST["codProf"];
    $nomeProf = trim($_POST["nomeProf"]);
    $discSegM = mb_strtoupper(trim($_POST["discSegM"]), "UTF-8");
    $segM = trim($_POST["segM"]);
    $discSegN = mb_strtoupper(trim($_POST["discSegN"]), "UTF-8");
    $segN = trim($_POST["segN"]);
    $discTerM = mb_strtoupper(trim($_POST["discTerM"]), "UTF-8");
    $terM = trim($_POST["terM"]);
    $discTerN = mb_strtoupper(trim($_POST["discTerN"]), "UTF-8");
    $terN = trim($_POST["terN"]);
    $discQuaM = mb_strtoupper(trim($_POST["discQuaM"]), "UTF-8");
    $quaM = trim($_POST["quaM"]);
    $discQuaN = mb_strtoupper(trim($_POST["discQuaN"]), "UTF-8");
    $quaN = trim($_POST["quaN"]);
    $discQuiM = mb_strtoupper(trim($_POST["discQuiM"]), "UTF-8");
    $quiM = trim($_POST["quiM"]);
    $discQuiN = mb_strtoupper(trim($_POST["discQuiN"]), "UTF-8");
    $quiN = trim($_POST["quiN"]);
    $discSexM = mb_strtoupper(trim($_POST["discSexM"]), "UTF-8");
    $sexM = trim($_POST["sexM"]);
    $discSexN = mb_strtoupper(trim($_POST["discSexN"]), "UTF-8");
    $sexN = trim($_POST["sexN"]);

    // Conta quantas linhas contém com o codProf passado.
    $query = mysqli_query($conn, "SELECT 0 FROM horarios WHERE codProf='$codProf'");
    $rows = mysqli_num_rows($query);

    // Se existe ($rowns == true) uma linha com o codProf (ou seja, se $rowns é ≠ de falso) atualiza dados no BD.
    if ($rows != false) {
        $sql = "UPDATE horarios
            SET nomeProf = '$nomeProf',
                discSegM = '$discSegM',
                segM = '$segM',
                discSegN = '$discSegN',
                segN = '$segN',
                discTerM = '$discTerM',
                terM = '$terM',
                discTerN = '$discTerN',
                terN = '$terN',
                discQuaM = '$discQuaM',
                quaM = '$quaM',
                discQuaN = '$discQuaN',
                quaN = '$quaN',
                discQuiM = '$discQuiM',
                quiM = '$quiM',
                discQuiN = '$discQuiN',
                quiN = '$quiN',
                discSexM = '$discSexM',
                sexM = '$sexM',
                discSexN = '$discSexN',
                sexN = '$sexN'
                WHERE codProf = '$codProf'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['msg'] = "<span style='color:green;'>Professor atualizado com sucesso.</span>";
            header("Location: ../cadastrar");
        } else {
            $_SESSION['msg'] = "<span style='color:red;'>Erro ao atualizar professor.</span>";
            header("Location: ../cadastrar");
        }
        mysqli_close($conn);
    } else {
        $sql = "INSERT INTO horarios(codProf, nomeProf, discSegM, segM, discSegN, segN, discTerM, terM, discTerN, terN, discQuaM, quaM, discQuaN, quaN, discQuiM, quiM, discQuiN, quiN, discSexM, sexM, discSexN, sexN) VALUES ('$codProf', '$nomeProf', '$discSegM', '$segM', '$discSegN', '$segN', '$discTerM', '$terM', '$discTerN', '$terN', '$discQuaM', '$quaM', '$discQuaN', '$quaN', '$discQuiM', '$quiM', '$discQuiN', '$quiN', '$discSexM', '$sexM', '$discSexN', '$sexN')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['msg'] = "<span style='color:green;'>Professor cadastrado com sucesso.</span>";
            header("Location: ../cadastrar"); // Retorna para o ../cadastrar/index.php
        } else {
            $_SESSION['msg'] = "<span style='color:red;'>Erro ao cadastrar professor.</span>";
            header("Location: ../cadastrar");
        }
        mysqli_close($conn);
    }
} else {
    $_SESSION['msg'] = "<span style='color:red;'>O código do professor deve ser apenas números.</span>";
    header("Location: ../cadastrar");
}