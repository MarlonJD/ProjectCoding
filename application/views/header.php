<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('css/style.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/codemirror.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/theme/solarized.min.css">
  <!--Font awesome-->
  <script src="https://use.fontawesome.com/7dbe7bb3a7.js"></script>
  <style>
nav {
    position: relative;
    top: 0;
    transition: background-color .3s, opacity .2s, visibility 0s;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
    z-index: 10
}
nav.ed {
    transition: background-color .3s, opacity .2s, visibility 0s .2s;
    opacity: 0;
    visibility: hidden
}
nav.nav-full-header {
    height: 100%
}
nav.nav-full-header .nav-header {
    height: calc(100% - 128px)
}
nav.nav-full-header ~ .nav-categories {
    top: -64px
}
nav ul:not(.indicators) li.k {
    position: relative;
    background-color: transparent
}
nav ul:not(.indicators) li.k::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 2px;
    background-color: #fff
}
nav .nav-background {
    overflow: hidden;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    opacity: .1
}
nav .nav-background img,
nav .nav-background .resim {
    opacity: 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 0;
    left: 0;
    margin: 0 auto;
    max-width: 100%;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    transition: opacity .7s
}
nav .nav-background img.bresim,
nav .nav-background .resim.bresim {
    opacity: 1
}
nav .nav-background .resim {
    top: 0;
    bottom: 0;
    -webkit-transform: none;
    transform: none;
    background-repeat: repeat
}
nav .nav-header {
    clear: both;
    padding: 40px 0
}
nav .nav-header h1 {
    font-size: 56px;
    font-weight: 600
}
nav .nav-header .header-text {
    display: block;
    margin: -40px 0 40px 0;
    color: rgba(255, 255, 255, 0.8)
}
</style>
</head>

    <body>
            <!-- Navbar and Header -->
    <nav class="nav-extended blue">
      <div class="nav-background">
        <div class="resim bresim" style="background-image: url('stock-vector-internet-technology-and-programming-seamless-background-with-linear-icons-set-html-php-and-code-340802768.jpg');"></div>
      </div>
      <div class="nav-wrapper container">
        <a href="<?php echo base_url(); ?>" class="brand-logo"><i class="material-icons">swap_vertical_circle</i><-!Kod&0te5i?></a>
        
        <ul class="right hide-on-med-and-down">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?> 
                        <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                              Kullanıcı<i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                     <?php } else { ?>
                    <li><a href="<?php echo base_url("user/login"); ?>"><?php echo $this->lang->line("header_login"); ?></a></li>
                    <li><a href="<?php echo base_url("user/register"); ?>"><?php echo $this->lang->line("header_register"); ?></a></li>
                     <?php } ?>
                    <li><a class="dropdown-button" href="#" data-activates="dropdown2">
                                <?php echo $this->lang->line("header_language"); ?><i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
        </ul>
        <!-- Dropdown Structure -->
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="<?php echo base_url(); ?>road/createTrip"><?php echo $this->lang->line("header_createroadtrip"); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>road/RoadTrips"><?php echo $this->lang->line("header_manageurtrip"); ?></a></li>
                    <li><a href="<?php echo base_url("user/logout"); ?>"><?php echo $this->lang->line("header_logout"); ?></a></li>
                </ul>
            <?php }?>
                <ul id="dropdown2" class="dropdown-content">
                    <li><a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/english'>English</a></li>
                    <li><a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/mongolian'>Монгол</a></li>
                    <li><a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/russian'>русский</a></li>
                    <li><a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/turkish'>Türkçe</a></li>
                </ul>

        <div class="nav-header center">
          <h1>Öğren ve Pratik Yap</h1>
          <div class="header-text">Hızlı, basit, kullanışlı öğretici platform</div>
        </div>
      </div>
      
    </nav>
  
  
  