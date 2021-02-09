<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function model_auth($u,$table)
	{
		$q = $this->db->where($u)->get($table);
		//echo $this->db->last_query(); die;
		if($q->num_rows() > 0){
			//echo '<pre>'; print_r($q->row()); die;
			return $q->row();
		}else{
			return  false;	
		}
	}
	public function get_where_join($table1,$where,$jointbl,$select,$joinKey){
	    $query = $this->db->select($select)->from($table1)->join($jointbl,$table1.'.'.$joinKey.' = '.$jointbl.'.id','left')->where($where)->get();
	    if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}
	public function get_allwith_join($table1,$where,$jointbl,$select,$joinKey){
	    $query = $this->db->select($select)->from($table1)->join($jointbl,$table1.'.'.$joinKey.' = '.$jointbl.'.id','left')->where($where)->get();
	    if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}
	}
	public function insert($table,$data){
        $data['created_at'] = date('Y-m-d H:i:s');
		$query = $this->db->insert($table,$data);
		if($query){
		    $last_id = $this->db->insert_id();
		    return $last_id;
		}else{
		    return false;
		}
	}
	public function update($table,$data,$id){
		$query = $this->db->where('id',$id)->update($table,$data);
		return true;
	}
    public function get_all($table,$where=NULL){
		if(!empty($where)){
			$this->db->where($where);
		}
		$query = $this->db->select('*')->from($table)->order_by("id","DESC")->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return array();
		}
	}
	public function count_all($table){
		$query = $this->db->select('*')->from($table)->get();
		return $query->num_rows();
	}
	public function get_where($table,$where,$select){
		$query = $this->db->select($select)->from($table)->where($where)->get();
    	// print_r($this->db->last_query());die();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}
	public function delete($table,$id){
		$query = $this->db->delete($table,array('id'=>$id));
		return true;
	}
	/*public function checkEmail($table,$email,$id=NULL){
		$query = $this->db->select('*')->from($table)->where('email',$email)->get();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}*/
	/*public function getSetingData(){
		$query = $this->db->select('id,free_days')->from('setting')->get();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}*/
	function std_insert($std_data){
         $res = $this->db->get_where('students', array('email' => $std_data['email']));
         $phone_res = $this->db->get_where('students', array('phone' => $std_data['phone']));
    if ($res->num_rows()  > 0) {
          // email is allready exited
         return 2;
		}
	elseif ($phone_res->num_rows()>0) {
		// phone is allready exited
			return 3;
		}	
    else{
    	$std_sql=$this->db->insert("students",$std_data);
    	// insert student in database 
	     return 1;
      }		
	}
	function update_bhamashah_list($srtd){
		 $orgDate = $srtd['date'];  
          $date = str_replace('-"', '/', $orgDate);  
          $newDate = date("d/m/Y", strtotime($date)); 
		$data=array(
             "name"=>$srtd['fullName'],
             "city"=>$srtd['city'],
             "amount"=>$srtd['amount'],
             "date"=>$newDate,
		);
		$query = $this->db->where('id',$srtd['update_id'])->update("bhamashah",$data);
		return true;
	}
}
