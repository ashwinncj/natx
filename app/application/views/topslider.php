<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css"/>
<style>
    .topslider-image{
        height:100%;
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
        height:100vh;
    }
    .slider-parent{
      position:fixed;
      top:0;
      z-index:0;
    }
    .slider-container .left{
        padding: 15px;
        text-align: right;
        padding-left: 20px;
        font-family:Raleway;
        position:relative;
        height:100%;
    }
    .slider-container .left .description{
        position:absolute;
        bottom:20px;
        right:10px;
    }
</style>
<div class="owl-carousel owl-theme slider-parent" style="">
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">
            <!-- <div class="col-md-4 left">
                <div class="col-md-10 col-md-offset-2 description">
                    <p style="color:white">Wildlife - cats</p>
                    <h3 style="color:white">Tiger</h3>
                    <p style="color:white">Experience the majestic tigers of India in different settings from North, West, East, South and Central India. As their population increases and wildlife tourism gets better, no better time than now to visit India for the Royal Bengal Tiger!</p>
                    <button class="topslider-button">KNOW MORE</button>
                </div>
            </div> -->
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/1.jpg'); ?>');width:100%">

            </div>
        </div>
    </div>    
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/2.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>  
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/3.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>  
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/4.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>  
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/5.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>  
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/6.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/7.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/8.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/9.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/10.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/11.jpg'); ?>');width:100%">
            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12 slider-container" style="background-color: rgba(0,0,0,0.5)">         
            <div class="col-md-8 topslider-image right" style="background-image: url('<?php echo base_url('assets/img/slider/12.jpg'); ?>');width:100%">
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
        smartSpeed: 2000,
        autoplayTimeout: 6000,
        autoplayHoverPause: false
    });
</script>
