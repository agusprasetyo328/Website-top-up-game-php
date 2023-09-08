<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tracepurcase</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
</head>
<body>
  <?php
  include 'includes/header_menu.php';
  ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Pesanan Saya</h3>
          <hr />
          <div class="container">
            <?php
            $id_pesanan = "";
            echo "<p>ID Pesanan: NO ORDERS EXIST $id_pesanan</p>";
            ?>
          </div>
          <div class="container">
            <?php
            $id_pesanan = "";
            echo "<p>Status Pesanan: NO ORDERS EXIST $id_pesanan</p>";
            ?>
          </div>
        </div>
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function () {
      if (window.location.href.indexOf('#login') != -1) {
        $('#login').modal('show');
      }
    });
  </script>
  <?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
  $(document).ready(function(){
    $('#signup').modal('show');
    });
    </script>"; echo "
    <script type='text/javascript'>alert('".$z."')</script>";} ?>
    <?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
    $(document).ready(function(){
      $('#login').modal('show');
      });
      </script>"; echo "
      <script type='text/javascript'>alert('".$z."')</script>";} ?>
      </html>