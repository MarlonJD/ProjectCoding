<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

 <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="http://materializecss.com/images/office.jpg">
      </div>
      <a href="#!user"><img class="circle" src="http://materializecss.com/images/yuna.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a class="subheader">Dersler</a></li>
    <?php yolHaritasiGetir(); ?>
  </ul>

        
<?php foreach($veri as $row){ ?>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s8">
            <div class="card blue">
                <div class="card-content white-text">
                    <span class="card-title"><b>#<?php echo $row->id; ?> <?php echo $row->isim;?></b></span>
                    <div class="aciklama" id="style-7"> 
                        <?php echo $row->aciklama;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s4">
            <div class="card red">
                <div class="card-content white-text">
                    <span class="card-title"><b>Görevler</b></span>
                    <div class="gorevler">
                        <ul>
                            <?php if (isset($onay)) { numaraIleGorevGetir($row->id, $onay, 0); 
                            $basari = basariliMi($row->id, $onay);
                                if (!$basari==0) { 
                                    echo "</br>Tebrikler";
                                }
                            } else 
                            { numaraIleGorevGetir($row->id, NULL); } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="kodalani col s8">
            <div class="card">
                <div class="card-content">
                    <form action="#" method="post" accept-charset="utf-8">
                    <span class="card-title">Kod Alanı
                        <div style="float:right;">
                           <button class="waves-effect waves-teal btn-flat" type="submit" name="deneme" value="Sent">Çalıştırmayı Dene</button>
                           <?php if (isset($onay)) { 
                                    $basari = basariliMi($row->id, $onay); 
                                            if (!$basari==0) { 
                                ?>
                                    <a href="<?php echo base_url('kod/basarili/'.$row->permalink); ?>" class="waves-effect waves-teal btn-flat">Sonraki Ders</a>
                                <?php } } ?>
                        </div>
                    </span>
                    <textarea class="cm-s-rubyblue" id="KodAlani" name="KodAlani"><?php if (isset($eskiKod)) { echo $eskiKod; } else { echo $row->kodblok; }?></textarea>
                    <input name="ders_no" value="<?php echo $row->id; ?>" hidden>
                    </form>
                </div>
            </div>
        </div>

        <div class="onizleme col s4">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Önizleme</span>
                    <iframe id=preview></iframe>
                </div>
            </div>
        </div>

        <?php } ?>
      </div>