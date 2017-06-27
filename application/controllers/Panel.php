<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('kod_model');
		$this->load->view('header-ders');
		$this->load->view('panel/anasayfa_view');
		$this->load->view('footer-ders');
	}

    function dersEkle() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']) {
			$this->load->model('kod_model');
			$this->load->helper('pratik');
			$this->load->helper('form');
			$this->load->helper('url');
			$data['konu'] = $this->kod_model->GetKonular();
			$this->load->view('header-ders');
			$this->load->view('panel/dersEkle_view.php', $data);
			$this->load->view('footer-ders');
		} else {
			redirect('/user/login');
		}
	}

	function dersEkle2() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']) {
			$this->load->model('kod_model');
			$this->load->helper('pratik');
			$this->load->helper('form');
			$this->load->helper('url');
			if($this->input->post('dersEkle'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
			{  
				$this->kod_model->ders_ekleme();
			}
			if($this->input->post('cozumEkle'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
			{  
				$this->kod_model->cozum_ekleme();
			}
			$this->load->view('header-ders');
			$this->load->view('panel/dersEkle2_view.php');
			$this->load->view('footer-ders');
		} else {
			redirect('/user/login');
		}
	}

	


}

?>