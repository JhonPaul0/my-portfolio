<?php
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vintage Thrift - Home</title>
    <link rel="stylesheet" type="text/css" href="css/user_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="slider-container"> 
        <div class="slider">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>we pride ourselves on <br> exceptional flavors</h1>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/b.jpeg">
                </div>
            </div>
            <div class="slideBox">
                <div class="textBox">
                    <h1>pogi ko <br> exceptional flavors</h1>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
                <div class="imgBox">
                    <img src="image/b.jpeg">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"><i class="fa-solid fa-circle-arrow-right"></i></li>
            <li onclick="prevSlide();" class="prev"><i class="fa-solid fa-circle-arrow-left"></i></li>
        </ul>
    </div>

    <div class="service">
        <div class="box-container">
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class ="img1">
                        <img src="image/services (1).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secue</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (2).png" class ="img1">
                        <img src="image/services (3).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment</h4>
                    <span>100% secue</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (5).png" class ="img1">
                        <img src="image/services (6).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>support</h4>
                    <span>24*7 hours</span>
                </div>
                <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services (7).png" class ="img1">
                        <img src="image/services (8).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div>
            </div>
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/service.png" class ="img1">
                        <img src="image/service (1).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>returns</h4>
                    <span>24*7 free return</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="image/services.png" class ="img1">
                        <img src="image/services (1).png" class ="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>deliver</h4>
                    <span>100% secue</span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/user_script.js"></script>

  
</body>
</html>