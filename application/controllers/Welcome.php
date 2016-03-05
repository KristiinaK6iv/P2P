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
			
		$this->load->view('welcome_message');
		
	}
	
	public function kuulutused()
	{
		
		$this->load->model('databaseAds');
		$data['records']=$this->databaseAds->getData();
		$data['records2']=$this->databaseAds->getSum();
		
		$this->load->view('kuulutused',$data);
		
	}
	
	public function KKK()
	{
			
		$this->load->view('KKK');
		
	}
	
	public function minuKuulutused()
	{
			
		$this->load->view('minuKuulutused');
		
	}
	
	public function kontakt()
	{
		
		$this->load->view('kontakt');
		
	}

	public function send_data()
	{
		
		$this->load->model('insert_model');
		$this->insert_model->saveData();
		
	}

	public function loadCategory()
	{
		
		$this->load->model('databaseAds');
		$data['records']=$this->databaseAds->getData();
		$data['records2']=$this->databaseAds->getSum();
		$data['records3']=$this->databaseAds->getCategoryData();
		
		$this->load->view('kuulutused2',$data);
		
	}

}
