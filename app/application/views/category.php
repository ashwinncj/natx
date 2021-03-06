<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .rotate:hover .front{
        z-index: 1;
        transform: rotate3d(0, 1.5, 0, 180deg);
    }
    .rotate:hover .back{
        z-index: 2;
        transform: rotate3d(0, 1.5, 0, 0deg);
    }
    .rotate{
        transition:all 1s;
    }
    .front{
        z-index:2;
        transition:all 1s;
        background-position: center;
        background-size: cover;
        position:absolute;
        width:95%;
        height:100%;
        padding: 20px;
        font-family: Raleway;
        overflow:hidden;
    }
    .back{
        z-index:1;
        transform: rotate3d(0, 0.5, 0, 180deg);
        /*                transition-delay: 300ms;*/
        transition-duration:1s;
        background-position: center;
        background-size: cover;
        position:absolute;
        width:95%;
        height:100%;
    }
    .tile{
        margin: 5px;
        /*        width:230px;*/
        height:40vh;
        position:relative;
        opacity:0.75;
    }
    .tile:hover{
        cursor: pointer;
    }
    .tile-parent{
        padding:0px;
    }
    .tile .title{
        font-size:18px;
        color:white;
    }
    .tile .description{
        font-size:13px;
        color:white;
    }
    .tile .readmore{
        font-size:12px;
        color:white;
        margin-top:20px;
        position:absolute;
        bottom:20px;
    }
    .dark .title{
        font-size:18px;
        color:black;
    }
    .dark .description{
        font-size:13px;
        color:black;
    }
    .dark .readmore{
        font-size:12px;
        color:black;
        margin-top:20px;
        position:absolute;
        bottom:20px;

    }
</style>
<title>NATX</title>
<!-- <div id="page-parent" style="background-image: url('<?php //echo base_url('assets/img/MGL08175DsR9449.jpg');    ?>'); background-position:center;background-size:cover;"> -->
<div id="page-parent" style="position:relative">
    <?php $this->load->view('topslider'); ?>
    <div id="page-layout" style="">
        <div class="col-md-4 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(48,50,49,1)">
                    <p class="title">Nature</p>
                    <p class="description">
                        A large country with variety of terrains and landscapes makes India, a jewel for Nature visit! Come on our tours to experience the beauty of the nation!
                    </p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-4 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(21,37,43,1)">
                    <p class="title">Wildlife</p>
                    <p class="description">
                        With over a decade of experience traveling the wild in India, the team has come up with packages for a comprehensive but entertaining list of wildlife tours.
                    </p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/KBN01161Dx-0973.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-4 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(20,47,48,1)">
                    <p class="title">Diving</p>
                    <p class="description">
                        With over a decade of experience traveling the wild in India, the team has come up with packages for a comprehensive but entertaining list of wildlife tours.
                        Ever wondered how it could be, if you could breath underwater and enjoy that world unseen by a normal man! 
                        That's exactly what scuba diving teaches you. Spend a little part of your vacation to get certified as a scuba diver and take a plunge into a new passion. 
                        We will help you with courses to suit all levels.
                        Are you a certified Scuba diver looking for a dive holiday?
                        Our professional team will help you plan your dive holidays from a list, curated with personal experience, to suit your ability and budget.
                    </p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/BKN10175DsR2263.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-4 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Shop</p>
                    <p class="description">
                    We are pleased to sell Made in India items at world class quality for a variety of needs. Serious experience and thought has gone in designing these items.     
                    </p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/ANP11165DsR2138Pano.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-4 tile-parent">
            <div class="rotate tile dark">
                <div class="front" style="background-color:rgba(229,225,228,1)">
                    <p class="title">Blog & Gallery</p>
                    <p class="description">
                        We share thoughts from our guests and use in our blogs. Our guests can send us their images which once selected, will be posted in our gallery so they can also relate to the shared experience.     
                    </p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/HLK02165DsR3575.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-4 tile-parent">
            <div class="rotate tile dark">
                <div class="front" style="background-color:rgba(166,170,159,1)">
                    <p class="title">Contact</p>
                    <p class="description"></p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/LBH10175DsR0249.jpg'); ?>');">
                </div>
            </div>
        </div>        
    </div>
</div>
