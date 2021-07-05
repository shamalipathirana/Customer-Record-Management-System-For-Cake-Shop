<?php
   class Register extends CI_Controller{
       public function __construct(){
           parent::__construct();
           $this->load->database();
           $this->load->model('Reg_Model');
           $this->load->helper(array('form'));
           $this->load->library(array('form_validation'));
           $this->load->library('pdf');

          
           
       }
       public function savedata(){

        $this->form_validation->set_rules('name','Full Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('mobile','Mobile Number','required');
       
        if($this->form_validation->run()==FALSE){
            $this->load->view('register');
        }
         else{

            if($this->input->post('save')){
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');
                
                $this->Reg_Model->saverecords($name,$email,$mobile);
                $this->load->helper('url');
           redirect("register/login");
            }
         }
       }    
	public function displaydata(){
		 $result['data']=$this->Reg_Model->display_users();
           $this->load->view('display_users',$result);

           if($this->input->post('report')){
            $html_content='<center><h3>User Details Report</h3>';
            $html_content.=$this->Reg_Model->fetchUserDetails();
            $html_content.='</center>';
            $this->pdf->loadHtml($html_content);
            $this->pdf->render();
            $this->pdf->stream("report.pdf",array("Attachment"=>0));
        }
           if($this->input->post('back')){
            $this->load->helper('url');
            redirect("register/savedata");
        }
	}
	public function deletedata(){
		$id=$this->input->get('id');
		$this->Reg_Model->delete_users($id);
		redirect("register/displaydata");
	}
	public function updatedata(){
		$id=$this->input->get('id');
		$result['data']=$this->Reg_Model->displayusersbyid($id);
		$this->load->view('update',$result); 
		if($this->input->post('update')){
			$id=$this->input->get('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$this->Reg_Model->update_users($id,$name,$email,$mobile);
			echo "Record saved successfully";
			

		}

}
} 
?>