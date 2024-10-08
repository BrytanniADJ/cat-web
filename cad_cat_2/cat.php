<?php
include 'conexao_cat.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cad_cat'])){
        $tipocat = $_POST['tipocat'];


        $cep_empregador =$_POST['cep_empregador'];
        $estado_empregador =$_POST['estado_empregador'];
        $cidade =$_POST['cidade_empregador'];
        $bairro_empregador =$_POST['bairro_empregador'];
        $rua =$_POST['rua_empregador'];

        $tipo_num =$_POST['tipo_num'];
        $cnae =$_POST['cnae'];
        $telefone_empregador =$_POST['telefone_empregador'];
        $razao_social =$_POST['razao_social'];
        $nome_empregador =$_POST['nome_empregador'];

        $nome_acidentado =$_POST['nome_acidentado'];
        $nome_mae_acidentado =$_POST['nome_mae_acidentado'];
        $data_nascimento_acidentado =$_POST['data_nascimento_acidentado'];
        $grau_instrucao_acidentado =$_POST['grau_acidentado'];
        $estado_civil_acidentado =$_POST['estado_civil_acidentado'];
        $ctps_acidentado =$_POST['ctps_acidentado'];
        $mit_pis_pasep_acidentado =$_POST['mit_pis_pasep_acidentado'];
        $telefone_acidentado =$_POST['telefone_acidentado'];
        $cbo =$_POST['cbo'];

        $aposentadoria_acidentado =$_POST['aposentadoria_acidentado'];
        $sexo_acidentado =$_POST['sexo_acidentado'];
        $remuneracao_acidentado =$_POST['remuneracao_acidentado'];
        $rg_acidentado = $_POST['rg_acidentado'];
        $cep_acidentado=$_POST['cep_acidentado'];
        $estado_acidentado = $_POST['estado_acidentado'];
        $cidade_acidentado = $_POST['cidade_acidentado'];
        $bairro_acidentado =$_POST['bairro_acidentado'];
        $rua_acidentado = $_POST['rua_acidentado'];

        $data_acidente =$_POST['data_acidente'];
        $horas_trabalhadas_acidente =$_POST['horas_trab_acidente'];
        $afastamento =$_POST['afastamento_acidente'];
        $local_acidente =$_POST['local_acidente'];
        $cnpj_cgc_cei =$_POST['cnpj_cgc_acidente'];
        $municipio_do_acidente =$_POST['municipio_acidente'];
        $parte_corpo =$_POST['parte_corpo_acidente'];
        $sit_geradora =$_POST['sit_acidente'];
        $data_obito =$_POST['data_obito_acidente'];

        $hora_acidente =$_POST['hora_acidente'];
        $tipo_lesao =$_POST['lesao_acidente'];
        $reg_policial =$_POST['policial_acidente'];
        $esp_local =$_POST['local_acidente'];
        $uf_acidente =$_POST['uf_acidente'];
        $ult_dia_trab_data_obito =$_POST['ult_dia_trab_acidente'];
        $agente_causador =$_POST['agente_acidente'];
        $morte =$_POST['morte_acidente'];

        $unidade =$_POST['unidade_atestado'];
        $data_atendimento =$_POST['data_atestado'];
        $houve_interacao =$_POST['internacao_atestado'];
        $nat_lesao =$_POST['nat_lesao_atestado'];
        $cid_10 =$_POST['cid_atestado'];

        $observacoes =$_POST['observacoes_atestado'];
        $crm =$_POST['crm_atestado'];
        $hora_atendimento =$_POST['hora_atendi_atestado'];
        $sera_afastado =$_POST['afastado_atestado'];





        $sql = "INSERT INTO cat(
            tipo_cat,comunicacao_obito,filiacao,email_emitente,nome_empresa,
            tipo_num_doc_empresa,cnae_empresa,telefone_empresa,cep_empresa,bairro_empresa,estado_empresa,endereco_empresa,
            municipio_empresa,nome_func,nome_mae_func,data_nascimento_func,sexo,grau_instrucao_func,identidade_func,estado_civil,
            ctps_func,remuneracao_func,pis_pasep_nit_func,cep_func,endereco_func,bairro_func,municipio_func,estado_func,
            telefone_func,cbo_func,aposentadoria_func,area_func,data_acidente,hora_acidente,horas_trabalhadas,tipo_acidente,
            afastamento,reg_policial,local_acidente,esp_local,cnpj_cgc_empresa,uf_acidente,municipio_acidente,ult_dia_trab,
            parte_corpo,agente_causador,sit_geradora,morte,data_obito,unidade,data_atendimento_medico,hora_atendimento_medico,
            houve_internacao,afastado,nat_lesao,cid,observacao,crm) 
        VALUES (
            $tipocat, $comunicacao_obito, $filiacao, $email, $razao_social,
            $tipo_num, $cnae, $telefone_empregador, $cep_empregador, $bairro_empregador, $estado_empregador, $rua_empregador,
            $cidade_empregador, $nome_acidentado, $nome_mae_acidentado, $data_nascimento_acidentado, $sexo_acidentado, $grau_instrucao_acidentado, $ctps_acidentado, $estado_civil_acidentado,
            $mit_pis_pasep_acidentado, $telefone_acidentado, $cbo, $aposentadoria_acidentado, $data_acidente, $hora_acidente, $horas_trabalhadas_acidente, $local_acidente,
            $afastamento, $reg_policial, $esp_local, $cnpj_cgc_cei, $uf_acidente, $municipio_do_acidente, $ult_dia_trab_data_obito, $parte_corpo, $agente_causador, $sit_geradora,
            $morte, $data_obito, $unidade, $data_atendimento, $hora_atendimento, $houve_interacao, $sera_afastado, $nat_lesao, $cid_10, $observacoes, $crm)";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        

    }
    

    $conn->close();
}

?>