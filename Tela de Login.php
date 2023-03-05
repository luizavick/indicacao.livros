<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
background-image: linear-gradient(45deg, purple, blue);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border: 15px;
            color: white;
        }
        button {
            background-color: blueviolet;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }
        button:hover{
            background-color: darkmagenta;
        }
    </style>
</head>
<body>
    <h1> ESTANTE VIRTUAL </h1>
    <h2> Um jeito futurista de incentivar a leitura </h2>
    <div>
        <form name="" method="post" action="">
<h1>Login</h1>    
<input type="text" placeholder="Usuário">
<br> <br>
<input type="password" placeholder="Senha">
<br> <br> <br>
<button>Entrar</button>
        </form>
        <?php
				$Usuario = @$_REQUEST['Usuário'];
				$Senha = @$_REQUEST['Senha'];
				$botão = @$_REQUEST['botão'];
				
				$Conta1 = 'luizav';
				$senha1 = '123456';
                if($botão){
					if($Usuario == "" ||  $){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
                    else{
						if(($Usuario == $Conta1 && $Senha == $senha1) 
							session_start();
							$_SESSION['usuario']=$Usuario;
							$_SESSION['senha']=$Senha;
							header("Location: formulario.php");
						}
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
                ?>
				
</div>
</body>
</html>