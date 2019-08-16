<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
	public function index()
	{

        $this->load->view('home/header');
        $this->load->view('home');
        $this->load->view('home/footer');
        }
        public function send_rec(){

                echo 'working';
            }
        // public function submit(){
        //         $result = $this->m->submit();
        //         if($result){
        //             alert("added");
        //         }
        //         else{
        //             alert("fail");
        //         }
        //     }
        public function insert_data(){
                $data = array(
                 "name" => $this->input->post("name"),
                 "email" => $this->input->post("email"),
                 "number" => $this->input->post("phone"),
                 "msg" => $this->input->post("message")
                );
                // print_r($data);
                
                
                $this->db->insert('customers',$data);
        }
}