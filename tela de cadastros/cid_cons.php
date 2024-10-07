<?php 

include_once("conexao_cat.php");

function retorna($codigo_cid, $conn){
    $result_cid = "SELECT * FROM cid WHERE cod_cid = '$codigo_cid' LIMIT 1";
    $resultado_cid = mysqli_query($conn, $result_cid);
    if($resultado_cid->num_rows){
        $row_cid = mysqli_fetch_assoc($resultado_cid);
        $valores ['descricao_cid'] = $row_cid['descricao_cid'];
    }else{
        $valores ['descricao_cid'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['codigo_cid'])){
    echo retorna($_GET['codigo_cid'], $conn);
}

?>