<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class WelcomeController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Common_model");
		$this->load->library('form_validation');
		//echo "Hellow....welcome web/c."."<br>"; die;
	}  
	 public function switchLang($language = "") {
    $this->session->set_userdata('site_lang', $language);
	header('Location: http://seervigyankosh.com/');
  }
	public function page404(){
		$data['title']="404 Error Page";
		$this->load->view('web/404',$data);
	}
	public function index()
	{
		$this->session->set_userdata('site_lang',  "english");
		$data['title']="Home";
		$this->load->view('web/home',$data);
	}
    public function about_us()
	{
		$data['title']="About Us";
		$this->load->view('web/about',$data);
	}
	public function blog()
	{
		$data['title']="Blog Page";
		$this->load->view('web/blog',$data);
	}
	public function business()
	{
		$data['title']="Business";
		$this->load->view('web/business',$data);
	}
	public function coming_soon()
	{
		$data['title']="Coming Soon";
		$this->load->view('web/coming_soon',$data);
	}
   public function Communication()
	{
		$data['title']="Communication";
		$this->load->view('web/Communication',$data);
	}
  public function contact()
	{
		$data['title']="Contact Us....";
		$this->load->view('web/contact',$data);
	}
  public function course_details()
	{
		$data['title']="Course Details";
		$this->load->view('web/course_details',$data);
	}
	public function faq()
	{
		$data['title']="Faqs";
		$this->load->view('web/faq',$data);
	}	
	public function gallery()
	{
		$data['title']="Gallery";
		$this->load->view('web/gallery',$data);
	}
	public function admission_form()
	{
		$data['title']="Admission From";
		$this->load->view('web/admission_form',$data);
	}	
	public function language()
	{
		$data['title']="Language";
		$this->load->view('web/language',$data);
	}
	public function photography()
	{
		$data['title']="Photography";
		$this->load->view('web/photography',$data);
	}	
   public function single_page()
	{
		$data['title']="Single Page";
		$this->load->view('web/single_page',$data);
	}
   public function social_media()
	{
		$data['title']="Social Media";
		$this->load->view('web/social_media',$data);
	}					
	public function yojanaye()
	{
		$data['title'] = "Yojanaye";
		$this->load->view('web/yojanaye',$data);
	}
	public function bhamashah()
	{
		$data['title'] = "Bhamashah";
		$this->load->view('web/bhamashah',$data);
	}
	public function bhamashah_list()
	{
		$data['title']="Bhamashah";
		$data['table']="bhamashah";
		header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));
      	$query = $this->Common_model->get_all('bhamashah');
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
      		$deleteButton = '<a  style="text-decoration: none;" data-title ="Confirmation" data-toggle="tooltip" data-placement="top" title="Delete Record" onclick="confirmDelete('.$r->id.')" href="javascript:void(0)" data-original-title="Delet"><i class="fa fa-trash"></i> Delete</a>';
      		if(!empty($r->date)){
      			$date = ($r->date == '0000-00-00')?('-'):($r->date);
      		}else{
      			$date = $r->date;
      		}
          	$data[] = array(
                $i++,
                // ucwords($r->add_id),
                ucwords($r->name),
                ucfirst($r->city),
                $r->amount,
                $date
           	);
      	}
      	$result = array(
               "draw" => $draw,
                 "recordsTotal" => $this->Common_model->count_all('bhamashah'),
                 "recordsFiltered" => $this->Common_model->count_all('bhamashah'),
                 "data" => $data
            );
      	echo json_encode($result);
     	exit();
	}
	public function padaadhikari()
	{
		$data['title'] = "Padaadhikari";
		$this->load->view('web/padaadhikari',$data);
	}
	public function labharthi()
	{
		$data['title'] = "Labharthi";
		$this->load->view('web/labharthi',$data);
	}
	public function labharthi_list()
	{
		$data['title']="labharthi";
		$data['table']="labharthi";
		header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));
		$where = array('status' => 1);
		$query = $this->Common_model->get_all('students',$where);
      	$data = [];
      	$i = 1;
      	foreach($query as $r) {
      		if(!empty($r->date)){
      			$date = ($r->date == '0000-00-00')?('-'):($r->date);
      		}else{
      			$date = $r->date;
      		}
          	$data[] = array(
                $i++,
                // ucwords($r->add_id),
				ucwords($r->first_name.' '.$r->last_name),
                ucwords($r->fathers_name),
                ucfirst($r->phone),
                ucfirst($r->city),
				ucfirst($r->email),
                $r->graduation,
                $date
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
	public function meeting()
	{
		$data['title'] = "Meeting";
		$this->load->view('web/meeting',$data);
	}
    public function software()
	{
		$data['title'] = "Software";
		$this->load->view('web/software',$data);
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
			    $response=$this->Common_model->std_insert($std_data);
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
		    $response=$this->Common_model->std_insert($std_data);
        print_r($response);
}
	}
   public function do_login(){
   	  if (is_numeric($_POST['email'])) {
   	  	  $do_login=array(
         "phone"=>$_POST['email'],
         "password"=>md5($_POST['pass']),
   	  );
            	  $response=$this->Common_model->do_login_match($do_login);
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
   	          	  $response=$this->Common_model->do_login_match($do_login);
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
  public function penalty_list(){
		header("Access-Control-Allow-Origin: *");
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));
	    //$select = 'finance.*,customers.name,mobile_number';
      	// $where = array('penalty >' => 0,'finance.deleted_at'=>NULL);
      	$query = $this->Common_model->show_listing();
      	// echo '<pre>'; print_r($query); die;
      	$data = [];
      	$i = 1;      	
      	foreach($query as $r) {
          	$data[] = array(
                $i++,
                $r->name,
                $r->city,
                $r->amount,
           	);
      	}
      	$data['table']="bhamashah";
      	$result = array(
               "draw" => $draw,
                 "recordsTotal" => $this->Common_model->count_all($data),
                 "recordsFiltered" => $this->Common_model->count_all($data),
                 "data" => $data,
            );
      	echo json_encode($result);
     	exit();
	}
   public function logout(){
   	   $this->session->sess_destroy();
   	   redirect("home");
   }
}
