<?php
    session_start();
    include_once "../connection.php";

    if(!empty($_POST["codProf"]) && !empty($_POST["nomeProf"]) && is_numeric($_POST["codProf"])) {
        $codProf = $_POST["codProf"];
        $nomeProf = $_POST["nomeProf"];
        $segM = $_POST["segM"];
        $segN = $_POST["segN"];
        $terM = $_POST["terM"];
        $terN = $_POST["terN"];
        $quaM = $_POST["quaM"];
        $quaN = $_POST["quaN"];
        $quiM = $_POST["quiM"];
        $quiN = $_POST["quiN"];
        $sexM = $_POST["sexM"];
        $sexN = $_POST["sexN"];

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