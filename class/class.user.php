<?php

	/**
	** Classe Utilizador
	*/
	class USER {

		function __construct($dbCon) {
			$this->db = $dbCon;
		}


	/*
	**	Método para registar novo utilizador na base de dados
	*/

		public function register($username, $email, $pass, $tAcc, $nome, $typeAccount) {
			try {
				//$password = password_hash($pass, PASSWORD_DEFAULT);

				$stmt->this->db->prepare("INSERT INTO users(email, nome, username, password, typeOffAccount) VALUES (:email, :nome, :username, :pass, :typeAcc)");
				$stmt->bindparam(":email", $email);
				$stmt->bindparam(":nome", $nome);
				$stmt->bindparam(":username", $username);
				$stmt->bindparam(":pass", $pass);
				$stmt->bindparam(":typeAcc", $typeAccount);

				$stmt->execute();

				return $stmt;

			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}


		/*
		**	Método para pesquisar se o utilizador existe na base de dados através do email ou do username
		*/
		public function login($username, $email, $pass) {
			try {
				$stmt = $this->db->prepare("SELECT * FROM users WHERE username=:username OR email=:mail LIMIT 1");
				$stmt->execute(array(':username'=>$username, ':mail'=>$email));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);

				if ($stmt->rowCount() > 0 ) {
					if ($pass == $row['password']) {
						$_SESSION['id_user'] = $row['id_user'];
						$_SESSION['username'] = $row['nome'];
						return true;
					} else {
						return false;
					}
				}
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}

		/*
		** Método para saber se o utilizador está loggado ou não
		*/
		public function is_loggedin() {
			if(isset($_SESSION['id_user'])){
				return true;
			}
		}

		/*
		** Método para logout
		*/
		public function logout() {
			session_destroy();
			unset($_SESSION['id_user']);
			return true;
		}

		/*
		** Método para fazer um simples redirect
		*/
		public function redirect($url){
			header("Location: $url");
		}

	}
?>