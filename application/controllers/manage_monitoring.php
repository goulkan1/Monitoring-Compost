<?php

 
class Manage_monitoring extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_monitoring');
    } 

  
    function index()
    {
		
		$this->load->model('model_monitoring','monitoring');
		$data['monitoring'] = $this->model_monitoring->get_all_monitoring();
        
        $data['_view'] = 'pemilik/monitoring/index';
        $this->load->view('layout',$data);
    }

    
   
    
}
