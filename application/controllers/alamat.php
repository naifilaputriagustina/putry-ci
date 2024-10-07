<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alamat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		
		$this->load->model('alamat_model');
		$data ['alamat'] = $this->alamat_model->getalamat();

		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('alamat', $data);
		$this->load->view('templete/footer');
		
	}
    public function hapus($id)
     {
		$this->db->delete('alamat', ['id' => $id]); 
		redirect('alamat');
	}

    public function tambah_alamat()
	{
        $this->load->view('templete/header');
        $this->load->view('templete/menu');
		$this->load->view('tambah_alamat');	
        $this->load->view('templete/footer');
	}

	public function simpan() 
	{
		$this->load->model('alamat_model') ;
		$data['alamat'] = $this->alamat_model->tambahalamat();
		redirect('alamat');
	}
	public function edit($id) {
		$this->load->model('alamat_model');
		$data['edit'] = $this->alamat_model->getalamatByid($id);

		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('edit_alamat', $data );
		$this->load->view('templete/footer');
	}
	public function update() 
	{ 
		$data =
		[
		
		"alamat" => $this->input->post('alamat', true),
		"kode_pos" => $this->input->post('kode_pos', true),
		
		];
	$this->db->where('id', $this->input->post('id'));
	$this->db->update('alamat', $data);
	redirect('alamat');
}

}