<?php

function select_categorias() {
	global $conn;
	$sth = $conn->prepare("'SELECT * FROM cat.livro'");
	$sth->execute();
	return $sth->fetchAll();
}

function select_usuarios() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM `tab.usu` INNER JOIN `cat.livro` WHERE `cat.usu` = `id.cat`;");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_usuario() {
	global $conn;
	$sth = $conn->prepare("INSERT INTO `tab.usu` (`id.usu`, `nome.usu`, `email.usu`, `ndl.usu`, `cat.usu`, `publico.usu`, `turno.usu`, `data.usu`, `tdu.usu`) 
	VALUES (NULL, :nome, :email, :livro, :cat, :publico, :turno, :data, :termo)");
	$sth-> BindParam(':nome', $_POST['nome']);
	$sth-> BindParam(':email', $_POST['email']);
	$sth-> BindParam(':cat', $_POST['cat']);
	$sth-> BindParam(':publico', $_POST['idade']);
	$sth-> BindParam(':turno', $_POST['t']);
	$sth-> BindParam(':data', $_POST['data']);
	$sth-> BindParam(':termo', $_POST['ccotdu']);
	$sth->execute();
	return $sth->fetchAll();
}
function delete_usuario (){
	global $conn;
	$sth = $conn->prepare("DELETE FROM `tab.usu` WHERE `id.usu` = :id");
	$sth-> BindParam(':id', $_POST['id.usu']);
	$sth->execute();
	return $sth->fetchAll();

}
?>
