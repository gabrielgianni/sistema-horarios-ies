<?php
    session_start();
    include_once "../connection.php";

    if(!empty($_POST["codProf"]) && !empty($_POST["nomeProf"]) && is_numeric($_POST["codProf"])) {
        $codProf = $_POST["codProf"];
        $nomeProf = trim($_POST["nomeProf"]);
        $discSegM = trim($_POST["discSegM"]);
        $segM = trim($_POST["segM"]);
        $discSegN = trim($_POST["discSegN"]);
        $segN = trim($_POST["segN"]);
        $discTerM = trim($_POST["discTerM"]);
        $terM = trim($_POST["terM"]);
        $discTerN = trim($_POST["discTerN"]);
        $terN = trim($_POST["terN"]);
        $discQuaM = trim($_POST["discQuaM"]);
        $quaM = trim($_POST["quaM"]);
        $discQuaN = trim($_POST["discQuaN"]);
        $quaN = trim($_POST["quaN"]);
        $discQuiM = trim($_POST["discQuiM"]);
        $quiM = trim($_POST["quiM"]);
        $discQuiN = trim($_POST["discQuiN"]);
        $quiN = trim($_POST["quiN"]);
        $discSexM = trim($_POST["discSexM"]);
        $sexM = trim($_POST["sexM"]);
        $discSexN = trim($_POST["discSexN"]);
        $sexN = trim($_POST["sexN"]);

        $sql = "INSERT INTO horarios(codProf, nomeProf, discSegM, segM, discSegN, segN, discTerM, terM, discTerN, terN, discQuaM, quaM, discQuaN, quaN, discQuiM, quiM, discQuiN, quiN, discSexM, sexM, discSexN, sexN) VALUES ('$codProf', '$nomeProf', '$discSegM', '$segM', '$discSegN', '$segN', '$discTerM', '$terM', '$discTerN', '$terN', '$discQuaM', '$quaM', '$discQuaN', '$quaN', '$discQuiM', '$quiM', '$discQuiN', '$quiN', '$discSexM', '$sexM', '$discSexN', '$sexN')";

        if(mysqli_query($conn, $sql)) {
            $_SESSION['msg'] = "<span style='color:green;'>Professor cadastrado com sucesso.</span>";
            header("Location: ../cadastrar"); // Retorna para o ../cadastrar/index.php
        } else {
            $_SESSION['msg'] = "<span style='color:red;'>Erro ao cadastrar professor.</span>";
            header("Location: ../cadastrar");
        }
        mysqli_close($conn);
    } else {
        $_SESSION['msg'] = "<span style='color:red;'>O código do professor deve ser apenas números.</span>";
        header("Location: ../cadastrar");
    }
?>