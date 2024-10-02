<?php
include 'conexao_cat.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cadastrar_lesao'])){
        $cod = $_POST['cod_lesao'];
        $desc = $_POST['descricao_lesao']; 

        $sql = "INSERT INTO lesao (cod_lesao, descricao_lesao) VALUES ('$cod', '$desc')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Tipo de lesão cadastrada com sucesso');
            window.location.href = '$url';
            </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['excluir_lesao'])){
        $cod = $_POST['cod_lesao'];
        $desc = $_POST['descricao_lesao']; 

        $sql = "DELETE FROM lesao WHERE cod_lesao = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Tipo de lesão excluída com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['atualizar_lesao'])){
        $cod = $_POST['cod_lesao'];
        $desc = $_POST['descricao_lesao']; 

        $sql = "UPDATE lesao SET descricao_lesao = '$desc' WHERE cod_lesao = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('Tipo de lesão atualizada com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
    

    $conn->close();
}

?>
