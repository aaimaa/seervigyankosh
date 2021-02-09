<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("common_model");
		$this->load->library('form_validation');
		
	} 

	public function index()
	{//print_r($this->session->userdata("is_user_admin_in")); die;
		if($this->session->userdata("is_user_admin_in"))
		{
			return redirect("admin/dashboard");

		}
		$this->load->view('admin/login');
	}

	function post_login()
	{
	    $this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view("admin/login");
			
		} else {
		
    		$u=$this->input->post("email");
    		$p=md5($this->input->post("password"));
    		$loginData = array("email" => $u, "password" => $p);
    		$obj=$this->common_model->model_auth($loginData,'admin');
    
    		if($obj)
    		{
    			if($obj->password==$p)
    			{
    				$this->session->set_userdata("is_user_admin_in", $obj);
    				$this->session->set_flashdata("msg", "Your are successful login !");
    				return redirect("admin/dashboard");
    			}
    			else
    			{
    				$this->session->set_flashdata("msg", "Password incorrect!");
    				return redirect("admin")->with("Password incorrect!");
    			}
    		}
    		else{
    				$this->session->set_flashdata("msg", "Username & Password incorrct !");
    				return redirect("admin");
    		}
	    }
	}

	public function dashboard()
	{
		if(!$this->session->userdata("is_user_admin_in"))
		{
			return redirect("admin/login");
		}	

		$data['title'] = "Dashboard";
		// $data['total_due'] = $this->common_model->total_amount('finance','due_amount');
		$data['bhamashah'] = $this->common_model->count_all('bhamashah');
		$data['students'] = $this->common_model->count_all('students');
		$this->load->view('admin/dashboard',$data);
	}

	public function query() 
	{
		$data['title'] = 'Query';
	
		$this->load->view("admin/query-list",$data);
	}
	public function query_list()
	{
		header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));

      	$query = $this->common_model->get_all('query');
      	$data = [];
      	$i = 1;
      	foreach($query as $r) {
      		
          	$data[] = array(
                $i++,
                ucwords($r->name),
                ucfirst($r->query)
           	);
      	}

      	$result = array(
               "draw" => $draw,
                 "recordsTotal" => $this->common_model->count_all('bhamashah'),
                 "recordsFiltered" => $this->common_model->count_all('bhamashah'),
                 "data" => $data
            );
      	echo json_encode($result);
     	exit();
	}

	public function profile()
	{
		$data['title'] = 'Profile';
		// $data['result'] = $this->session->userdata("is_user_admin_in");
		$data['table'] = 'admin';
		  $data['result']= $this->common_model->get_all($data['table']);
		   // print_r($data['admin_Data']);die();
		$this->load->view("admin/profile",$data);
	}

	public function update_profile()
	{
		$id = $this->input->post('id');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Full Name', 'required');

		if ($this->form_validation->run() == FALSE) {

			$data['title'] = 'Profile';
			$data['result'] = $this->session->userdata("is_user_admin_in");
			
			$this->load->view("admin/profile",$data);
			
		} else {
  
			$postData['name'] = $this->input->post('name');
			$postData['email'] = $this->input->post('email');
			$postData['mobile_number'] = $this->input->post('mobile_number');
			//echo '<pre>'; print_r($postData); die;
			
			$update = $this->common_model->update('admin',$postData,$id);
    //echo $this->db->last_query(); die;
			if($update) {
				$select = 'id,name,email,mobile_number,password,created_at';
				$obj = $this->common_model->get_where('admin',array('id'=>$id),$select);
				$response = array('success'=>true, 'message'=>'Great! Profile has been updated successfully');
			} else {
				$response = array('success'=>false,'message'=>'Oops! Something goes to wrong. Please try again');
			}

			echo json_encode($response);
		}
	}

	public function update_password(){

		$id = $this->input->post('id');
		$password = $this->input->post('password');
		$conf_password = $this->input->post('confirm_password');

		$this->load->library('form_validation');
		
		if(!empty($password && $conf_password)){
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		}

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Profile';
			$data['result'] = $this->session->userdata("is_user_admin_in");
			
			$this->load->view("admin/profile",$data);
			
		}else{

			$postData['password'] = md5($password);
			
			$update = $this->common_model->update('admin',$postData,$id);

			if($update) {
				$response = array('success'=>true, 'message'=>'Great! Profile has been updated successfully');
			} else {
				$response = array('success'=>false,'message'=>'Oops! Something goes to wrong. Please try again');
			}

			echo json_encode($response);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect("admin/login");
	}
}
  