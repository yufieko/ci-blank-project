<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends MX_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('hello');
	}
}
