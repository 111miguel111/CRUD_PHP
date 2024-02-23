<?php
require_once("../models/AlumnosModel.php");

class AlumnosController {
	private $model;

	public function __construct() {
		$this->model = new AlumnosModel();
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
