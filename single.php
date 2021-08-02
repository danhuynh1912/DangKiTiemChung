<?php 
    include './admin/light-bootstrap-dashboard-master/examples/db.php';
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="index2.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <div class="row">
                    <div class="col-md-6 text-center order-1 order-md-2 mb-3 mb-md-0">
                        <a href="index.php" class="logo m-0 text-uppercase">MacNhom6</a>
                    </div>
                    <div class="col-md-3 order-3 order-md-1">
                        <a href="login.html" class="logo m-0 text-uppercase">Đăng Nhập</a>
                        <form action="#" class="search-form">
                            <span class="search1"><img src="img/search.svg" /></span>
                            <input type="search" class="form-control" placeholder="Search...">
                        </form>
                    </div>
                    <div class="col-md-3 text-end order-2 order-md-3 mb-3 mb-md-0">
                        <div class="d-flex">
                            <a class="yourcart">
                                <img src="img/cart.svg" width="30px" />
                                <span>1</span>
                            </a>
                            <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block"
                                data-toggle="collapse" data-target="#main-navbar">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="js-clone-nav d-none d-lg-inline-none text-start site-menu float-end">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li class="has-children">
                        <a href="categories.html">Categories</a>
                        <ul class="dropdown">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Business</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="section pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="posts-slide-wrap">
                        <div class="tns-outer" id="posts-slide-ow">

                            <div id="posts-slide-mw" class="tns-ovh">
                                <div class="tns-inner" id="posts-slide-iw">
                                    <div class="posts-slide  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                        id="posts-slide">
                                        <div class="item tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                            <div class="post-entry d-lg-flex">
                                                <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                                                    <a href="single.html">
                                                        <img class="banner-img" src="./img/mac1.jpeg" alt="Image"
                                                            class="img-fluid" data-pagespeed-url-hash="1988666308"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </a>
                                                </div>
                                                <?php 
                                                    if(isset($_GET['id'])){
                                                        $id = $_GET['id'];
                                                        $sql = "SELECT * FROM sanpham WHERE id = $id ";
                                                        $result = $conn -> query($sql);
                                                        if($result->num_rows>0){
                                                            while($row = $result->fetch_assoc()){
                                                                $name = $row['ten_sp'];
                                                                $gia = $row['price'];
                                                                $id = $row['id'];
                                                                $cpu = $row['cpu'];
                                                                $ram = $row['ram'];
                                                                $o_cung = $row['o_cung'];
                                                                $card = $row['card'];
                                                                echo '<div class="content align-self-center">
                                                                <h2 class="heading-single"><a href="single.html">'.$name.'</a></h2>
                                                                <h4>Thông số tóm tắt</h4>
                                                                <ul>
                                                                    <li>Bộ xử lý CPU: '.$cpu.'</li>
                                                                    <li>Bộ nhớ RAM: '.$ram.'</li>
                                                                    <li>Ổ cứng: '.$o_cung.'</li>
                                                                    <li>Card màn hình: '.$card.'</li>
                                                                </ul>
                                                                <h1>'.number_format($gia).' đ</h1>
            
                                                                <!-- <button class="buynow">Buy now</button> -->
            
                                                                <button class="button alternative">Buy now</button>
                                                                <button class="single-add alternative">Add to cart</button>
                                                            </div>';
                                                            }
                                                        }
                                                    }
                                                        
                                                        
                                                            
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>