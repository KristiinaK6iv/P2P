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
		session_start();
		$this->load->model('Databaseads');
		$data['records8']=$this->Databaseads->get_personal_ads();
		$this->load->view('minuKuulutused',$data);
		
	}
	
	public function KKK()
	{
		
		$title['title'] = 'P2P - KKK';
		$this->load->view('ylaosa2',$title);
		$this->load->view('KKK');
		
	}

	public function sisukaart()
	{

		$this->load->view('sitemap');

	}
	
	
	public function minuKuulutusedLoggedOut()
	{
		$title['title'] = 'P2P - Minu kuulutused';
		$this->load->view('ylaosa',$title);	
		$this->load->view('minuKuulutusedLoggedOut');
		
	}
	
	public function kontakt()
	{
		$title['title'] = 'P2P - Kontakt';
		$this->load->view('ylaosa',$title);
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
		$title['title'] = 'P2P - Reklaam';
		$this->load->view('ylaosa',$title);
		$this->load->view('reklaam');
		
	}
	public function recieve()
	{
		$title['title'] = 'P2P - Reklaam';
		$this->load->view('ylaosa',$title);
		$this->load->view('recieve');
		
	}
	public function notrecieved()
	{
		$title['title'] = 'P2P - Reklaam';
		$this->load->view('ylaosa',$title);
		$this->load->view('notrecieved');
		
	}
	public function enAvaleht(){
		
		$this->load->view('en_avaleht');
	}
	public function enKoikKuulutused()
	{
		
		$this->load->view('en_koikKuulutused');
	}
	public function enKontakt()
	{
		$title['title'] = 'P2P - Contact';
		$this->load->view('en_ylaosa',$title);
		$this->load->view('en_kontakt');
	}
	public function enReklaam()
	{
		$title['title'] = 'P2P - Commercial';
		$this->load->view('en_ylaosa',$title);
		$this->load->view('en_reklaam');
	}
	public function enKKK()
	{
		$title['title'] = 'P2P - Q&A';
		$this->load->view('en_ylaosa',$title);
		$this->load->view('en_KKK');
	}
	public function enMinuKuulutused()
	{
		session_start();
		$this->load->model('Databaseads');
		$data['records8']=$this->Databaseads->get_personal_ads();
		$this->load->view('en_minuKuulutused',$data);
	}
	public function enMinuKuulutusedLoggedout()
	{
		$title['title'] = 'P2P - My ads';
		$this->load->view('en_ylaosa',$title);
		$this->load->view('en_minuKuulutusedLoggedout');	
	}
	public function enAlaosa()
	{
		$this->load->view('en_alaosa');
	}
	public function enSisukaart()
	{
		$this->load->view('en_sitemap');
	}
	
	
}
