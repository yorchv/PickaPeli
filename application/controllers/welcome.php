<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$response = http_get("http://cine.colombia.com/pelicula/i3752c0p0/un-metodo-peligroso-a-dangerous-method?id=3752&idc=0&p=0", array("timeout"=>1), $d['info']);
		$this->load->view('welcome_message', $d);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */