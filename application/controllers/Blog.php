<?php 

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('AdminModel');
		$this->load->library('session');
	}

	public function update($id){
		

		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');

		$user = array(
			'id'=>$id,
			'judul' => $judul,
			'isi' => $isi
		);

		$this->AdminModel->update($user);
		redirect('blog/admin');
	}

	public function post_update($id){
		$data['user']=$this->AdminModel->findbyId($id);
		$this->load->view('view_admin/edit_admin',$data);
	}

	public function delete($id){
		if ($this->AdminModel->delete($id)) {
			redirect('blog/admin');
		}
	}
	public function create(){
		if(empty($this->session->userdata('username'))){
        echo '<script>alert("Silahkan login dahulu untuk mengakses data.");window.location.href="'.base_url('blog/login').'";</script>';
    	}
    	
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');


		$data = array(
			'judul'=>$judul,
			'isi'=>$isi
		);

		if ($this->AdminModel->create($data)) {
			redirect('blog/admin');
		}
	}

	public function read_more($id){
		$data['user']=$this->AdminModel->findbyId($id);
		$this->load->view('view_user/user_read_more',$data);
	}

	public function search(){
		$kata= $this->input->post('kata');

		$data['posts']=$this->AdminModel->findbyJudul($kata);
		$this->load->view('view_user/user_search',$data);
	}
	public function admin_search(){
		$kata= $this->input->post('kata');

		$data['posts']=$this->AdminModel->findbyJudul($kata);
		$this->load->view('view_admin/search_admin',$data);
	}


	public function index(){
		$data['users'] = $this->AdminModel->getAll();
		$this->load->view('view_user/user',$data);
	}

	public function admin()
	{
		if(empty($this->session->userdata('username'))){
        echo '<script>alert("Silahkan login dahulu untuk mengakses data.");window.location.href="'.base_url('blog/login').'";</script>';}

		$data['users'] = $this->AdminModel->getAll();
		$this->load->view('view_admin/admin',$data);
	}


	public function register_form(){
		$this->load->view('view_login/view_register');
	}

	public function post_register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data_admin = array(
			'username' => $username,
			'password' => password_hash($password, PASSWORD_DEFAULT)
		);

		
		if ($this->AdminModel->register($data_admin)) {
			redirect('blog/login');
		}
	}

	public function login(){
		$this->load->view('view_login/login');
	}

	public function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = array(
			'username'=>$username,
			'password' =>password_hash($password, PASSWORD_DEFAULT)
		);

		$cek = $this->AdminModel->cek_login($admin);

		if ($cek==FALSE) {
			echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('blog/login').'";</script>';
		} else{
			$data_session = array(
			'username' => $username,
			'status' => "login"
			);
 
			$this->session->set_userdata($data_session);

			redirect('blog/admin');
		}
	}

	public function logout()
		 {
		     $this->session->sess_destroy();
		     echo '<script>alert("Anda Berhasil Logout.");window.location.href="'.base_url('blog').'";</script>';
		 }   
		 
}
		



 ?>