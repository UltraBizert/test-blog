<?php

class controller {
	public $model;
	public $view;

	function __construct() {
		$this->view=new view();
		$this->model=new model();
	}

	function action_index(){
		
	}
}
