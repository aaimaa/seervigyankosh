<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Common_model");
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->library('form_validation');
		if(! $this->session->userdata("is_user_admin_in"))
		{
			redirect("admin/login");
		} 
	}
	public function index() 
	{
		$data['title'] = 'Student';
		$data['table'] = 'students';
		$data['users_list'] = $this->Common_model->get_all($data['table']);
		$this->load->view("admin/students/list",$data);
	} 
	public function students_list(){
		header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));
      	$query = $this->Common_model->get_all('students');
      	$data = [];
      	$i = 1;
      	foreach($query as $r) {
      		if(!empty($r->profile_image)){
      			if(file_exists('assets/images/user_profile/'.$r->profile_image)){
      				$profile_image = '<img src="'.base_url('assets/images/user_profile/').$r->profile_image.'" alt="Placeholder" style="height: 50px;width: 50px;border-radius: 50px">';
      			}else{
	      			$profile_image = '<img src="'.base_url('assets/images/user_profile/user.png').'" alt="Placeholder" style="height: 50px;width: 50px;border-radius: 50px">';
	      		}
      		}else{
      			$profile_image = '<img src="'.base_url('assets/images/user_profile/user.png').'" alt="Placeholder" style="height: 50px;width: 50px;border-radius: 50px">';
      		}
      		if($r->status == '1'){
 				$status = '<button onclick="changeStatus('.$r->id.',0)" class="btn btn-primary">Approve </button>';
 			}else{
 				$status = '<button onclick="changeStatus('.$r->id.',1)" class="btn btn-danger" >Disapprove</button>';
 			}
      		$deleteButton = '<a  style="text-decoration: none;" data-title ="Confirmation" data-toggle="tooltip" data-placement="top" title="Delete Record" onclick="confirmDelete('.$r->id.')" href="javascript:void(0)" data-original-title="Delet"><i class="fa fa-trash"></i> Delete</a>';
      		$details_url = base_url('admin/students/details/'.$r->id);
      		$showDetailButton = '<a class="" href="' . $details_url . '"  title="Details"><i class="fa fa-eye"></i>  Details</a>';
          	$data[] = array(
                $i++,
                $profile_image,
                ucwords($r->first_name.' '.$r->first_name),
                ucwords($r->fathers_name),
                $r->email,
                $r->graduation,
                $r->city,
                $r->added_by,
                $status,
                !empty($r->created_at)?(date('d M, Y',strtotime($r->created_at))):'-',
                '<div class="">
	                <div class="btn-group">
		                <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span></button>
		                <ul class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 48px, 0px);">
			                <li class="dropdown-item">'.$showDetailButton.'</li>
                            <li class="dropdown-item">'.$deleteButton.'</li>
		                </ul>
	                </div>
                </div>'
           	);
      	}
      	$result = array(
               "draw" => $draw,
                 "recordsTotal" => $this->Common_model->count_all('students'),
                 "recordsFiltered" => $this->Common_model->count_all('students'),
                 "data" => $data
            );
      	echo json_encode($result);
     	exit();
	}
	public function create()
	{
		$data['title'] = 'Add Students';
		$this->load->view("admin/students/add",$data);
	}
	public function store(){
	    //die('store');
	    header("Access-Control-Allow-Origin: *");
	    $data['title'] = "Add Student";
			//echo '<pre>'; print_r($this->input->post()); die;
    	$this->form_validation->set_rules('name', 'First name', 'required');
    	$this->form_validation->set_rules('last_name', 'Last name', 'required');
    	$this->form_validation->set_rules('fathers_name', 'Fathers name', 'required');
    	$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone number', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('graduation', 'Graduation', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("admin/students/add",$data);
		} else {
			$user_profile = '';
			// echo '<pre>'; print_r($_FILES['user_profile']); die;
			$files = $_FILES['user_profile']['name'];
			if(!empty($files)){
				$config = [
					'upload_path' => "assets/images/user_profile/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000",
					//'max_height' => "768",
					'max_width' => "1024",
					'remove_spaces' => TRUE,
					'encrypt_name' => TRUE
				];
		           // echo '<pre>'; print_r($config); die;
        		$this->load->library('upload', $config);
		        if (!$this->upload->do_upload('user_profile')) {
		            $error = array('error' => $this->upload->display_errors());
		            echo '<pre>'; print_r($error); die;
		            $this->session->set_flashdata("msg", "Field to upload file!");
		            $this->load->view("admin/students/add",$data);
		        } else {
		        	$data = array('upload_data' => $this->upload->data());
		            $user_profile = $data['upload_data']['file_name'];
		        }
			}
			$postArray = array(
				"first_name"=>$this->input->post('name'),
				"last_name"=>$this->input->post('last_name'),
				"fathers_name"=>$this->input->post('fathers_name'),
				"city"=>$this->input->post('city'),
				"email"=>$this->input->post('email'),
				"phone"=>$this->input->post('phone'),
				"address"=>$this->input->post('address'),
				"graduation"=>$this->input->post('graduation'),
                "description"=>$this->input->post('description'),
				"password"=>md5($this->input->post('c_password')),
                "date"=>$this->input->post('date'),
				"status"=>"1",
                "added_by" => "Admin",
				"profile_image"=>$user_profile,
			);
			//echo '<pre>'; print_r($postArray); die;
			$res = $this->Common_model->insert('students',$postArray);
			if($res){
				$response = array('success'=>true, 'message'=>'Great! Info has been added');
			} else {
				$response = array('success'=>false,'message'=>'Oops! Something went wrong');
			}
			echo json_encode($response);
		}
	}
	public function updateStatus(){
	  	$id = $this->input->get('id');
	  	$status = $this->input->get('status');
	  	$res = $this->Common_model->update('students',array('status'=>$status),$id);
    // echo $this->db->last_query(); die;
	  	if($res){
	  		echo 1;
	  	}else{
	  		echo 0;
	  	}
	}
  	public function delete(){
	  	$id = $this->input->get('id');
	  	$res = $this->Common_model->delete("students",$id);
	  	if($res){
	  		echo 1;
	  	}else{
	  		echo 0;
	  	}
	 }
  	public function details($id){
	  	$data['title'] = 'Students Details';
	  	$data['result'] = $this->Common_model->get_where('students',array('id'=>$id),'*');
	  	$data['packageDetails'] =  array();
  		$this->load->view("admin/students/details",$data);
  	}
	public function edit($id){
		$data['title'] = 'Edit Customer';
		$select = 'id,fullName,email,username,status,createdAt';
		$data['result'] = $this->Common_model->get_where('customer',array('id'=>$id),$select);
		$this->load->view("admin/student/edit",$data);
	}
