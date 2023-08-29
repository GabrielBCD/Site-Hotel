<?php
function login(String $email, String $senha){

	require_once("conexao.php");
	$banco = conectar();
	if (isset($_POST['login'])) {
	
		if (!$user || !$senha) {
			header("Location: ./login.php?erro=nada");
		}else{
			try {
				$lista = $banco->prepare("select * from usuario");
				$lista->execute();
				$itens = $lista->fetchAll(PDO::FETCH_OBJ);
	
				foreach ($itens as $item) {	
				if($item->login == $email){
					$senhaCrypt = crypt($senha);
	
					if(hash_equals($senhaCrypt, $item->senha)){
						$_SESSION["user"]=$item->nome;
						$status = "ativo";
						$_SESSION["status"]=$status;
						header("Location: ./index.php");
					}else{
						header("Location: ./login.php?erro=usererrado");
					}
				}else{
					header("Location: ./login.php?erro=usererrado");
				}
				}
				} catch (\Throwable $th) {
					header("Location: ./index.php?erro=banco");
				}
				
		}
	
	}
}
?>
