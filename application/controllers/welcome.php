<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		//$this->load->library('tank_auth');
	}

	function index()
	{
		$d['movies'] = $this->_get_movies();
		$this->load->view('welcome', $d);
	}
	
	function _get_movies(){
		$url = 'http://cine.colombia.com/teatros-salas/i3/bogota-andino';
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */