<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poll extends CI_Controller
{
    public function msg()
    {
        $this->load->model('Databaseads');
        $data['count'] = $this->Databaseads->getCountAll();
        $this->load->view('msgrv', $data);
    }
}
