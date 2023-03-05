<?php
require_once 'tabelas.php';
require_once 'banco.php';
if(isset ($_POST['ccotdu'])){
$_POST ['ccotdu']=1;
} else {
    $_POST ['ccotdu']=0;
}
//var_dump($_POST);
insert_usuarios ();
header("Location: Dados.php");

?>