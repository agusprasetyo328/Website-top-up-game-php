<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>infinityshop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
</head>
<body>
    <!--header -->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--header ends -->
    <div class="container" style="margin-top:70px">
     <!--jumbutron start-->
     <div class="jumbotron text-center">
        <h1>TOP UP MUDAH MURAH</h1>
        <p>Ayo top up diamond game kamu biar  makin keren saat bermain</p>
    </div>
    <!--jumbutron ends-->
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Top up</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Diamond Mobile Legend</h6>
                    <h6>100 Diamond</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Beli</a></p>
                        <?php
                    } else {
                        if (check_if_added_to_cart(1)) {
                         echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                     } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Keranjang Saya</a><p>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Diamond Mobile Legends</h6>
                    <h6>500 Diamond</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Beli</a></p>
                        <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                            ?>
                            <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Keranjang Saya</a></p>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Panerai Watch</h6>
                    <h6>Price :Rs 3500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                        <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                            ?>
                            <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Nonos Watch</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                        <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                        <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                            ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row text-center" id="shirt">
    <div class="col-md-3 col-6 py-3" >
        <div class="card">
            <img src="images/shirt1.jpg" alt="" class="img-fluid pb-1"  >
            <div class="figure-caption">
                <h6>Levis</h6>
                <h6>Price :Rs 1800</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/shirt2.jpg" alt="" class="img-fluid pb-1" >
            <div class="figure-caption">
                <h6>Louis Philippe t-shirt</h6>
                <h6>Price :Rs 2500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/shirt3.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Highlander t-shirt</h6>
                <h6>Price :Rs 500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(7)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3" >
        <div class="card">
            <img src="images/shirt4.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>GUCCI White t-Shirt</h6>
                <h6>Price :Rs 2300</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row text-center" id="shoes" >
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/shoe1.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Nike White Sneaker</h6>
                <h6>Price :Rs 8000</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(9)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/shoe2.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Nike White Shoes</h6>
                <h6>Price :Rs 7500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(10)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/shoe3.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Nike Yellow Sneaker</h6>
                <h6>Price :Rs 7000</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(11)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3" >
        <div class="card">
            <img src="images/shoe4.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Nike Sneaker</h6>
                <h6>Price :Rs 6000</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(12)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
<div class="row text-center" id="headphones">
    <div class="col-md-3 col-6 py-3" >
        <div class="card">
            <img src="images/sp1.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Beats Headphone</h6>
                <h6>Price :Rs 22,500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(13)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-6 py-3">
        <div class="card">
            <img src="images/sp2.jpg" alt="" class="img-fluid pb-1">
            <div class="figure-caption">
                <h6>Zolo Headphone</h6>
                <h6>Price :Rs 4500</h6>
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                } else {
                    if (check_if_added_to_cart(14)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-3">
    <div class="card">
        <img src="images/sp3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Sony Speaker</h6>
            <h6>Price :Rs 10,500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                <?php
            } else {
                if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                    ?>
                </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
            }
        }
        ?>
    </div>
</div>
</div>
<div class="col-md-3 col-6 py-3">
    <div class="card">
        <img src="images/sp4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Airpods</h6>
            <h6>Price :Rs 15,000</h6>
            <?php if (!isset($_SESSION['email'])) {?>
                <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                <?php
            } else {
                if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>
<!--menu list ends-->
<!-- footer-->
<?php include 'includes/footer.php'?>
<!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover();
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