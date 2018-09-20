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
        width:96%;
        height:100%;
        padding: 20px;
        font-family: Raleway;
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
        height:300px;
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
<div id="page-parent" style="background-image: url('<?php echo base_url('assets/img/MGL08175DsR9449.jpg'); ?>'); background-position:center;background-size:cover;">
    <?php $this->load->view('topslider'); ?>
    <div id="page-layout" style="">
                <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(48,50,49,1)">
                    <p class="title">Into the WILD</p>
                    <p class="description">Take a journey through the forest and look at the untamed.</p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(21,37,43,1)">
                    <p class="title">Birds Scenery</p>
                    <p class="description">Journey to look around the majestic creatures.</p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/KBN01161Dx-0973.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(20,47,48,1)">
                    <p class="title">Underwater</p>
                    <p class="description">Visualize your experience under the surface of water.</p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/BKN10175DsR2263.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Landscapes</p>
                    <p class="description">Experience a view of natural inland scenery.</p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/ANP11165DsR2138Pano.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Fishlife</p>
                    <p class="description"></p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/HLK02165DsR3575.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Macrolife</p>
                    <p class="description"></p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/LBH10175DsR0249.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Mammals</p>
                    <p class="description"></p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/CBT0514-1832.jpg'); ?>');">
                </div>
            </div>
        </div>
        <div class="col-md-3 tile-parent">
            <div class="rotate tile">
                <div class="front" style="background-color:rgba(50,78,93,1)">
                    <p class="title">Cats</p>
                    <p class="description"></p>
                    <p class="readmore">More</p>
                </div>
                <div class="back" style="background-image: url('<?php echo base_url('assets/img/GIR1213lionesscubs.jpg'); ?>');">
                </div>
            </div>
        </div>
    </div>
</div>
