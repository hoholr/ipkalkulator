<?php 
define('CURRENT', str_replace("/ipkalkulator/","",$_SERVER[PHP_SELF]));
//echo CURRENT;
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="favicon.svg" type="image/svg+xml">
  <link rel="manifest" href="manifest.webmanifest">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style type="text/css">
    .bg-otp{background: #65a943;}
    .text-otp{color: #333333;}
    .tooltip-inner {max-width: 350px;}
  </style>

  <title>THN-TAMUS Kft. - ingatlan kalkulátorok</title>
</head>

<body>

<div class="container-fluid bg-otp mb-5">
    <div class="row">
      <div class="container">
          <div class="row">
          <nav class="col-12 navbar navbar-dark text-light">
            <div class="navbar-brand d-flex col-9 px-0">
              <img src="favicon.png" class="my-auto" style="max-width: 80px;">
              <div class="h5 my-auto ml-3 text-light">
                <?php if(CURRENT==='index.php'){ ?>
                  KÁRÁTALÁNY
                <?php } elseif(CURRENT==='illetek.php') { ?>
                  ILLETÉK
                <?php } ?>
              <br class="d-md-none">KALKULÁTOR</div>
            </div>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item <?php if (CURRENT==='index.php'){ ?>active<?php } ?>">
                  <a class="nav-link h5" href="index.php">KÁRÁTALÁNY</a>
                </li>
                <li class="nav-item <?php if (CURRENT==='illetek.php'){ ?>active<?php } ?>">
                  <a class="nav-link h5" href="illetek.php">ILLETÉK</a>
                </li>
              </ul>
            </div>
          </nav>
          </div>
        </div>
      </div>
  </div>