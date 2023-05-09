<?php

Class Votar
{
	private $error = "";
	public function add_voto($user_id, $partido_id)
	{
        $data = array();
		$db = Database::getInstance();

		$data['user_id']      = $user_id;
        $data['partido_id'] = $partido_id;

		//check if user already voted
		$sql = "SELECT * FROM votos WHERE user_id = :id limit 1";
		$arr['id'] = $data['user_id'];
		$check = $db->read($sql,$arr);
		if(is_array($check)){
			$this->error .= "O voto já foi efectuado!";
		}
		
		if($this->error == ""){
			//save
            $p['id_partido'] = $data['partido_id'];
			$query = "SELECT * FROM partidos where id = :id_partido";
			$select = $db->read($query,$p);

			if($select)
			{
                $tv = $select[0]->totalvotos;
                $pa['count_votos'] = $tv + 1;
				$pa['ip'] = $select[0]->id;
                $query_up = "UPDATE partidos SET totalvotos = :count_votos where id = :ip";
                $update = $db->write($query_up, $pa);

                if($update)
                {
                    $insert = "INSERT INTO votos (user_id, partido_id) values (:user_id, :partido_id)";
                    $result = $db->write($insert, $data);
                    if($result)
                    {
                        $_SESSION['success'] = "Voto efectudo com sucesso";
                        header("Location: " . ROOT . "index");
                        die;
                    }
                }
			}
		}

		$_SESSION['error'] = $this->error;
    }
}