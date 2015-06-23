<?php

class controller_main extends controller {

	function __construct() {
		$this->view= new view();
	}

	function action_index() {
		$this->view->generate('login_view.php', 'template_view.php');
	}

	function action_users() {
		$this->view->generate('users_view.php', 'template_view.php');
	}
}
