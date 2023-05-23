<?php

class Verify_sms_code_login extends Controller
{
    public function index()
	{
		$data['page_title'] = "Verify SMS Code";
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = $this->load_model("user");
			$user->verify_sms_code_login($_POST);
		}
		$this->view("verify_sms_code_login", $data);
	}
}
