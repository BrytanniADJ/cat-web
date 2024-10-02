<?php
include 'conexao_cat.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['cadastrar_cid'])){
        $cod = $_POST['codigo_cid'];
        $desc = $_POST['descricao_cid']; 

        $sql = "INSERT INTO cid (cod_cid, descricao_cid) VALUES ('$cod', '$desc')";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
                alert('CID cadastrada com sucesso');
                window.location.href = '$url';
                </script>";

            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        

    }

    if (isset($_POST['excluir_cid'])){
        $cod = $_POST['codigo_cid'];
        $desc = $_POST['descricao_cid']; 

        $sql = "DELETE FROM cid WHERE cod_cid = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
                alert('CID excluída com sucesso');
                window.location.href = '$url';
                </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        

    }

    if (isset($_POST['atualizar_cid'])){
        $cod = $_POST['codigo_cid'];
        $desc = $_POST['descricao_cid']; 

        $sql = "UPDATE cid SET descricao_cid = '$desc' WHERE cod_cid = '$cod'";

        $url = "http://localhost/cat-web/index.html";

        if ($conn->query($sql) === TRUE) {
            echo "echo <script>
            alert('CID atualizada com sucesso');
            window.location.href = '$url';
            </script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        

    }
    

    $conn->close();
}

?>
