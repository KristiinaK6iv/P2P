<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index()
	{
			
		$this->load->view('avaleht');
		
	}
	
	public function kuulutused()
	{
		
		$this->load->model('Databaseads');
		$data['records']=$this->Databaseads->getData();
		$data['records2']=$this->Databaseads->getSum();
		
		$this->load->view('kuulutused',$data);
		
	}
	public function minuKuulutused()
	{
		
		$this->load->view('minuKuulutused');
		
	}
	
	public function KKK()
	{
			
		$this->load->view('KKK');
		
	}
	
	
	public function minuKuulutusedLoggedOut()
	{
			
		$this->load->view('minuKuulutusedLoggedOut');
		
	}
	
	public function kontakt()
	{
		
		$this->load->view('kontakt');
		
	}

	public function send_data()
	{
		
		$this->load->model('Insert_model');
		$this->Insert_model->saveData();
		
	}

	public function loadCategory()
	{
		
		$this->load->model('Databaseads');
		$data['records']=$this->Databaseads->getData();
		$data['records2']=$this->Databaseads->getSum();
		$data['records3']=$this->Databaseads->getCategoryData();
		
		$this->load->view('kuulutused2',$data);
		
	}
	public function reklaam()
	{
		
		$this->load->view('reklaam');
		
	}
	public function recieve()
	{
		
		$this->load->view('recieve');
		
	}
	public function notrecieved()
	{
		
		$this->load->view('notrecieved');
		
	}
	
	
}
