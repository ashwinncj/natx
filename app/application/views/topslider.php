<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css"/>
<style>
    .topbg-image{
        height:500px;
        width:100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .topslider-button{
        color:white;
        background-color: rgb(85,172,238);
        padding: 5px 15px;
        border:none;
    }
</style>
<div class="owl-carousel owl-theme">
    <div class="item" style="">
        <div class="col-md-12" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4" style="text-align: right;padding: 10px;">
                <p style="color:white">veritatis et quasi architecto beatae</p>
                <h3 style="color:white">dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</h3>
                <p style="color:white">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga</p>
                <button class="topslider-button">KNOW MORE</button>
            </div>
            <div class="col-md-8" style="background-image: url('<?php echo base_url('assets/img/TigerNATX1.jpg'); ?>');height:300px;background-position:center;background-size:cover;background-repeat:no-repeat;;">    

            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4" style="text-align: right;padding: 10px;">
                <p style="color:white">veritatis et quasi architecto beatae</p>
                <h3 style="color:white">dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</h3>
                <p style="color:white">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga</p>
                <button class="topslider-button">KNOW MORE</button>
            </div>
            <div class="col-md-8" style="background-image: url('<?php echo base_url('assets/img/TigerNATX1.jpg'); ?>');height:300px;background-position:center;background-size:cover;background-repeat:no-repeat;;">    

            </div>
        </div>
    </div>
    <div class="item" style="">
        <div class="col-md-12" style="background-color: rgba(0,0,0,0.5)">
            <div class="col-md-4" style="text-align: right;padding: 10px;">
                <p style="color:white">veritatis et quasi architecto beatae</p>
                <h3 style="color:white">dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</h3>
                <p style="color:white">et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga</p>
                <button class="topslider-button">KNOW MORE</button>
            </div>
            <div class="col-md-8" style="background-image: url('<?php echo base_url('assets/img/TigerNATX1.jpg'); ?>');height:300px;background-position:center;background-size:cover;background-repeat:no-repeat;;">    

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
        autoplayTimeout: 2000,
        autoplayHoverPause: false
    });
</script>


