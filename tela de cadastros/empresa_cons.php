<?php 

include_once("conexao_cat.php");

function retorna($cod_empresa, $conn){
    $result_empresa = "SELECT * FROM empresa WHERE cod_empresa = '$cod_empresa' LIMIT 1";
    $resultado_empresa = mysqli_query($conn, $result_empresa);
    if($resultado_empresa->num_rows){
        $row_empresa = mysqli_fetch_assoc($resultado_empresa);
        $valores ['nome_empresa'] = $row_empresa['nome_empresa'];
        $valores ['tipo_num_doc_empresa'] = $row_empresa['tipo_num_doc_empresa'];
        $valores ['cnpj_empresa'] = $row_empresa['cnpj_empresa'];
        $valores ['cnae_empresa'] = $row_empresa['cnae_empresa'];
        $valores ['cep_empresa'] = $row_empresa['cep_empresa'];
        $valores ['endereco_empresa'] = $row_empresa['endereco_empresa'];
        $valores ['bairro_empresa'] = $row_empresa['bairro_empresa'];
        $valores ['municipio_empresa'] = $row_empresa['municipio_empresa'];
        $valores ['estado_empresa'] = $row_empresa['estado_empresa'];
        $valores ['telefone_empresa'] = $row_empresa['telefone_empresa'];
        $valores ['email_empresa'] = $row_empresa['email_empresa'];
    }else{
        $valores ['nome_empresa'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['cod_empresa'])){
    echo retorna($_GET['cod_empresa'], $conn);
}

?>