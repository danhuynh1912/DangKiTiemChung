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
                        <a href="login.php" class="logo m-0 text-uppercase">Đăng Nhập</a>
                        <a href="register.php" class="logo m-0 text-uppercase">Đăng Ký</a>
                        <form action="#" class="search-form">
                            <span class="search1"><img src="img/search.svg" /></span>
                            <input type="search" class="form-control" placeholder="Search...">
                        </form>
                    </div>
                    <div class="col-md-3 text-end order-2 order-md-3 mb-3 mb-md-0">
                        <div class="d-flex">
                            <a href="" class="yourcart" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="img/cart.svg" width="30px" />
                                <span>1</span>
                            </a>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="cart-list row">
                                            <div class="col-3">
                                                <img src="./img/mac1.jpeg" alt="Image" class="img-fluid"
                                                    data-pagespeed-url-hash="3151298507"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="col-9 cart-info">
                                                <div style="width: 60%;">
                                                    <h4 class="heading mb-3"><a href="single.html">MacBook Pro 2020 13
                                                            inch
                                                            (MYD82/MYDA2)</a>
                                                    </h4>
                                                    <p>Apple M1 8GB RAM 256GB SSD – NEW</p>
                                                </div>
                                                <h1>30.990.000 đ</h1>
                                            </div>
                                        </div>
                                        <div class="cart-list row">
                                            <div class="col-3">
                                                <img src="./img/mac1.jpeg" alt="Image" class="img-fluid"
                                                    data-pagespeed-url-hash="3151298507"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="col-9 cart-info">
                                                <div style="width: 60%;">
                                                    <h4 class="heading mb-3"><a href="single.html">MacBook Pro 2020 13
                                                            inch
                                                            (MYD82/MYDA2)</a>
                                                    </h4>
                                                    <p>Apple M1 8GB RAM 256GB SSD – NEW</p>
                                                </div>
                                                <h1>30.990.000 đ</h1>
                                            </div>
                                        </div>
                                        <button class="alternative"><a href="checkout.html">Thanh toán</a></button>
                                    </div>
                                </div>
                            </div>
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

    <div class="section pt-5 pb-0" style="padding-top: 5rem!important;">
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
                                                        <img class="banner-img" src="./img/banner.jpg" alt="Image"
                                                            class="img-fluid" data-pagespeed-url-hash="1988666308"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </a>
                                                </div>
                                                <div class="content align-self-center">
                                                    <h2 class="heading"><a href="">Trang bán đồ công nghệ
                                                            Apple hàng đầu Việt Nam</a></h2>
                                                    <p>MacBook Pro (đôi khi được viết tắt không chính thức là MBP[1]) là
                                                        một dòng máy tính xách tay Macintosh được giới thiệu vào tháng 1
                                                        năm 2006, bởi Apple Inc. Đây là model cao cấp nhất của dòng
                                                        MacBook, nằm trên MacBook Air, tập trung vào đối tượng người
                                                        tiêu dùng chuyên nghiệp và có sẵn các kích cỡ màn hình 13 inch
                                                        và 16 inch</p>
                                                    <!-- <button class="buynow">Buy now</button> -->

                                                    <button class="button alternative">Buy now</button>
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
    </div>

    <div class="section">
        <div class="container">
            <div class="row g-5">
                <div class="product-title col-lg-12 row">
                    <div class="col-5">
                        <h3>Products</h3>
                    </div>
                    <div class="col-7">

                        <ul class="category nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <?php 
                                $sql = "SELECT * FROM loaisp";
                                $result = $conn->query($sql);
                                if ($result->num_rows>0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                         <li class="nav-item">
                                            <a class="nav-link" id="macbook-tab" href="index.php?id=<?= $row['id'] ?>"
                                                role="tab" aria-controls="macbook" aria-selected="false"><?= $row['tenloai'] ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active row" id="macbook" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <?php 
                            if (isset($_GET["id"])) {
                                $id = $_GET["id"];
                            }
                            else {
                                $id =1;
                            }
                            $sql = "SELECT * FROM `sanpham` WHERE id_loai=$id";
                            $result = $conn -> query($sql);
                            if($result->num_rows>0){
                                $dem = 0;
                                while($row = $result->fetch_assoc()){
                                    $dem ++;
                                    $id = $row['id'];
                                    $name = $row['ten_sp'];
                                    $mota = $row['mo_ta'];
                                    $price = $row['price'];
                                    $image = $row['images'];
                                    $time = $row['time'];
                                    $id_loai = $row['id_loai'];
                                    $sql_loai = "SELECT * FROM loaisp where id=$id_loai";
                                    $result_loai  =$conn-> query($sql_loai);
                                    if($result_loai->num_rows > 0 ){
                                        while($row_loai = $result_loai->fetch_assoc()){
                                            $ten_loai = $row_loai['tenloai'];
                                        }
                                    }
                                    echo '
                                    <div class="col-lg-4">
                                    <div class="post-entry d-block small-post-entry-v">
                                        <div class="thumbnail thumbnail-product">
                                            <a href="single.php?id='.$id.'">
                                                <img src="./img/'.$image.'" alt="Image" class="img-fluid"
                                                    data-pagespeed-url-hash="3151298507"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </a>
                                        </div>
                                        <div class="content">
        
                                            <h2 class="heading mb-3"><a href="single.php?id='.$id.'">'.$name.'</a>
                                            </h2>
                                            <p>'.$mota.'</p>
                                            <h1>'.number_format($price).' đ</h1>
                                        </div>
                                    </div>
                                </div>
                                    ';
                                }
                            }
                        ?>
                   
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <div class="col-12">
                                <h2 class="h4 fw-bold">Blogs</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/blog1.jpeg" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3151298507"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Adobe phát hành bản hỗ trợ Apple M1
                                                cho
                                                Premiere Pro</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/blog3.jpeg" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3445798428"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Nên tắt máy hay sử dụng chế độ ngủ
                                                trên
                                                Macbook</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/blog4.png" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3740298349"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Những tính năng và sản phẩm được mong
                                                đợi
                                                tại WWDC 21 mà Apple bỏ qua</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-4">
                            <div class="col-12">
                                <h2 class="h4 fw-bold">Tutorial</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/tuto1.jpeg" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3151298507"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Hướng dẫn cài đặt MathType trên
                                                Macbook
                                                (Mới nhất)</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/blog2.jpeg" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3445798428"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Hướng dẫn cài Windows 11 trên Macbook
                                                chi
                                                tiết nhất</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                                    <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                        <img src="img/tuto2.jpeg" alt="Image" class="img-fluid"
                                            data-pagespeed-url-hash="3740298349"
                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="content">
                                        <div class="post-meta mb-1">
                                            <a href="#" class="category">Business</a>, <a href="#"
                                                class="category">Travel</a> —
                                            <span class="date">July 2, 2020</span>
                                        </div>
                                        <h2 class="heading"><a href="single.html">Hướng dẫn cài đặt lại Macbook M1 bằng
                                                USB,
                                                Ổ cứng di động...</a></h2>
                                        <a href="#" class="post-author d-flex align-items-center">
                                            <div class="author-pic">
                                                <img src="img/tacgia.webp" alt="Image"
                                                    data-pagespeed-url-hash="1813383360"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="text">
                                                <strong>Sergy Campbell</strong>
                                                <span>Author, 26 published post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <script type="text/javascript">
            document.querySelectorAll('.button').forEach(button => {

                let div = document.createElement('div'),
                    letters = button.textContent.trim().split('');

                function elements(letter, index, array) {

                    let element = document.createElement('span'),
                        part = (index >= array.length / 2) ? -1 : 1,
                        position = (index >= array.length / 2) ? array.length / 2 - index + (array.length / 2 - 1) : index,
                        move = position / (array.length / 2),
                        rotate = 1 - move;

                    element.innerHTML = !letter.trim() ? '&nbsp;' : letter;
                    element.style.setProperty('--move', move);
                    element.style.setProperty('--rotate', rotate);
                    element.style.setProperty('--part', part);

                    div.appendChild(element);

                }

                letters.forEach(elements);

                button.innerHTML = div.outerHTML;

                button.addEventListener('mouseenter', e => {
                    if (!button.classList.contains('out')) {
                        button.classList.add('in');
                    }
                });

                button.addEventListener('mouseleave', e => {
                    if (button.classList.contains('in')) {
                        button.classList.add('out');
                        setTimeout(() => button.classList.remove('in', 'out'), 950);
                    }
                });

            });

        </script>
</body>

</html>