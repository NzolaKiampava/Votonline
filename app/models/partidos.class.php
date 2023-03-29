<?php

Class Partidos 
{

	private $error = "";

	public function cadastrar($POST)
	{
        $data = array();
		$db = Database::getInstance();

		$data['nome']      = trim($POST['nome']);		
		$data['lema']     = trim($POST['lema']);		
		$data['presidente']  = trim($POST['presidente']);	
		$data['vicepresidente']  = trim($POST['vicepresidente']);	
		$data['sede']  = trim($POST['sede']);	
		$data['qtdmembros']  = trim($POST['qtdmembros']);

		$filename = $_FILES['logo']['name'];
		$destination = "";
		$folder = "uploads/";

		if (!file_exists($folder)) //if file $folder not exist
		{
			mkdir($folder, 0777, true);  //crete a directory to this $folder
		}

		$destination = $folder . "voton-".rand(1,999)."-".$_FILES['logo']['name'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['logo']['tmp_name'], $destination);	
		}	

        $data['logo'] = $destination;
		//check if email already exits
		$sql = "SELECT * FROM partidos WHERE nome = :nome limit 1";
		$arr['nome'] = $data['nome'];
		$check = $db->read($sql,$arr);
		if(is_array($check)){
			$this->error .= "Este partido já está cadastrado <br>";
		}
		
		if($this->error == ""){
			//save
			$query = "INSERT INTO partidos (nome,lema,qtdmembros,presidente,vicepresidente,sede,logo) values (:nome,:lema,:qtdmembros,:presidente,:vicepresidente,:sede,:logo)";

			$result = $db->write($query,$data);

			if($result)
			{
                $_SESSION['success'] =  "Partido cadastrado com sucesso!";
				header("Location: " . ROOT . "admin/partidos");
				die;
			}
		}

		$_SESSION['error'] = $this->error;
    }

	public function get_partido($id){
		$data = array();
		$db = Database::getInstance();
		$data['id'] = $id;

		$query = "SELECT * FROM partidos WHERE id = :id";
		$result = $db->read($query, $data);

		if($result)
		{
			return $result;
		}

		return false;
	}

	public function update($POST){
		$data = array();
		$db = Database::getInstance();

		$data['nome']      = trim($POST['nome']);		
		$data['lema']     = trim($POST['lema']);		
		$data['presidente']  = trim($POST['presidente']);	
		$data['vicepresidente']  = trim($POST['vicepresidente']);	
		$data['sede']  = trim($POST['sede']);	
		$data['qtdmembros']  = trim($POST['qtdmembros']);
		$data['id'] = trim($POST['id']);


		$filename = $_FILES['logo']['name'];
		$destination = "";
		$folder = "uploads/";

		if (!file_exists($folder)) //if file $folder not exist
		{
			mkdir($folder, 0777, true);  //crete a directory to this $folder
		}

		$destination = $folder . "voton-".rand(1,999)."-".$_FILES['logo']['name'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['logo']['tmp_name'], $destination);	
		}	

        $data['logo'] = $destination;
		$query = "UPDATE partidos SET nome =:nome, lema =:lema, qtdmembros =:qtdmembros, presidente =:presidente, vicepresidente =:vicepresidente, sede =:sede, logo =:logo where id =:id";

		$result = $db->write($query,$data);

		if($result)
		{
			$_SESSION['success'] =  "Partido atualizado com sucesso!";
			header("Location: " . ROOT . "admin/partidos");
			die;
		}
		return false;
	}

	public function delete($id)
	{
		$data = array();
		$db = Database::getInstance();
		$data['id'] = $id;

		$query = "DELETE FROM partidos where id = :id limit 1";

		$result = $db->write($query, $data);

		if($result)
		{
			$_SESSION['success'] =  "Partido deletado com sucesso!";
			header("Location: " . ROOT . "admin/partidos");
			die;
		}
		return false;
	}
}