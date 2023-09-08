<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="top up game murah mudah cepat">
  <title>infinityshop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
</head>
<body style="margin-bottom:200px">
  <!--Header-->
  <?php
  include 'includes/header_menu.php';
  include 'includes/check-if-added.php';
  ?>
  <!--Header ends-->
  <div id="content">
    <div id="bg" class="">
      <div class="container" style="padding-top:150px">
        <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
          <h1>Top Up Game</h1>
          <p>Beli voucher game secara mudah dan instan. Top up berbagai voucher game online harga murah dengan metode pembayaran yang aman</p>
          <a href="maintenance.html" class="btn btn-warning btn-lg text-white">Top Up Sekarang</a>
        </div>
      </div>
    </div>
    <div class="text-center pt-4 h3">
      * Topup Game *
    </div>
    <!--menu highlights start-->
    <div class="container pt-3">
      <div class="row text-center ">
        <div class="col-6 col-md-3 py-3">
          <a href="maintenance.html"> <img src="images/lv_0_20230824085802.gif" class="img-fluid"alt="" style="border-radius:0.5rem">
            <div class="h5 pt-3 font-weight-bolder">
              Mobile Legends
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3 py-3 " >
          <a href="maintenance.html">
            <img src="images/lv_0_20230824085409.gif" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
            <div class="h5 pt-3 font-weight-bolder">
              Free Fire
            </div>
          </a>
        </div>
        <div class="col-6 col-md-3 py-3">
          <a href="maintenance.html">
           <img src="images/lv_0_20230824091700.gif" class="img-fluid   " alt="" style="border-radius:0.5rem">
           <div class="h5 pt-3 font-weight-bolder">
            PUBG Mobile
          </div>
        </a>
      </div>
      <div class="col-6 col-md-3 py-3">
        <a href="maintenance.html">
         <img src="images/lv_0_20230824174208.gif" class="img-fluid  " alt="" style="border-radius:0.5rem">
         <div class="h5 pt-3 font-weight-bolder">
          Genshin Impact
        </div>
      </div>
    </a>
  </div>
</div>
<!--menu highlights end-->
<!--footer -->
<?php include 'includes/footer.php'?>
<!--footer end-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function() {
    if(window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }
  });
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
echo "<script type='text/javascript'>
$(document).ready(function(){
  $('#signup').modal('show');
  });
  </script>";
  echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
  <?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
  echo "<script type='text/javascript'>
  $(document).ready(function(){
    $('#login').modal('show');
    });
    </script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    </html>