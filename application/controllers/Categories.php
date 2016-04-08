<?php
class Categories extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
		$title['title'] = 'P2P - Avaleht';
		$this->load->view('ylaosa',$title);
        $this->load->view('avaleht');
    }
    public function en()
    {
		$title['title'] = 'P2P - Main page';
		$this->load->view('en_ylaosa',$title);
        $this->load->view('en_avaleht');
    }

    //sellega ajaxi script uuendab kategooriatabelit
    function get_new_category(){
        $title = $this->input->post('type');
        if ($title == "Opetamine") {
            $title = "Õpetamine";
        }
        $this->load->model('Databaseads');
        $data = array();
        $data['title'] = $title;
            $data['list'] = $this->Databaseads->getCategoryAjax();
        $this->load->view('category_table', $data);
    }
    //seda kasutame juhul, kui js on välja lülitatud
    public function categoryPage()
    {   $title = $this->uri->segment(3);
        if ($title == "Opetamine") {
            $title = "Õpetamine";
        }
        $data['title']  = $title;
        $this->load->model('Databaseads');
        $data['records3'] = $this->Databaseads->getCategoryData();

        $this->load->view('kategooriadIlmaJs', $data);
    }
    public function enCategoryPage()
    {   $title = $this->uri->segment(3);
        if ($title == "Opetamine") {
            $title = "Õpetamine";
        }
        $data['title']  = $title;
        $this->load->model('Databaseads');
        $data['records3'] = $this->Databaseads->getCategoryData();

        $this->load->view('en_kategooriadIlmaJs', $data);
    }
    //seda kasutab, et kõiki kuulutusi laadida Kõigi kuulutuste lehel
    public function all()
    {
        $this->load->model('Databaseads');
        $data['records'] = $this->Databaseads->getData();
        $data['records2'] = $this->Databaseads->getSum();
		$data['records6']=$this->Databaseads->getCityStatistic();
		$title['title'] = 'P2P - Kõik kuulutused';
		$this->load->view('ylaosa',$title);
        $this->load->view('koikKuulutused', $data);

    }
     public function allEn()
    {
        $this->load->model('Databaseads');
        $data['records'] = $this->Databaseads->getData();
        $data['records2'] = $this->Databaseads->getSum();
		$data['records6']=$this->Databaseads->getCityStatistic();
		$title['title'] = 'P2P - Ads';
		$this->load->view('en_ylaosa',$title);
        $this->load->view('en_koikKuulutused', $data);
	
    }

}
