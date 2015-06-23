<?php

class controller_view extends controller{

	function __construct()
	{
		$this->view = new view();
	}

	function action_new_message()
	{
		$this->view->generate('new_message_view.php', 'template_view.php');
	}
}
