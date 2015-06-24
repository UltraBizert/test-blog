<?php

class controller_main extends controller {

	function __construct() {
		$this->model = new model_main();
		$this->view = new view();
	}

	function action_index() {
		$this->view->generate('home_view.html', 'template_view.php');
	}

	function action_users() {
		$data = $this->model->users();
		$this->view->generate('users_view.php', 'template_view.php', $data);
	}

	function action_messages() {
		$data = $this->model->messages();
	}
}
