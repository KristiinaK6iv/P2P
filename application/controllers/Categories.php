<?php
class Categories extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    //sellega ajaxi script uuendab kategooriatabelit
    function get_new_category(){
        $title = $this->input->post('type');
        $this->load->model('Databaseads');
        $data = array();
        $data['title'] = $title;
            $data['list'] = $this->Databaseads->getCategoryAjax();
        $this->load->view('category_table', $data);
    }
    //seda kasutame juhul, kui js on välja lülitatud
    public function loadCategoryPage()
    {
        $data['title'] = $this->uri->segment(3);
        $this->load->model('Databaseads');
        $data['records'] = $this->Databaseads->getData();
        $data['records2'] = $this->Databaseads->getSum();
        $data['records3'] = $this->Databaseads->getCategoryData();

        $this->load->view('kategooriadIlmaJs', $data);
    }
    //seda kasutab, et avalehelt kategoorialehele minna, aga kategooriatabeli võtab ajaxiga juurde (teen ümber veel seda)
    public function loadCategory()
    {
        $this->load->model('Databaseads');
        $data['records'] = $this->Databaseads->getData();
        $data['records2'] = $this->Databaseads->getSum();
        $this->load->view('kuulutusedKategooriatega', $data);

    }

}