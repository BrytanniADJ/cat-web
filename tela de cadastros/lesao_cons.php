<?php 

include_once("conexao_cat.php");

function retorna($cod_lesao, $conn){
    $result_lesao = "SELECT * FROM lesao WHERE cod_lesao = '$cod_lesao' LIMIT 1";
    $resultado_lesao = mysqli_query($conn, $result_lesao);
    if($resultado_lesao->num_rows){
        $row_lesao = mysqli_fetch_assoc($resultado_lesao);
        $valores ['descricao_lesao'] = $row_lesao['descricao_lesao'];
    }else{
        $valores ['descricao_lesao'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['cod_lesao'])){
    echo retorna($_GET['cod_lesao'], $conn);
}

?>