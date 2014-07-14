<?php
App::uses('AppController', 'Controller');

class KankezuController extends Controller {
	//public $components = array('DebugKit.Toolbar');

	public function index() {
		$this->layout="main";
		$this -> set("title_for_layout","つぶやき関係図");

	}
}
