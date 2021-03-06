<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

function numaraIleGorevGetir($id, $onay=NULL)
{
    $basari=1;
    $CI =& get_instance();
    $query = $CI->db->get_where('pratik', array('dersid'=>$id));
    foreach ($query->result() as $row) {
      if (isset($onay)) {
          if ($onay[$row->id]==1) { 
              echo '<i class="fa fa-check fa-2x" aria-hidden="true"></i> '.$row->aciklama.'</li>';
          } elseif ($onay[$row->id]==0) { 
              echo '<li><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i> '.$row->aciklama.'</li>';
              $basari = 0;
          }
      } else {
      echo '<li><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i> '.$row->aciklama.'</li>';
      }
    }
    return $basari;
}

function dersYapildiMi($dersid, $uyeid)
{
    $CI =& get_instance();
    $query = $CI->db->get_where('kontrol', array('dersid'=>$dersid, 'uyeid'=>$uyeid));
    $at = $query->row();
    $ok = 0;
    if (isset($at->id)) { $ok=1; }
    return $ok;
}

function basariliMi($id, $onay=NULL)
{
    $basari=2;
    $CI =& get_instance();
    $query = $CI->db->get_where('pratik', array('dersid'=>$id));
    foreach ($query->result() as $row) {
      if (isset($onay)) {
          } if ($onay[$row->id]==0) { 
              $basari = 0;
          }
    }
    return $basari;
}


function getDersler($konuid) //dersler sayfasındaki konuidye göre ders çekme fonksiyonu
{
    $CI =& get_instance();
    $query = $CI->db->get_where('dersler', array('konu'=>$konuid));
    foreach ($query->result() as $row) {
      echo '<li><a href="ders/'.$row->permalink.'" class="ders-text">#'.$row->id.' '.$row->isim.'</a></li>';
      }
}


function getSonDers()
{
    $CI =& get_instance();
    $query = $CI->db->order_by('id','desc')
                    ->get_where('dersler');
    $at = $query->row();
    echo $at->id;
}


?>