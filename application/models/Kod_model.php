<?php
class Kod_model extends CI_Model
{
  function __construct()
     {
         parent::__construct();
         $this->load->database();//database bağlantısı yapıyoruz.
     }
    function hepsini_al()
     {
         $at = $this->db->get('users');
         return $at->result();
     }

     function GetKonular()
     {
         $at = $this->db->get('konular');
         return $at->result();
     }

    function sadece_birini_al($permalink)
     {
         $at = $this->db->get_where('dersler', array('permalink'=>$permalink));
         return $at->result();
     }

    function ders_ekleme()
    {
        $data = array(
       'isim'=>$this->input->post('isim_input'),
       'soyisim'=>$this->input->post('soyisim_input')
        );
        $this->db->insert('users',$data);
    }

    function veri_silme_fonksiyonu($id)
    {
        $query = "DELETE FROM kisiler WHERE id = $id";
        $result = $this->db->query($query);				
    }

    function onay_fonksiyonu()
    {
        $dersno = $this->input->post('ders_no');
        $nkkod = $this->input->post('KodAlani');
        $kkod = preg_replace('/\s+/', '', $nkkod);
        $veri = $this->db->get_where('pratik', array('dersid'=>$dersno));
            foreach ($veri->result() as $row) {
                $kabulkod = $row->kabulkod;
                    if (strpos($kkod, $kabulkod) !== false) { $sonuc[$row->id] = 1; } else { $sonuc[$row->id] = 0; }           
            }
    return $sonuc; 
    }

    function ders_basarili($permalink, $uyeid) {
        $at = $this->db->get_where('dersler', array('permalink'=>$permalink));
        $deger = $at->row();
        $dersid = $deger->id;
        $sonrakidersid = $dersid+1;
            $data = array(
        'uyeid'=>$uyeid,
        'dersid'=>$dersid
            );
            $this->db->insert('kontrol',$data);
        $koyun = $this->db->get_where('dersler', array('id'=>$sonrakidersid));
        $kdeger = $koyun->row();
        $sonrakidersadi = $kdeger->permalink;
        redirect('/kod/ders/'.$sonrakidersadi);
    }

}
?>