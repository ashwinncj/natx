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
        opacity:0.85;
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
<!-- <div id="page-parent" style="background-image: url('<?php //echo base_url('assets/img/MGL08175DsR9449.jpg');               ?>'); background-position:center;background-size:cover;"> -->
<div id="page-parent" style="position:relative">
    <?php $this->load->view('slider-wildlife'); ?>
    <div id="page-layout" style="">
        
    </div>
</div>
