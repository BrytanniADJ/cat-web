<?php 

include_once("conexao_cat.php");

function retorna($cod_funcionario, $conn){
    $result_func = "SELECT * FROM funcionario WHERE cod_funcionario = '$cod_funcionario' LIMIT 1";
    $resultado_func = mysqli_query($conn, $result_func);
    if($resultado_func->num_rows){
        $row_func = mysqli_fetch_assoc($resultado_func);
        $valores ['nome_func'] = $row_func['nome_func'];
        $valores ['data_nascimento_func'] = $row_func['data_nascimento_func'];
        $valores ['cpf_func'] = $row_func['cpf_func'];
        $valores ['estado_civil'] = $row_func['estado_civil'];
        $valores ['cep_func'] = $row_func['cep_func'];
        $valores ['municipio_func'] = $row_func['municipio_func'];
        $valores ['endereco_func'] = $row_func['endereco_func'];
        $valores ['email_func'] = $row_func['email_func'];
        $valores ['grau_instrucao_func'] = $row_func['grau_instrucao_func'];
        $valores ['cbo_func'] = $row_func['cbo_func'];
        $valores ['pis_pasep_nit_func'] = $row_func['pis_pasep_nit_func'];
        $valores ['cod_empresa'] = $row_func['cod_empresa'];
        $valores ['nome_mae_func'] = $row_func['nome_mae_func'];
        $valores ['identidade_func'] = $row_func['identidade_func'];
        $valores ['ra_func'] = $row_func['ra_func'];
        $valores ['sexo'] = $row_func['sexo'];
        $valores ['bairro_func'] = $row_func['bairro_func'];
        $valores ['estado_func'] = $row_func['estado_func'];
        $valores ['telefone_func'] = $row_func['telefone_func'];
        $valores ['area_func'] = $row_func['area_func'];
        $valores ['ctps_func'] = $row_func['ctps_func'];
        $valores ['remuneracao_func'] = $row_func['remuneracao_func'];
        $valores ['aposentadoria_func'] = $row_func['aposentadoria_func'];
        
    }else{
        $valores ['nome_func'] = '';
    }
    return json_encode($valores);
}

if(isset($_GET['cod_funcionario'])){
    echo retorna($_GET['cod_funcionario'], $conn);
}

?>