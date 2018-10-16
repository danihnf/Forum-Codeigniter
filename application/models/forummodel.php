<?php
class forummodel extends CI_Model{ 

	function forummodel()
	{
		parent::__construct();
	}
	function getForumdisplay($limit=''){
			$query=$this->db->query("select  * from fdisplay
			ORDER BY urutan ASC LIMIT $limit");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
	}
	function getForumFill($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,fuser.nama,fthread.id as idforum from fthread 
			left join fuser on fuser.id=fthread.userid		
			where idforum='$id'
			ORDER BY fthread.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getFcontentComment($limit='',$offset='',$id=''){
			$query=$this->db->query("select  *,fuser.nama from fcontent 
			left join fuser on fuser.id=fcontent.user		
			where fcontent.idthread='$id'
			ORDER BY fcontent.id ASC LIMIT $limit,$offset");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getDetailForum($id=''){
	$query=$this->db->query("select  *,fuser.nama from fthread 
			left join fuser on fuser.id=fthread.userid		
			where fthread.id='$id' ");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$mdata[]=$data;
				}
				return $mdata;
			}
	}
	function getForumFillcount($id=''){
			$query=$this->db->query("select  * from fcontent where idforum='$id'");
			return $query->num_rows();
	}
	function getForumFillcountComment($id){
			$query=$this->db->query("select  * from fthread where idforum='$id'");
			return $query->num_rows();
	}	
	function getProp($id=''){
		$query=$this->db->query("select  *,fdisplay.nama as namaforum from fthread 
		left join fdisplay on fdisplay.id=fthread.idforum	
		where idforum='$id'");
		return $query->row();
	}
	
	function saveThread(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$tn=$this->input->post('tn');
		$data=array(
		'idforum'=>$idthread,
		'userid'=>$this->session->userdata('USERID'),
		'isi'=>$isi,
		'judul'=>$tn,
		'tanggal'=>date("Y-m-d")
		); 
		$this->db->trans_start();
		$this->db->insert('fthread',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'home/mforum/'.$idthread);
	}
	function detailThread($id=''){
	
	}
	function saveComment(){
		$idthread=$this->input->post('idthread');
		$isi=$this->input->post('isi');
		$data=array(
		'idthread'=>$idthread,
		'user'=>$this->session->userdata('USERID'),
		'isi'=>$isi,
		'tanggal'=>date("Y-m-d")
		); 
		$this->db->trans_start();
		$this->db->insert('fcontent',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'home/detailThread/'.$idthread);
	}
	function cekuser(){
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$query=$this->db->query("select  * from fuser where username='$u' and password='$p'");
		$cek=$query->num_rows();
		if($cek==0){
			$this->session->set_flashdata('pesan','Username atau pass salah');
			redirect (base_url().'landing');
		} else {
			$data=$query->row();
			$datac=array('LOGIN'=>TRUE,'NAMA'=>$data->nama,'USERID'=>$data->id,'STATUS_LOGIN'=>"$u");
			$this->session->set_userdata($datac);	
			redirect (base_url().'landing/index3');
		}
	}
	function cekdup(){
		$u=$this->input->post('user');
		$query=$this->db->query("select  * from fuser where username='$u'");
		return $query->num_rows();
	}
	function adduser(){
		$n=$this->input->post('nama');
		$u=$this->input->post('user');
		$p=$this->input->post('pass');
		$data=array(
		'nama'=>$n,
		'username'=>$u,
		'password'=>$p,
		); 
		$this->db->trans_start();
		$this->db->insert('fuser',$data);
		$this->db->trans_complete(); 
		redirect (base_url().'landing');
	}
}
 
?>