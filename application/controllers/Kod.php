<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kod extends CI_Controller {

	public function index()
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('kod_model');
        $data['veri'] = $this->kod_model->hepsini_al();
		$this->load->view('header');
		$this->load->view('kod_view', $data);
		$this->load->view('footer');
	}

    function ders($permalink=1) {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			$this->load->model('kod_model');
			$this->load->helper('pratik');
			$this->load->helper('form');
			$this->load->helper('url');
			$data['veri']=$this->kod_model->sadece_birini_al($permalink);
			if($this->input->post('deneme'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
				{  
				$data['onay'] = $this->kod_model->onay_fonksiyonu();
				$data['eskiKod'] = $this->input->post('KodAlani');
				}
			$this->load->view('header-ders');
			$this->load->view('kod_ders_view',$data);
			$this->load->view('footer-ders');
		} else {
			redirect('/user/login');
		}
	}

	function dersler() {
		$this->load->view('header-ders');
		$this->load->view('kod_dersler_view');
		$this->load->view('footer-ders');
	}

	function basarili() {
		$uyeid = $_SESSION['user_id'];
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			$this->load->model('kod_model');
			$data['onay'] = $this->kod_model->ders_basarili($this->uri->segment(3), $uyeid);
		} else {
			redirect('/user/login');
		}	
	}

	function veriEkle()
    {
        $this->load->model('kod_model');
        $this->load->helper('form');
        if($this->input->post('buton_ismi'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
            {
            $this->kod_model->veri_ekleme_fonksiyonu();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
            }
        $this->load->view('kod_ekle_view');
    }

	function veriSil($id)
	{
		$this->load->model('kod_model');
		$this->kod_model->veri_silme_fonksiyonu($id);
		if ($this->db->affected_rows() > 0) {
			echo "Silindi";
		} else { echo "Aga bi sıkıntı çıktı silinmedi."; }
	}


}

?>