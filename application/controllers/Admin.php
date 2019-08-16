<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function index()
	{   $data['content'] = 'admin';
        $this->load->view('layout/include.php',$data);
        
    }
    public function t404(){
        $data['content'] = 'admin/404';
        $this->load->view('layout/include.php',$data);
    }
   
    public function table(){
        $data['content'] = 'admin/tables';
        $this->load->view('layout/include.php',$data);
    }
    public function blank(){
        $data['content'] = 'admin/blank';
        $this->load->view('layout/include.php',$data);
    }
    public function buttons(){
        $data['content'] = 'admin/buttons';
        $this->load->view('layout/include.php',$data);
    }
    public function cards(){
        $data['content'] = 'admin/cards';
        $this->load->view('layout/include.php',$data);
    }
    public function charts(){
        $data['content'] = 'admin/charts';
        $this->load->view('layout/include.php',$data);
    }
    public function forgot_password(){
        $data['content'] = 'admin/forgot_password';
        $this->load->view('layout/include.php',$data);
    }
    public function login(){
        $data['content'] = 'admin/login';
        $this->load->view('layout/include.php',$data);
    }
    public function register(){
        $data['content'] = 'admin/register';
        $this->load->view('layout/include.php',$data);
    }
    public function utilities_animation(){
        $data['content'] = 'admin/utilities_animation';
        $this->load->view('layout/include.php',$data);
    }
    public function utilities_border(){
        $data['content'] = 'admin/utilities_border';
        $this->load->view('layout/include.php',$data);
    }
    public function utilities_color(){
        $data['content'] = 'admin/utilities_color';
        $this->load->view('layout/include.php',$data);
    }
    public function utilities_other(){
        $data['content'] = 'admin/utilities_other';
        $this->load->view('layout/include.php',$data);
    }
    function fetch_user(){  
        $this->load->model("admin_model");  
        $fetch_data = $this->admin_model->make_datatables();
        $data = array();  
        foreach($fetch_data as $row)  
        {  
             $sub_array = array();  
             $sub_array[] = $row->id;  
             $sub_array[] = $row->name;  
             $sub_array[] = $row->email;
             $sub_array[] = $row->number;
             $sub_array[] = $row->msg;  
             $data[] = $sub_array;  
        }  
        $output = array(  
             "draw"                      =>     intval($_POST["draw"]),  
             "recordsTotal"              =>     $this->admin_model->get_all_data(),  
             "recordsFiltered"           =>     $this->admin_model->get_filtered_data(),  
             "data"                      =>     $data  
        );  
        echo json_encode($output);  
   }





    
        
}