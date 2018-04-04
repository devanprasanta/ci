<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function index()
	{
				$this->load->model('biodata');
		$data['biodata_array']=$this->biodata->getBiodataQueryArray();
		$data['biodata_object']=$this->biodata->getBiodataQueryObject();
		$data['biodatabuilder_array']=$this->biodata->getBiodataBuilderArray();
		$data['biodatabuilder_object']=$this->biodata->getBiodataBuilderObject();
		$this->load->view('home',$data);

	}
	public function About()
	{
		$this->load->view('About');
	}
	public function Contact()
	{
		$this->load->view('Contact');
	}
	public function news()
	{
		$judul= 'YO Bergabung';
		$isi= 'Temukan Berita Baru';
		$data['judul'] = $judul;
		$data['isi'] = $isi;
		$this->load->view("news", $data);
	}
}
?>
