<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowData extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShowData_model');
	}

	public function showOutJoin(){
		$show['shows']=$this->ShowData_model->getShowNotJoin();
	$this->load->view('showOutJoin', $show);

}
	public function showJoin(){
		$show['shows']=$this->ShowData_model->getShowJoin();
		$this->load->view('showJoin', $show);

	}
}
