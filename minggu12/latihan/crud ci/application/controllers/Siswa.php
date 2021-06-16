<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['siswa'] = $this->siswa_model->getAll();
		$this->load->view('template/header');
		$this->load->view('siswa/index',$data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('siswa/create');
		$this->load->view('template/footer');
	}

	public function save()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run()==true)
        {
			$data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['alamat'] = $this->input->post('alamat');
			$this->siswa_model->save($data);
			redirect('siswa');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('siswa/create');
			$this->load->view('template/footer');
		}
	}

	function edit($kd_siswa)
	{
		$data['siswa'] = $this->siswa_model->getById($kd_siswa);
		$this->load->view('template/header');
		$this->load->view('siswa/edit',$data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run()==true)
        {
		 	$kd_siswa = $this->input->post('kd_siswa');
			$data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['alamat'] = $this->input->post('alamat');
			$this->siswa_model->update($data,$kd_siswa);
			redirect('siswa');
		}
		else
		{
			$kd_siswa = $this->input->post('kd_siswa');
			$data['siswa'] = $this->siswa_model->getById($kd_siswa);
			$this->load->view('template/header');
			$this->load->view('siswa/edit',$data);
			$this->load->view('template/footer');
		}
	}

	function delete($kd_siswa)
	{
		$this->siswa_model->delete($kd_siswa);
		redirect('siswa');
	}

}
