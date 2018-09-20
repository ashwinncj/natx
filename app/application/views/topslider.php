<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css"/>
<style>
    .topslider-image{
        height:320px;
        background-position:center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .topslider-button{
        color:white;
        background-color: rgb(85,172,238);
        padding: 5px 15px;
        border:none;
    }
    .slider-container{
      padding: 0;
    }
    .slider-container .left{
      padding: 15px;
      text-align: right;
      padding-left: 20px;
      font-family:Raleway;
    }
</style>
<div class="owl-carousel owl-theme">
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4 left">
                <div class="col-md-8 col-md-offset-4">
                <p style="color:white">Wildlife - cats</p>
                <h3 style="color:white">Tiger</h3>
                <p style="color:white">Experience the majestic tigers of India in different settings from North, West, East, South and Central India. As their population increases and wildlife tourism gets better, no better time than now to visit India for the Royal Bengal Tiger!</p>
                <button class="topslider-button">KNOW MORE</button>
                </div>
            </div>
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/TigerNATX2.jpg'); ?>');">

            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4 left">
                <div class="col-md-8 col-md-offset-4">
                <p style="color:white">Wildlife - cats</p>
                <h3 style="color:white">Tiger</h3>
                <p style="color:white">Experience the majestic tigers of India in different settings from North, West, East, South and Central India. As their population increases and wildlife tourism gets better, no better time than now to visit India for the Royal Bengal Tiger!</p>
                <button class="topslider-button">KNOW MORE</button>
                </div>
            </div>
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/TigerNATX2.jpg'); ?>');">

            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4 left">
                <div class="col-md-8 col-md-offset-4">
                <p style="color:white">Wildlife - cats</p>
                <h3 style="color:white">Tiger</h3>
                <p style="color:white">Experience the majestic tigers of India in different settings from North, West, East, South and Central India. As their population increases and wildlife tourism gets better, no better time than now to visit India for the Royal Bengal Tiger!</p>
                <button class="topslider-button">KNOW MORE</button>
                </div>
            </div>
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/TigerNATX2.jpg'); ?>');">

            </div>
        </div>
    </div>
</div>
<script>
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: false
    });
</script>
