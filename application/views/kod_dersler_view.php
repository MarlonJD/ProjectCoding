  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <?php foreach($konu as $row) { ?>
          <div class="col s12">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="fa fa-try" aria-hidden="true"></i></h2>
              <h5 class="center"><?php echo $row->konu; ?></h5>   
                <p class="light">
                <?php getDersler($row->id); ?>
                </p>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>

    <br><br>
  
  </div>
