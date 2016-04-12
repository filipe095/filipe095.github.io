<?php

	/**
	*
	*/
	class PROJECT {



		function __construct($dbCon)
		{
			$this->db = $dbCon;
		}

		public function Cats(){
			try {
				$stmt = $this->db->query("SELECT * FROM categories")->fetchAll();

			} catch (PDOException $e) {
				echo $e->getMessage();
			}

			foreach ($stmt as $value) {
				echo "<option value='".$value['id_cat']."''>".$value['cat_name']."</option>";
			}
		}

		public function Status(){
			try {
				$stmt = $this->db->query("SELECT * FROM status")->fetchAll();

			} catch (PDOException $e) {
				echo $e->getMessage();
			}

			foreach ($stmt as $value) {
				echo "<option value='".$value['id_status']."''>".$value['status_name']."</option>";
			}
		}
	}

?>