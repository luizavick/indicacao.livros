<?php
require_once 'tabelas.php';
require_once 'banco.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <style>

body{
            font-family: 'Times New Roman', Times, serif;
background-image: linear-gradient(45deg, purple, blue);
        }
        div{
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.9);
            color: white;
            transform: translate(-50%,-50%);
            padding: 20px;
            text-align: center;
            width: 20%;
        }
        </style>
<?php
$usuario= select_usuarios ();
foreach ($usuario as $usuario){
    echo "<form method= \"post\" action=\"deletar.php\">";
    echo "<div>";
    echo "<p>Nome:",  $usuario ['nome.usu']. "</p>";
    echo "<p>E-mail:",  $usuario ['email.usu']. "</p>";
    echo "<p>Número de livro que costuma ler mensalmente:",  $usuario ['ndl.usu']. "</p>";
    echo "<p>Costuma ler de:",  $usuario ['cat.usu']. "</p>";
    echo "<p>Gosta de livros para:",  $usuario ['publico.usu']. "</p>";
    echo "<p>Turno que lê:",  $usuario ['turno.usu']. "</p>";
    echo "<p>Data escolhida:",  $usuario ['data.usu']. "</p>";
    if ($usuario['tdu.usu'] ==1){
        echo "<p>Concorda com os termos</p>";
    }else{
    echo "<p>Não concorda com os termos</p>";
    }
    echo "<input type=\"hidden\" name=\"id.usu\" value=\"Deletar\" >";
    echo "<input type=\"submit\"name=\"deletar\"id=\"deletar\"value=\"{$usuario[id.usu]}\"> <br>";
    echo "...............................................";
    echo "</form>";
    echo "</div>";
}
?>