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
		$data['votos'] = $DB->read("SELECT * FROM votos");

		$mpla = $DB->read("SELECT * FROM partidos where nome = 'MPLA'");
		$mplaid = $mpla[0]->id;
		$data['MPLA'] = $DB->read("SELECT * FROM votos where partido_id = '$mplaid'");
		
		$unita = $DB->read("SELECT * FROM partidos where nome = 'UNITA'");
		$unitaid = $unita[0]->id;
		$data['UNITA'] = $DB->read("SELECT * FROM votos where partido_id = '$unitaid'");

		$casace = $DB->read("SELECT * FROM partidos where nome = 'CASACE'");
		$casaceid = $casace[0]->id;
		$data['CASACE'] = $DB->read("SELECT * FROM votos where partido_id = '$casaceid'");
		
		$fnla = $DB->read("SELECT * FROM partidos where nome = 'FNLA'");
		$fnlaid = $fnla[0]->id;
		$data['FNLA'] = $DB->read("SELECT * FROM votos where partido_id = '$fnlaid'");

		$PRS = $DB->read("SELECT * FROM partidos where nome = 'PRS'");
		$PRSid = $PRS[0]->id;
		$data['PRS'] = $DB->read("SELECT * FROM votos where partido_id = '$PRSid'");

		$PNJANGO = $DB->read("SELECT * FROM partidos where nome = 'P-NJANGO'");
		$PNJANGOid = $PNJANGO[0]->id;
		$data['PNJANGO'] = $DB->read("SELECT * FROM votos where partido_id = '$PNJANGOid'");

		$PDPANA = $DB->read("SELECT * FROM partidos where nome = 'PDP-ANA'");
		$PDPANAid = $PDPANA[0]->id;
		$data['PDPANA'] = $DB->read("SELECT * FROM votos where partido_id = '$PDPANAid'");

		$APN = $DB->read("SELECT * FROM partidos where nome = 'APN'");
		$APNid = $APN[0]->id;
		$data['APN'] = $DB->read("SELECT * FROM votos where partido_id = '$APNid'");

		$PADDAAP = $DB->read("SELECT * FROM partidos where nome = 'PADDA-AP'");
		$PADDAAPid = $PADDAAP[0]->id;
		$data['PADDAAP'] = $DB->read("SELECT * FROM votos where partido_id = '$PADDAAPid'");

		$PALMA = $DB->read("SELECT * FROM partidos where nome = 'PALMA'");
		$PALMAid = $PALMA[0]->id;
		$data['PALMA'] = $DB->read("SELECT * FROM votos where partido_id = '$PALMAid'");

		$PPA = $DB->read("SELECT * FROM partidos where nome = 'PPA'");
		$PPAid = $PPA[0]->id;
		$data['PPA'] = $DB->read("SELECT * FROM votos where partido_id = '$PPAid'");

		$PNSA = $DB->read("SELECT * FROM partidos where nome = 'PNSA'");
		$PNSAid = $PNSA[0]->id;
		$data['PNSA'] = $DB->read("SELECT * FROM votos where partido_id = '$PNSAid'");

		
		$data['voto_usuarios'] = $DB->read("SELECT * FROM votos order by id desc");

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


	public function partidos_row()
	{
		show("aaaaaaaa");
		die;
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$row = $DB->read("SELECT * FROM partidos WHERE id=:id",['id'=>$id]);
			//SELECT garbage_address.address, trash_buckets.address_id FROM `garbage_address` INNER join trash_buckets on garbage_address.id = trash_buckets.address_id;
			echo json_encode($row);
		}
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