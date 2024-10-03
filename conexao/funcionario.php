<?php
include 'conexao_cat.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['cadastrar_funcionario'])){
        $cod = $_POST['cod_funcionario'];
        $cod_empre = $_POST['cod_empresa'];
        $nome = $_POST['nome_func'];
        $nome_mae = $_POST['nome_mae_func'];
        $data_nascimento = $_POST['data_nascimento_func'];
        $identidade = $_POST['identidade_func'];
        $cpf = $_POST['cpf_func'];
        $ra = $_POST['ra_func'];
        $estado_civil = $_POST['estado_civil'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep_func'];
        $bairro = $_POST['bairro_func'];
        $municipio = $_POST['municipio_func'];
        $estado = $_POST['estado_func'];
        $endereco = $_POST['endereco_func'];
        $telefone = $_POST['telefone_func'];
        $email = $_POST['email_func'];
        $area = $_POST['area_func'];
        $grau = $_POST['grau_instrucao_func'];
        $ctps = $_POST['ctps_func'];
        $cbo = $_POST['cbo_func'];
        $remuneracao = $_POST['remuneracao_func'];
        $pis_pasep_nit = $_POST['pis_pasep_nit_func'];
        $aposentadoria = $_POST['aposentadoria_func'];

        
        $sql ="INSERT INTO funcionario (cod_funcionario ,cod_empresa ,nome_func ,nome_mae_func ,data_nascimento_func ,identidade_func ,cpf_func ,ra_func ,estado_civil,sexo,cep_func ,bairro_func ,municipio_func ,estado_func ,endereco_func ,telefone_func ,email_func ,area_func ,grau_instrucao_func ,ctps_func ,cbo_func ,remuneracao_func ,pis_pasep_nit_func,aposentadoria_func) VALUES ('$cod','$cod_empre','$nome','$nome_mae',' $data_nascimento',' $identidade',' $cpf',' $ra',' $estado_civil',' $sexo',' $cep','$bairro',' $municipio','$estado',' $endereco','$telefone','$email','$area','$grau','$ctps','$cbo','$remuneracao','$pis_pasep_nit',' $aposentadoria')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado"; echo "echo <script>
            alert('Funcionário cadastrado com sucesso');
            window.location.href = '$url';
            </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }




    if (isset($_POST['excluir_funcionario'])){
        $cod = $_POST['cod_funcionario'];
        

        $sql = "DELETE FROM funcionario WHERE cod_funcionario = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado"; echo "echo <script>
            alert('Funcionário excluído com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

    }



    

    if (isset($_POST['atualizar_funcionario'])){
        $cod = $_POST['cod_funcionario'];
        $cod_empre = $_POST['cod_empresa'];
        $nome = $_POST['nome_func'];
        $nome_mae = $_POST['nome_mae_func'];
        $data_nascimento = $_POST['data_nascimento_func'];
        $identidade = $_POST['identidade_func'];
        $cpf = $_POST['cpf_func'];
        $ra = $_POST['ra_func'];
        $estado_civil = $_POST['estado_civil'];
        $sexo = $_POST['sexo'];
        $cep = $_POST['cep_func'];
        $bairro = $_POST['bairro_func'];
        $municipio = $_POST['municipio_func'];
        $estado = $_POST['estado_func'];
        $endereco = $_POST['endereco_func'];
        $telefone = $_POST['telefone_func'];
        $email = $_POST['email_func'];
        $area = $_POST['area_func'];
        $grau = $_POST['grau_instrucao_func'];
        $ctps = $_POST['ctps_func'];
        $cbo = $_POST['cbo_func'];
        $remuneracao = $_POST['remuneracao_func'];
        $pis_pasep_nit = $_POST['pis_pasep_nit_func'];
        $aposentadoria = $_POST['aposentadoria_func'];


        $sql = "UPDATE funcionario SET cod_empresa = '$cod_empre', nome_func ='$nome', nome_mae_func = '$nome_mae', data_nascimento_func ='$data_nascimento',
        identidade_func ='$identidade', cpf_func ='$cpf', ra_func ='$ra', estado_civil ='$estado_civil', sexo ='$sexo', cep_func ='$cep', bairro_func ='$bairro',municipio_func ='$municipio',
        estado_func ='$estado', endereco_func ='$endereco', telefone_func ='$telefone', email_func ='$email', area_func ='$area', grau_instrucao_func =' $grau', ctps_func ='$ctps', cbo_func ='$cbo',
        remuneracao_func ='$remuneracao', pis_pasep_nit_func ='$pis_pasep_nit ', aposentadoria_func=' $aposentadoria'
        WHERE cod_funcionario = '$cod'";
        
        $url = "http://localhost/cat-web/index.html";



        if ($conn->query($sql) === TRUE) {
            echo "Usuário cadastrado"; echo "echo <script>
            alert('Funcionário atualizado com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        
        

    }

    $conn->close();

}
?>