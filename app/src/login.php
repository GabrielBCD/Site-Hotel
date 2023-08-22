<?php
function login(String $email, String $senha){

	require_once("conexao.php");
	$banco = conectar();
	if (isset($_GET['erro'])) { 
		if ($_GET['erro'] == "usererrado") { 
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>Usuário ou senha incorreta</strong> insira os dados novamente
			</div>"; 
		}
		if ($_GET['erro'] == "nada") { 
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>Campos em branco</strong> insira os dados novamente de forma correta!
			</div>"; 
		}
		if ($_GET['erro'] == "banco") { 
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
			<strong>Problemas no banco</strong> aguarde um instante e insira os dados novamente
			</div>"; 
		}
	
	}
	
	if (isset($_POST['login'])) {
	
		if (!$user || !$senha) {
			header("Location: app/src/login.php?erro=nada");
		}else{
			try {
				$lista = $banco->prepare("select * from usuario");
				$lista->execute();
				$itens = $lista->fetchAll(PDO::FETCH_OBJ);
	
				if($itens->login == $email){
					$senhaCrypt = crypt($senha);
	
					if(hash_equals($senhaCrypt, $itens->senha)){
						header("Location: login.php");
					}else{
						header("Location: app/src/login.php?erro=usererrado");
					}
				}else{
					header("Location: app/src/login.php?erro=usererrado");
				}
				} catch (\Throwable $th) {
					header("Location: app/src/index.php?erro=banco");
				}
				
		}
	
	}
}
?>
