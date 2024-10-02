<?php
include 'conexao_cat.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cadastrar_agente'])){
        $cod = $_POST['cod_agente'];
        $nome = $_POST['nome_agente'];
        $desc = $_POST['descricao_agente']; 

        $sql = "INSERT INTO agente (cod_agente, nome_agente, descricao_agente) VALUES ('$cod', '$nome', '$desc')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Agente causador cadastrado com sucesso');
            window.location.href = '$url';
            </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['excluir_agente'])){
        $cod = $_POST['cod_agente'];
        $nome = $_POST['nome_agente'];
        $desc = $_POST['descricao_agente']; 

        $sql = "DELETE FROM agente WHERE cod_agente = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Agente causador excluído com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['atualizar_agente'])){
        $cod = $_POST['cod_agente'];
        $nome = $_POST['nome_agente'];
        $desc = $_POST['descricao_agente']; 

        $sql = "UPDATE agente SET nome_agente = '$nome', descricao_agente = '$desc' WHERE cod_agente = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Agente causador atualizado com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    

    $conn->close();
}

?>


