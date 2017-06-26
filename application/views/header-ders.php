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
</head>

    <body>
            <!-- Navbar and Header -->
    <nav class="nav-extended blue">
      <div class="nav-wrapper container">
        <a href="<?php echo base_url(); ?>" class="brand-logo"><i class="material-icons">swap_vertical_circle</i><-!Kod&0te5i?></a>
        
        <ul class="right hide-on-med-and-down">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?> 
                        <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                              Kullanıcı<i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                     <?php } else { ?>
                    <li><a href="<?php echo base_url("user/login"); ?>">Giriş Yap</a></li>
                    <li><a href="<?php echo base_url("user/register"); ?>">Kayıt Ol</a></li>
                     <?php } ?>
        </ul>
        <!-- Dropdown Structure -->
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="<?php echo base_url(); ?>kod/ders">Dersler</a></li>
                    <li><a href="<?php echo base_url("user/logout"); ?>">Çıkış Yap</a></li>
                </ul>
            <?php }?>

        
      </div>
      
    </nav>
  
  
  