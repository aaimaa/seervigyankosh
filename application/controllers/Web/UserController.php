<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
   
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Common_model");
		$this->load->library('form_validation');

		/*if(!$this->session->userdata("is_user_in"))
    {
      return redirect("login");
    }*/
	}

  public function login()
  {
    if($this->session->userdata("is_user_in"))
    {
      return redirect("library");
    }
    $this->load->view("web/login");
  }

  /*
    *@Description: For post login
    *Creted By: Shraddha Choyal
  */
  public function do_login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('pass', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view("admin/login");
      
    } else {
      $u=$this->input->post("email");
      $p=md5($this->input->post("pass"));

      if (is_numeric($_POST['email'])) {
        $loginData = array("phone" => $u, "password" => $p);

      }else{
        $loginData = array("email" => $u, "password" => $p);
      }

      $obj = $this->Common_model->model_auth($loginData,'students');
      
      if($obj)
      {
        if($obj->password == $p)
        {     
          if($obj->status == 1)
          {
            $this->session->set_userdata("is_user_in", $obj);
            $response = array('success' => true, 'message' => 'Login success!');
          }else{
            $response = array('success' => false, 'message' => 'Your account is not Approved! Pleas contact to administrator');
          }
        } else {
          $response = array('success' => false, 'message' => 'Looks like the password is incorrect !');
        }
      } else{
        $response = array('success' => false, 'message' => 'Looks like the credentials are invalid !');
      }
      echo json_encode($response);
    }
  }


  /*
    *@Description: For view user profile
    *Creted By: Shraddha Choyal
  */
  public function userProfile()
  {
    if(!$this->session->userdata("is_user_in"))
    {
      return redirect("login");
    } 
    $data['title'] = "User Profile";
    $userId = $this->session->userdata('is_user_in')->id;
    $select = 'id,first_name,last_name,fathers_name,email,phone,city,address,graduation,status,profile_image,created_at';
    $data['result'] = $this->Common_model->get_where('students',['id'=>$userId],$select);
    
    $this->load->view("web/user_profile",$data);
  }


  /*
    *@Description: For show registered page
    *Creted By: Shraddha Choyal
  */
  public function register(){
    $data['title']="Register";
    $this->load->view("web/register",$data);
  }

  /*
    *@Description: For registered new user
    *Creted By: Shraddha Choyal
  */
  public function post_register()
  {
    header("Access-Control-Allow-Origin: *");
      
    $data['title'] = 'Add Customer';
    $this->form_validation->set_rules('firstName', 'First name', 'required');
    $this->form_validation->set_rules('lastName', 'Last name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[students.email]');
    $this->form_validation->set_rules('phone', 'Phone number', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('job', 'Graduation', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('c_password', 'Confirm password', 'required');

    if ($this->form_validation->run() == FALSE) {
      
      $this->load->view("web/register",$data);
    } else {

      $postData = array(
        "first_name"=>$this->input->post('firstName'),
        "last_name"=>$this->input->post('lastName'),
        "email"=>$this->input->post('email'),
        "phone"=>$this->input->post('phone'),
        "address"=>$this->input->post('address'),
        "graduation"=>$this->input->post('job'),
        "password"=>md5($this->input->post('c_password')),
        "status"=>"0",
        "created_at"=>date("Y-m-d h:i:s"),
        //"profile_image"=>$newfilename,
      );
      $res = $this->Common_model->insert('students',$postData);
      if($res){
        $response = array('success'=>true, 'message'=>'Great! User has been successfully registered');
      } else {
        $response = array('success'=>false,'message'=>'Oops! Something went wrong');
      }
      echo json_encode($response);
    }
    
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect("home");
  }

  public function library()
  {
    if(!$this->session->userdata("is_user_in"))
    {
      return redirect("login");
    }
		$data['title'] = "Library";
    $data['result'] = $this->Common_model->get_all('book');
    $this->load->view("web/E-library",$data);
	}

	public function library_list(){
		$data['title']="Library";
        header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));

      	$query = $this->Common_model->get_all('book');
      	$data = [];
      	$i = 1;
      	foreach($query as $r) {
      		$data[] = array(
                $i++,
                ucwords($r->name),
                '<a href="'.$r->link.'" target="_blank">'.$r->link.'</a>'
           	);
      	}

      	$result = array(
               "draw" => $draw,
                 "recordsTotal" => $this->Common_model->count_all('book'),
                 "recordsFiltered" => $this->Common_model->count_all('book'),
                 "data" => $data
            );
      	echo json_encode($result);
     	exit();
	}  

}

