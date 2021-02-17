<?php 


class AdminModel extends CI_Model
{
	private const Table_Name = 'postingan';

	public function create($data){
		$query = $this->db->insert($this::Table_Name, $data);
		return $query;
	}

	public function delete($id){
		$query = $this->db->where('id',$id)->delete($this::Table_Name);
		return $query;
	}

	public function update($user){
		$this->db->where('id',$user['id'])->update($this::Table_Name,$user);
	}

	public function getAll(){
		$query = $this->db->get($this::Table_Name)->result_array();
		return $query;	

	}

	public function findbyId($id){
		$query = $this->db->from($this::Table_Name)->where('id',$id)->get()->row_array();
		return $query;
	}

	public function findbyJudul($kata)
	{
		$this->db->select('*');
			$this->db->from($this::Table_Name);
			$this->db->like('judul',$kata);
			return $this->db->get()->result_array();
	}

	public function register($data_admin){
		$query = $this->db->insert('admin', $data_admin);
		return $query;
	}

	public function cek_login($data_admin){
		$this->db->from('admin');
		$query=$this->db->where($data_admin);
		return $query;
	}
}


 ?>