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
    <title>Login</title>
    <style>
         button {
            background-color: blueviolet;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
        button:hover{
            background-color: darkmagenta;
        }
        body{
            font-family: 'Times New Roman', Times, serif;
background-image: linear-gradient(45deg, purple, blue);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            color: white;
            transform: translate(-50%,-50%);
            padding: 20px;
            
        }
        </style>
</head>
<body>
    <h1> ESTANTE VIRTUAL </h1>
    <h2> preencha o formulário ao lado e receba<br> uma  sugestão de livro em seu E-mail <br> TODO o mês! ===> </h2>
    <div>
    <form action=" inserir.php" method="post">
 <p>Nome: <input type="text" name="nome" /></p>
 <br>
 <p> E-mail: <input type= "email" name="email" /></p>
<br>
<P> Número de livros que costuma ler mensalmente: <input type="number" name= "ndl" /></p>
<br>
<p>Costuma ler de: </p>
<?php
$categorias= select_categoria ();
foreach ($categorias as $categorias) {
    echo "<input type=\"radio\" name=\"cat\" value=\"{$categorias['id.cat']}\">{$categorias['nome.cat']}"; 
}
?>
     <br>

<br>
<p> Para que tipo de público procura livros:<select id="Age" name=idade>
    <option> Bebês </option>
    <option> Crianças</option>
    <option> Jovens</option>
    <option> Adultos</option>
    <option> Livros Didáticos</option>
                </select></p>
<br>
<p>Costuma ler de: <input type="radio" name="t" value="manhã" > Manhã
    <input type="radio" name="t" value="Tarde" > Tarde
    <input type="radio" name="t" value="Noite" > Noite
    <input type="radio" name="t" value="nth" > Não tenho hora certa
</p>
<br>
<p> A partir de quando quer receber nossas suguestões: <input type="date" name="data" </p>
<br> <br>
<input type="checkbox" name="ccotdu" value="ccotdu" > Concordo com os termos de uso.
<br> <br> <br>
<button>Enviar</button>
    </form>
    </div>
</body>
</html>
<?php
