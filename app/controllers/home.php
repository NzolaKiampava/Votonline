<?php 

Class Home extends Controller
{

	public function index()
	{
		
		$User = $this->load_model('User');
		$Votos = $this->load_model('Votar');
		$user_data = $User->check_login(true);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}
/*
		if(isset($_GET['partido_id']))
		{
			$partido_id = $_GET['partido_id'];
			$user_id = $data['user_data']->id;
			$Votos->add_voto($user_id, $partido_id);
		}
*/

		if(isset($_POST['votar']))
		{
			$partido_id = $_POST['id'];
			$user_id = $data['user_data']->id;
			$Votos->add_voto($user_id, $partido_id);
		}

		$DB = Database::newInstance();
		$data['partidos'] = $DB->read("select * from partidos order by id desc");
		
		$data['top3'] = $DB->read("SELECT * FROM partidos order by totalvotos desc limit 3");

		$data['page_title'] = "Home";
		$data['current_page'] = "Home";
		$this->view("index",$data);
	}

}