<?php

class controller_access extends controller{

	function __construct()
	{
		$this->model = new model_access();
		$this->view = new view();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('access_view.php', 'template_view.php', $data);
	}

	function action_message()
	{
		$this->model->add_message();
	}

	function action_new_message()
	{
		$this->view->generate('new_message_view.php', 'template_view.php');
	}
}
