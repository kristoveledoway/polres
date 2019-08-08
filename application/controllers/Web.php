<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Web extends CI_Controller {

	public function __construct(){
		session_start();
		parent::__construct();
		$this->load->model('Polres_model');

		//$this->load->model('Buku_model');
	}