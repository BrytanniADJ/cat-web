<?php 

include_once("conexao_cat.php");

function retorna($cod_medico, $conn){
    $result_medico = "SELECT * FROM medico WHERE cod_medico = '$cod_medico' LIMIT 1";
    $resultado_medico = mysqli_query($conn, $result_medico);
    if($resultado_medico->num_rows){
        $row_medico = mysqli_fetch_assoc($resultado_medico);
        $valores ['nome_medico'] = $row_medico['nome_medico'];
        $valores ['cpf_medico'] = $row_medico['cpf_medico'];
        $valores ['email_medico'] = $row_medico['email_medico'];
        $valores ['especialidade_medico'] = $row_medico['especialidade_medico'];
        $valores ['crm_medico'] = $row_medico['crm_medico'];
    }else{
        $valores ['nome_medico'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['cod_medico'])){
    echo retorna($_GET['cod_medico'], $conn);
}

?>