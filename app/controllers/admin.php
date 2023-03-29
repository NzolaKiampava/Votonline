<?php 

Class Admin extends Controller
{

	public function index()
	{

		$User = $this->load_model('User');
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}
		$DB = Database::newInstance();
		
		$data['partidos'] = $DB->read("select * from partidos");
		$data['users'] = $DB->read("select * from users");

		$data['page_title'] = "Admin";
		$data['current_page'] = "dashboard";
		$this->view("admin/index",$data);
	}

	public function partidos()
	{
		$User = $this->load_model('User');
		$partidos = $this->load_model("partidos");
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}
		$DB = Database::newInstance();
		$data['partidos'] = $DB->read("select * from partidos order by id desc");

		if(isset($_GET['delete']))
		{	
			$id = $_GET['delete'];
			$partidos->delete($id);
		}
		
		
		$data['page_title'] = "partidos";
		$data['current_page'] = "Partidos";
		$this->view("admin/partidos",$data);
	}

	public function cadastrar_partidos()
	{
		$User = $this->load_model('User');
		$partidos = $this->load_model("partidos");
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}

		if(isset($_POST['add']))
		{
			$partidos->cadastrar($_POST);
		}

		if(isset($_POST['update']))
		{
			$partidos->update($_POST);
		}

		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$data['partido'] = $partidos->get_partido($id);
		}

		
		$data['page_title'] = "cadastrar_partidos";
		$data['current_page'] = "Cadastar";
		$this->view("admin/cadastrar_partidos",$data);
	}

	public function users()
	{
		$User = $this->load_model('User');
		$partidos = $this->load_model("partidos");
		$user_data = $User->check_login(true, ["admin"]);
		if(is_object($user_data)){
			$data['user_data'] = $user_data;
		}
		$DB = Database::newInstance();
		$data['users'] = $DB->read("select * from users order by id desc");
		
		$data['page_title'] = "partidos";
		$data['current_page'] = "Usuarios";
		$this->view("admin/users",$data);
	}

}