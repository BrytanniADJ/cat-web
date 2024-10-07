<?php 

include_once("conexao_cat.php");

function retorna($cod_empresa, $conn){
    $result_empresa = "SELECT * FROM empresa WHERE cod_empresa = '$cod_empresa' LIMIT 1";
    $resultado_empresa = mysqli_query($conn, $result_empresa);
    if($resultado_empresa->num_rows){
        $row_empresa = mysqli_fetch_assoc($resultado_empresa);
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
        $valores ['nome_medico'] = $row_empresa['nome_medico'];
    }else{
        $valores ['nome_medico'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['cod_medico'])){
    echo retorna($_GET['cod_medico'], $conn);
}

?>