/*
	public function update_customer($id){
        header("Access-Control-Allow-Origin: *");
		$data['title'] = 'Edit Customer';
		$select = 'id,fullName,email,username,status,createdAt';
		$data['result'] = $this->Common_model->get_where('customer',array('id'=>$id),$select);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullName', 'Full Name', 'required');
		if ($this->form_validation->run() == FALSE) {
			$errors = validation_errors();
			redirect('admin/student/edit/'.$id)->with($errors);
		} else {
			$postData['fullName'] = $this->input->post('fullName');
			$res = $this->Common_model->update('customer',$postData,$id);
			if($res)
			{
				$this->session->set_flashdata("msg", "Customer updated successfully");
				redirect("admin/student/list");
			}
			else
			{
				$this->session->set_flashdata("msg", "Failed to update customer");
				redirect("admin/student/edit/$id");
			}
		}
	}
	public function checkEmail($email){
		return $this->Common_model->checkEmail('customer',$email);
	}
// Update user Status
	public function updateStatus1(){
		$where=array(
			"id"=>$_POST['id'],
		);
		$query = $this->db->select('status')->from('students')->where($where)->get();
		if($query->num_rows() > 0){
			$result=$query->row();
			if ($result->status=="1") {
				$array=array(
					'status'=>'0',
				);
				$query = $this->db->where($where)->update('students',$array);
			}
			else{
				$array=array(
					'status'=>'1',
				);
				$query = $this->db->where($where)->update('students',$array);
			}
		}
	}
  public function add_student_show(){
  	$data['title']="Student Add";
       $this->load->view("admin/student/add",$data);
  }
  public function get_add_student(){
  	$temp = explode('.', $_FILES["user_profile"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
		$std_data=array(
              "first_name"=>$_POST['name'],
              "last_name"=>$_POST['last_name'],
              "email"=>$_POST['email'],
              "phone"=>$_POST['phone'],
              "address"=>$_POST['address'],
              "graduation"=>$_POST['graduation'],
              "password"=>md5($_POST['c_password']),
              "terms"=>$_POST['terms_c'][0],
              "status"=>"1",
              "created_at"=>date("M,d,Y h:i:s A") . "\n",
              "profile_image"=>$newfilename,
		);
       $response=$this->Common_model->std_insert($std_data);
        print_r($response);
       if ($response>0) {
       	  $name = $newfilename;
          $target_dir = "./assets/images/user_profile/";
         $target_file = $target_dir . basename($newfilename);
         // print_r($target_file);
       	  move_uploaded_file($_FILES['user_profile']['tmp_name'],$target_dir.$name);
       }
  }
*/
/*--------------------------------End--------------------------------------*/
}
?>