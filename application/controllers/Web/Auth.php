<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("common_model");
		$this->load->library('form_validation');		
	}  
	public function page404(){
		$data['title']="404 Error Page";
		$this->load->view('web/404',$data);
	}
	public function user_login(){
		$this->load->view("web/login");
	}
	public function register(){
		$data['title']="Register";
		$this->load->view("web/register",$data);
	}
	public function get_register(){
		$temp = explode(".", $_FILES["user_profile"]["name"][0]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (!empty($_FILES["user_profile"]["name"][0])) {
			$std_data=array(
              "first_name"=>$_POST['firstName'],
              "last_name"=>$_POST['lastName'],
              "email"=>$_POST['email'],
              "phone"=>$_POST['phone'],
              "address"=>$_POST['address'],
              "graduation"=>$_POST['job'],
              "password"=>md5($_POST['c_password']),
              "terms"=>$_POST['terms_c'][0],
              "status"=>"1",
              "created_at"=>date("M,d,Y h:i:s A") . "\n",
              "profile_image"=>$newfilename,
		);
			    $response=$this->common_model->std_insert($std_data);
        print_r($response);
       if ($response>0) {
       	  $name = $newfilename;
          $target_dir = "./assets/images/user_profile/";
         $target_file = $target_dir . basename($newfilename);
       	  move_uploaded_file($_FILES['user_profile']['tmp_name'][0],$target_dir.$name);
       }
}
else{
		$std_data=array(
              "first_name"=>$_POST['firstName'],
              "last_name"=>$_POST['lastName'],
              "email"=>$_POST['email'],
              "phone"=>$_POST['phone'],
              "address"=>$_POST['address'],
              "graduation"=>$_POST['job'],
              "password"=>md5($_POST['c_password']),
              "terms"=>$_POST['terms_c'][0],
              "status"=>"1",
              "created_at"=>date("M,d,Y h:i:s A") . "\n",
              "profile_image"=>"user.png",
		);
		    $response=$this->common_model->std_insert($std_data);
        print_r($response);
}
	}
   public function do_login(){
   	  if (is_numeric($_POST['email'])) {
   	  	  $do_login=array(
         "phone"=>$_POST['email'],
         "password"=>md5($_POST['pass']),
   	  );
            	  $response=$this->common_model->do_login_match($do_login);
				      if($response->status=='1'){
						               if ($response) {
						      	   echo "1";
								    $user_array=array(
								          "id"=>$response->id,
									  );	 
									   $this->session->set_userdata('user_id',$user_array);
						      }
						      else{
						         echo "0";
						      }      	
				      }
				      else{
				      	echo "4";
				      }
   	  }else{
   	  	  $do_login=array(
         "email"=>$_POST['email'],
         "password"=>md5($_POST['pass']),
   	  );
   	          	  $response=$this->common_model->do_login_match($do_login);
				      if($response->status=='1'){
						    if ($response) {
						      	   echo "1";
								    $user_array=array(
								          "id"=>$response->id,
									  );	 
									   $this->session->set_userdata('user_id',$user_array);
						      }
						      else{
						         echo "0";
						      }      	
				      }
				      else{
				      	echo "4";
				      }
   	  }
   }
   public function logout(){
   	   $this->session->sess_destroy();
   	   redirect("home");
   }
}
