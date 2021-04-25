<?php include_once"config.php";?>

<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $sexo = $_POST["checks"];
        $adminstrador = $_POST["admins"];
        
        $conn = mysqli_connect($server,$dbuser,$dbpassword,$dbname);

        mysqli_select_db($conn,'$dbname');
        $sql = "INSERT INTO tb_user (nome, senha, checks, admins) VALUES ('$nome','$senha',
        '$sexo','$adminstrador')";

        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Salvei seus dados!'); window.location = 'index.php'; </script>";
        }else{
         echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>