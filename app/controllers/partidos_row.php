<?php

Class Partidos_row extends Controller
{
    public function index()
    {

        if(isset($_POST['id'])){
			$id = $_POST['id'];
            $DB = Database::newInstance();
			$row = $DB->read("SELECT * FROM partidos where id = '$id'");
			//SELECT garbage_address.address, trash_buckets.address_id FROM `garbage_address` INNER join trash_buckets on garbage_address.id = trash_buckets.address_id;
			echo json_encode($row);
		}
    }
}
