<?php
require_once("../models/ProfesoresModel.php");

class ProfesoresController {
	private $model;

	public function __construct() {
		$this->model = new ProfesoresModel();
	}

	public function set( $al_data = array() ) {
		return $this->model->set($al_data);
	}

	public function get( $nif = '' ) {
		
		return $this->model->get($nif);
	}

	public function del( $nif = '' ) {
		return $this->model->del($nif);
	}

	public function __destruct() {
		unset($this->model);
	}
}
