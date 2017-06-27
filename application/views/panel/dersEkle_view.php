  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
            <p class="light">
              <h1>Ders Ekleme</h1>
               <?php echo form_open('panel/dersEkle2');?>
                <div class="input-field col s12">
                    <label for="isim">Ders Adı</label>
                    <input placeholder="#1 HTML'Ye Giriş" name="isim" id="isim" type="text" class="validate">
                </div>
                <div class="input-field col s12">
                    <label for="permalink">Permalink</label>
                    <input placeholder="html-ye-giris" name="permalink" id="permalink" type="text" class="validate">
                </div>
                <div class="input-field col s12">
                    <select name="konu" id="konu">
                            <?php foreach ($konu as $row) { ?>
                            <option value="<?php echo $row->id;?>"><?php echo $row->konu;?></option>
                            <?php } ?>
                    </select>
                    <label>Konular</label>
                </div>
                <div class="input-field col s12">
                    <div id="tagButtons"></div>
                    <textarea id="aciklama" name="aciklama" class="materialize-textarea" placeholder="Ders içeriği <xmp> kod alanı kullanımı"></textarea>
                    <label for="aciklama">Açıklama</label>
                </div>
                <div class="input-field col s12">
                    <label for="kodblok">Kod Blok</label>
                    <textarea id="kodblok" name="kodblok" class="materialize-textarea" placeholder="eski dersten kalan kod"></textarea>
                </div>

              <?php echo form_submit('dersEkle','Yolla gitsin!');  ?>
              <?php echo form_close(); ?>
              </p>
          </div>
        </div>

    </div>
    <br><br>
  </div>
