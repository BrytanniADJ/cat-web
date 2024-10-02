<?php
include 'conexao_cat.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cadastrar_medico'])){
        $cod = $_POST['cod_medico'];
        $nome = $_POST['nome_medico'];
        $cpf = $_POST['cpf_medico'];
        $email = $_POST['email_medico'];
        $especialidade = $_POST['especialidade_medico'];
        $crm = $_POST['crm_medico'];

        $sql = "INSERT INTO medico (cod_medico, nome_medico, cpf_medico, email_medico, especialidade_medico, crm_medico) VALUES ('$cod', '$nome', '$cpf', '$email', '$especialidade', '$crm')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Médico cadastrado com sucesso');
            window.location.href = '$url';
            </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['excluir_medico'])){
        $cod = $_POST['cod_medico'];
        $nome = $_POST['nome_medico'];
        $cpf = $_POST['cpf_medico'];
        $email = $_POST['email_medico'];
        $especialidade = $_POST['especialidade_medico'];
        $crm = $_POST['crm_medico'];


        $sql = "DELETE FROM medico WHERE cod_medico = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Médico excluído com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['atualizar_medico'])){
        $cod = $_POST['cod_medico'];
        $nome = $_POST['nome_medico'];
        $cpf = $_POST['cpf_medico'];
        $email = $_POST['email_medico'];
        $especialidade = $_POST['especialidade_medico'];
        $crm = $_POST['crm_medico'];

        $sql = "UPDATE medico SET nome_medico = '$nome' WHERE cod_medico = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Médico atualizado com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    

    $conn->close();
}

?>