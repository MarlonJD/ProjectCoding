  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
            <p class="light">
              <h1>Çözüm Ekleme</h1>
               <?php echo form_open('panel/dersEkle2'); ?>
                <div class="input-field col s12">
                    <label for="isim">Ders ID</label>
                    <input name="dersid" id="dersid" type="text" class="validate" value="<?php getSonDers(); ?>">
                </div>
                <div class="input-field col s12">
                    <label for="aciklama">Açıklama</label>
                    <input placeholder="Görev Açıklaması" name="aciklama" id="aciklama" type="text" class="validate">
                </div>
                <div class="input-field col s12">
                    <label for="kabulkod">Kod Blok</label>
                    <input placeholder="kabul kodu" name="kabulkod" id="kabulkod" type="text" class="validate">
                </div>

              <?php echo form_submit('cozumEkle','Yolla gitsin!');  ?>
              <?php echo form_close(); ?>
              </p>
          </div>
        </div>

    </div>
    <br><br>
  </div>
