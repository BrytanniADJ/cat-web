<?php
include 'conexao_cat.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cadastrar_empresa'])){
        $cod = $_POST['cod_empresa'];
        $nome = $_POST['nome_empresa'];
        $tipo = $_POST['tipo_num_doc_empresa'];
        $cnpj = $_POST['cnpj_empresa'];
        $cnae = $_POST['cnae_empresa'];
        $cep = $_POST['cep_empresa'];
        $endereco = $_POST['endereco_empresa'];
        $bairro = $_POST['bairro_empresa'];
        $municipio = $_POST['municipio_empresa'];
        $estado = $_POST['estado_empresa'];
        $telefone = $_POST['telefone_empresa'];
        $email = $_POST['email_empresa'];

        $sql = "INSERT INTO empresa (cod_empresa, nome_empresa, tipo_num_doc_empresa, cnpj_empresa, cnae_empresa, cep_empresa, endereco_empresa, bairro_empresa, municipio_empresa, estado_empresa, telefone_empresa, email_empresa)VALUES ('$cod', '$nome', '$tipo', '$cnpj', '$cnae', '$cep', '$endereco', '$bairro', '$municipio', '$estado', '$telefone', '$email')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
           echo "echo <script>
            alert('Empresa cadastrada com sucesso');
            window.location.href = '$url';
            </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['excluir_empresa'])){
        $cod = $_POST['cod_empresa'];
        $nome = $_POST['nome_empresa'];
        $tipo = $_POST['tipo_num_doc_empresa'];
        $cnpj = $_POST['cnpj_empresa'];
        $cnae = $_POST['cnae_empresa'];
        $cep = $_POST['cep_empresa'];
        $endereco = $_POST['endereco_empresa'];
        $bairro = $_POST['bairro_empresa'];
        $municipio = $_POST['municipio_empresa'];
        $estado = $_POST['estado_empresa'];
        $telefone = $_POST['telefone_empresa'];
        $email = $_POST['email_empresa'];

        $sql = "DELETE FROM empresa WHERE cod_empresa = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Empresa excluída com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['atualizar_empresa'])){
        $cod = $_POST['cod_empresa'];
        $nome = $_POST['nome_empresa'];
        $tipo = $_POST['tipo_num_doc_empresa'];
        $cnpj = $_POST['cnpj_empresa'];
        $cnae = $_POST['cnae_empresa'];
        $cep = $_POST['cep_empresa'];
        $endereco = $_POST['endereco_empresa'];
        $bairro = $_POST['bairro_empresa'];
        $municipio = $_POST['municipio_empresa'];
        $estado = $_POST['estado_empresa'];
        $telefone = $_POST['telefone_empresa'];
        $email = $_POST['email_empresa'];

        $sql = "UPDATE empresa SET cod_empresa = '$cod', nome_empresa = '$nome', tipo_num_doc_empresa = '$tipo', cnpj_empresa = '$cnpj', cnae_empresa = '$cnae', cep_empresa = '$cep', endereco_empresa = '$endereco', bairro_empresa = '$bairro', municipio_empresa = '$municipio', estado_empresa = '$estado', telefone_empresa = '$telefone', email_empresa = '$email'  WHERE cod_empresa = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Empresa atualizada com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    

    $conn->close();
}

?>