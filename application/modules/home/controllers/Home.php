<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index() {
		$data['title'] = "Home Page";
		$this->template->index($data);
	}
}