<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LihatBerita extends CI_Controller {

	public function index()
	{	
		$this->berita['hasil'] = $this->M_show->getBerita('kirim_berita');
		$this->load->view('lihatBerita', $this->berita);
	}
}
