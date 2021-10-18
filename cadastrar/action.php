<?php
    session_start();
    include_once "../connection.php";

    if(!empty($_POST["codProf"]) && !empty($_POST["nomeProf"]) && is_numeric($_POST["codProf"])) {
        $codProf = $_POST["codProf"];
        $nomeProf = trim($_POST["nomeProf"]);
        $segM = trim($_POST["segM"]);
        $segN = trim($_POST["segN"]);
        $terM = trim($_POST["terM"]);
        $terN = trim($_POST["terN"]);
        $quaM = trim($_POST["quaM"]);
        $quaN = trim($_POST["quaN"]);
        $quiM = trim($_POST["quiM"]);
        $quiN = trim($_POST["quiN"]);
        $sexM = trim($_POST["sexM"]);
        $sexN = trim($_POST["sexN"]);

        $sql = "INSERT INTO horarios(codProf, nomeProf, segM, segN, terM, terN, quaM, quaN, quiM, quiN, sexM, sexN) VALUES ('$codProf', '$nomeProf', '$segM', '$segN', '$terM', '$terN', '$quaM', '$quaN', '$quiM', '$quiN', '$sexM', '$sexN')";

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