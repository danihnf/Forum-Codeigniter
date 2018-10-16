<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('landing/index');
	}

	public function galeri()
	{
		$this->load->view('landing/galeri');
	}

	public function index3()
	{
		$this->load->view('index3');
	}

	public function galeri2()
	{
		$this->load->view('landing/galeri2');
	}

}

/* End of file landing.php */
/* Location: ./application/controllers/landing.php */

?>