<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Library extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("Common_model");
		$this->load->library('form_validation');
	}  
	public function index() 
	{
		$data['title'] = 'Library';
		$data['table'] = 'library';
		$this->load->view("admin/library/list",$data);
	}
	public function library_list()
	{
		$data['title']="Library";
		$data['table']="library";
		header("Access-Control-Allow-Origin: *"); 
		$draw = intval($this->input->get("draw"));
	    $start = intval($this->input->get("start"));
	    $length = intval($this->input->get("length"));
      	$query = $this->Common_model->get_all('book');
      	$data = [];
      	$i = 1;
      	foreach($query as $r) {
      		$deleteButton = '<a  style="text-decoration: none;" data-title ="Confirmation" data-toggle="tooltip" data-placement="top" title="Delete Record" onclick="confirmDelete('.$r->id.')" href="javascript:void(0)" data-original-title="Delet"><i class="fa fa-trash"></i> Delete</a>';
          	$data[] = array(
                $i++,
                ucwords($r->name),
                ucfirst($r->link),
                !empty($r->created_at)?(date('d M, Y',strtotime($r->created_at))):'-',
                '<div class="">
	                <div class="btn-group">
		                <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span></button>
		                <ul class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 48px, 0px);">
			                <li class="dropdown-item">'.$deleteButton.'</li>
		                </ul>
	                </div>
                </div>'
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
	public function delete(){
	  	$id = $this->input->get('id');
	  	$res = $this->Common_model->delete("book",$id);
	  	if($res){
	  		echo 1;
	  	}else{
	  		echo 0;
	  	}
	 }
	/*public function delete_entry(){
		   $id = $this->input->post('id');
		$this->Common_model->delete("bhamashah",$id);
	}*/
	public function create()
	{
		$data['title']="Add Library";
		$this->load->view("admin/library/add",$data);
	}
	public function store()
	{
		$this->form_validation->set_rules('name', 'Book name', 'required');
		$this->form_validation->set_rules('link', 'Book url', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("admin/library/add",$data);
		} else {
			$postData=array(
				"name"=>$this->input->post('name'),
				"link"=>$this->input->post('link'),
			);
			$res = $this->Common_model->insert('book',$postData);
			if($res){
				$response = array('success'=>true, 'message'=>'Great! Info has been added');
			} else {
				$response = array('success'=>false,'message'=>'Oops! Something went wrong');
			}
			echo json_encode($response);
		}
	}
	public function bhamashah_edit()
	{
		$data['title']="Bhamasha List edit";
		$id= $this->input->get('id');
		$dataa=array(
		'id'=>$id,
		);
			$query= $this->db->select("*")->from("bhamashah")->where($dataa)->get();
			$data['result']= $query->result();
		$this->load->view("admin/bhamashah/edit",$data);
	}
	public function get_update_bhamashah(){
         $srtd=$_POST;
		$responce=$this->Common_model->update_bhamashah_list($srtd);
        if($responce){
        	echo "1";
        }
	}
}
