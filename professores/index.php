<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário de Professores</title>
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
                $str .= "<p>Código do(a) professor(a): " . $linha['codProf'] . "</p>"; 
                $str .= "<p>Nome do(a) professor(a): " . $linha['nomeProf'] . "</p>";
                $str .= "<fieldset>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Nome da disciplina</th>
                                    <th>Matutino</th>
                                    <th>Nome da disciplina</th>
                                    <th>Noturno</th>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Segunda-feira</label>
                                    </td>
                                    <td>
                                        <input type='text' id='discSegM' name='discSegM' value='". $linha['discSegM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='segM' name='segM' value='". $linha['segM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='discSegN' name='discSegN' value='". $linha['discSegN'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='segN' name='segN' value='" . $linha['segN'] . "' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Terça-feira</label>
                                    </td>
                                    <td>
                                        <input type='text' id='discTerM' name='discTerM' value='". $linha['discTerM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='terM' name='terM' value='" . $linha['terM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='discTerN' name='discTerN' value='". $linha['discTerN'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='terN' name='terN' value='" . $linha['terN'] . "' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Quarta-feira</label>
                                    </td>
                                    <td>
                                        <input type='text' id='discQuaM' name='discQuaM' value='". $linha['discQuaM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='quaM' name='quaM' value='" . $linha['quaM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='discQuaN' name='discQuaN' value='". $linha['discQuaN'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='quaN' name='quaN' value='" . $linha['quaN'] . "' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Quinta-feira</label>
                                    </td>
                                    <td>
                                        <input type='text' id='discQuiM' name='discQuiM' value='". $linha['discQuiM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='quiM' name='quiM' value='" . $linha['quiM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='discQuiN' name='discQuiN' value='". $linha['discQuiN'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='quiN' name='quiN' value='" . $linha['quiN'] . "' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Sexta-feira</label>
                                    </td>
                                    <td>
                                        <input type='text' id='discSexM' name='discSexM' value='". $linha['discSexM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='sexM' name='sexM' value='" . $linha['sexM'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='discSexN' name='discSexN' value='". $linha['discSexN'] . "' readonly>
                                    </td>
                                    <td>
                                        <input type='text' id='sexN' name='sexN' value='" . $linha['sexN'] . "' readonly>
                                    </td>
                                </tr>
                            </table>
                        </fieldset><br>";
            } while($linha = mysqli_fetch_assoc($dados));
        }
        mysqli_free_result($dados);
 }
?>

<body>
    <h2>Lista de Horário de Professores</h2>
    <p>
    <?php
        echo $resultado . $str;
    ?>

</body>
</html>