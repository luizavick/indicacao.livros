<?php
require_once 'tabelas.php';
require_once 'banco.php';

var_dump($_POST);
delete_usuarios ();
header("Location: Dados.php");

?>