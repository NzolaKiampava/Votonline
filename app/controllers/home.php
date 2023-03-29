<?php 

Class Home extends Controller
{

	public function index()
	{
		
		$User = $this->load_model('User');
		$user_data = $User->check_login(true);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		$DB = Database::newInstance();
		$data['partidos'] = $DB->read("select * from partidos order by id desc");

		$data['page_title'] = "Home";
		$data['current_page'] = "Home";
		$this->view("index",$data);
	}

}