<?php

class controller_login extends controller
{

	function __construct()
	{
		$this->model = new model_login();
		$this->view = new view();
	}

	function action_login_in_cookie()
	{
		$this->model->login_in_cookie();
	}

	function action_login_in()
	{
		$data=$this->model->login_in();
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}

	function action_registration()
	{
		$data=$this->model->registration(); 
		$this->view->generate('registration_view.php', 'template_view.php', $data);
	}

}

