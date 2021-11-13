<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KUSUM Fertility Center </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="KUSUM - Website">
    <meta name="author" content="merkulove">
    <meta name="keywords" content="">
    <!-- <link rel="icon" href="<?= base_url();?>assets/img/favicon.png"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/button.min.css">

    <style>
    .shape {
        position: absolute;
        top: 100%;
        left: 0;
        width: 110px;
        background-color: #0068b3;
        box-shadow: 0 0 10px rgb(136 136 136 / 10%);
        border-radius: 20px;
        margin-top: 15px;
        padding: 20px;
        z-index: 999999;
        opacity: 10;
        /* visibility: hidden; */
        transition: all .4s ease-in-out;
    }
    .shape:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}


.parallax {
    padding-top: 200px;
    padding-bottom: 200px;
    overflow: hidden;
    position: relative;
    width: 100%;
    background-image: url(assets/images/about-bg.jpg);
    background-attachment: fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
}

.parallax h1{
    text-align:center;
    color:white;
    font-size: 45px;
    line-height: 60px;
    text-transform: capitalize;
    font-weight: 600;
}
.parallax .parallax-text p{
    text-align:center;
    color:white;
    font-size: 20px;
    line-height: 30px;
    text-transform: capitalize;
    font-weight: 400;
    padding-left: 20px;
    padding-right:20px;
}


@media screen and (max-width:480px) {
    .img-title{
    color:white;font-weight:200;font-size:14px

} 
.parallax .parallax-text p{
    text-align:center;
    color:white;
    font-size: 15px;
    line-height: 30px;
    text-transform: capitalize;
    font-weight: 200;
}  
}

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-section">
            <header>
                <div class="container">
                    <div class="header-content d-flex flex-wrap align-items-center">
                        <div class="logo"><a href="" title="">
                                <img src="<?= base_url();?>assets/images/kusum.png" alt=""
                                    srcset="<?= base_url();?>assets/images/kusum.png 2x"></a></div>
                        <!--logo end-->
                        <ul class="contact-add d-flex flex-wrap">
                            <li>
                                <div class="contact-info"><img src="<?= base_url();?>assets/img/icon1.png" alt="">
                                    <div class="contact-tt">
                                        <h4>Call</h4><span>+9192 9797 6000</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info"><img src="<?= base_url();?>assets/img/icon2.png" alt="">
                                    <div class="contact-tt">
                                        <h4>Work Time</h4><span>Mon - Fri 8 AM - 5 PM</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info"><img src="<?= base_url();?>assets/img/icon3.png" alt="">
                                    <div class="contact-tt">
                                        <h4>Address</h4><span>Shivaji Peth, Kolhapur</span>
                                    </div>
                                </div>
                                <!--contact-info end-->
                            </li>
                        </ul>
                        <!--contact-information end-->
                        <div class="menu-btn"><a href="#"><span class="bar1"></span> <span class="bar2"></span> <span
                                    class="bar3"></span></a></div>
                        <!--menu-btn end-->
                    </div>
                    <!--header-content end-->
                    <div class="navigation-bar d-flex flex-wrap align-items-center">
                        <nav>
                            <ul>
                                <li class="shape text-center"><a class="" href="<?= base_url();?>" title="Home"><i class="fa fa-home " style="color:#ffffff"></i><br>Home</a></li>
                                <li class="shape text-center"><a class=" " href="<?= base_url('about');?>" title="about"><i class="fa fa-info-circle" style="color:#ffffff"></i><br>About</a></li>
                                <li class="shape text-center"><a class=" " href="" title=""><i class="fa fa-stethoscope" style="color:#ffffff"></i><br>Services</a>
                                    <ul>
                                        <li class="shape"><a href="<?= base_url('services/IVF_Treatment');?>" title="IVF Treatments">IVF Treatments</a></li>
                                        <li class="shape"><a href="<?= base_url('services/IUI_Treatment');?>" title="IUI Treatments">IUI Treatments</a></li>
                                        <li class="shape"><a href="<?= base_url('services/ICSI_Treatment');?>" title="ICSI Treatments">ICSI Treatments</a></li>
                                        <li class="shape"><a href="" title="Test Tube Baby">Test Tube Baby</a></li>
                                    </ul>
                                </li>


                                <li class="shape text-center"><a href="<?= base_url('blog');?>" title=""><i class="fa fa-rss" style="color:#ffffff"></i><br>Blogs</a>

                                </li>
                                <li class="shape text-center"><a href="<?= base_url('contact');?>" title="contact"><i class="fa fa-phone" style="color:#ffffff"></i><br>Contacts</a></li>
                            </ul>
                        </nav>
                        <!--nav end-->
                        <ul class="social-links ml-auto">
                            <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!--navigation-bar end-->
                </div>
            </header>
            <!--header end-->
            <div class="responsive-menu">
                <ul>
                    <li><a href="" title="">Home</a></li>
                    <li><a href="" title="">About</a></li>
                    <li><a href="" title="">Services</a></li>
                    <li><a href="" title="">Blogs</a></li>
                    <li><a href="" title="">Contact</a></li>
                    
                </ul>
            </div>
            <!--responsive-menu end-->