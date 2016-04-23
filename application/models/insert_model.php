<?php

class Insert_model extends CI_Model{
	
	public function saveData(){
		
		$this->load->library('form_validation');
		
		//Rules
		$this->form_validation->set_rules('phone_nr', 'Telefoni number', 'required|numeric');
		$this->form_validation->set_rules('location', 'Asukoht', 'required');
		$this->form_validation->set_rules('category', 'Kategooria', 'required');
		$this->form_validation->set_rules('description', 'Kirjeldus', 'required');
		$this->form_validation->set_rules('begin', 'Alguskuupäev', 'required');
		$this->form_validation->set_rules('end', 'Lõppkuupäev', 'required');
		
		
		//Controlling rules
		if($this->form_validation->run()==FALSE){
			@session_start();
			$this->load->model('Databaseads');
			$data['records8']=$this->Databaseads->get_personal_ads();
			
			if (strpos($_SERVER['HTTP_REFERER'], 'enMinuKuulutused') !== false) {
	 			$this->load->view('en_minuKuulutused',$data);
			}else{
  				$this->load->view('minuKuulutused',$data);
			}
			
			
		}else{
			$data["message"]="Everything is ok";
			$this->load->view('minuKuulutused',$data);
			
			$form=array();
			$form['phone']=$this->input->post('phone_nr');
			$form['category']=$this->input->post('category');
			$form['location']=$this->input->post('location');
			$form['description']=$this->input->post('description');
			$form['begin']=$this->input->post('begin');
			$form['end']=$this->input->post('end');
			
			
			if(self::add($_SESSION['name'],$form['phone'],$form['location'],$_SESSION['email'],$form['category'],$form['description'],$form['begin'],$form['end'])==true){
				echo "";
			}
		}
		
	}
		// Function to add data to db
		function add($name, $number,$location, $e_mail,$category,$description,$begin,$end){
		
		
		// Calling procedure from database
		$stored_procedure = "CALL add_person(?,?,?)";
		$this->db->query($stored_procedure,array('full_name'=>$name,'phone_nr'=>$number,'e_mail'=>$e_mail));
		
		
		// Calling procedure from database
		$stored_procedure = "CALL add_ad(?,?,?,?,?)";
		$this->db->query($stored_procedure,array('category'=>$category,'description'=>$description,'begin'=>$begin,'end'=>$end,'location'=>$location));
		
		if (strpos($_SERVER['HTTP_REFERER'], 'enMinuKuulutused') !== false) {
	 	header("Location: http://localhost/P2P/index.php/welcome/enMinuKuulutused"); /* Redirect browser */
				exit();
		}else{
  			header("Location: http://localhost/P2P/index.php/welcome/minuKuulutused"); /* Redirect browser */
				exit();
		}
  


	}
}

?>