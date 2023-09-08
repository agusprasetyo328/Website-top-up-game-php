<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>prasetyoshop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
  <link rel="stylesheet" href="style.css">          
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
  include 'includes/header_menu.php';
  ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div style="text-align: center;">
  <h3 class="text-warning pt-3 title">Hubungi kami kapan saja</h3>
  <hr />
  <p class="mt-2">Beberapa layanan mungkin belum optimal, dikarenakan perbaikann website, untuk peningkatan performa, Mohon Maaf atas ketidaknyamanannya</p>
</div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div style="text-align: center;" class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">
    <form class="col-md-12" action="https://formspree.io/f/myyqjynk" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""
        name="email">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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