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
        transition:all 1.5s; 
    }
    .front{
        z-index:2;
        transition:all 1.5s; 
        background-position: center;
        position:absolute;
        width:100%;
        height:100%;
    }
    .back{
        z-index:1;
        transform: rotate3d(0, 0.5, 0, 180deg);
        /*                transition-delay: 300ms;*/
        transition-duration:1.5s; 
        background-position: center;
        position:absolute;
        width:100%;
        height:100%;
    }
    .tile{
        margin: 5px;
/*        width:230px;*/
        height:300px;
        position:relative;
        opacity:0.75;
    }
    .tile-parent{
        padding:0px;
    }
</style>
<title>NATX</title>
<div id="page-layout">
    <div class="col-md-3 tile-parent">
        <div class="rotate tile">
            <div class="front" style="background-image: url('<?php echo base_url('assets/img/CBT 0114.jpg'); ?>');">
            </div>
            <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
            </div>
        </div>
    </div>
    <div class="col-md-3 tile-parent">
        <div class="rotate tile">
            <div class="front" style="background-image: url('<?php echo base_url('assets/img/CBT 0114.jpg'); ?>');">
            </div>
            <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
            </div>
        </div>
    </div>
    <div class="col-md-3 tile-parent">
        <div class="rotate tile">
            <div class="front" style="background-image: url('<?php echo base_url('assets/img/CBT 0114.jpg'); ?>');">
            </div>
            <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
            </div>
        </div>
    </div>
    <div class="col-md-3 tile-parent">
        <div class="rotate tile">
            <div class="front" style="background-image: url('<?php echo base_url('assets/img/CBT 0114.jpg'); ?>');">
            </div>
            <div class="back" style="background-image: url('<?php echo base_url('assets/img/BTR05171DxMii6350.jpg'); ?>');">
            </div>
        </div>
    </div>
</div>
