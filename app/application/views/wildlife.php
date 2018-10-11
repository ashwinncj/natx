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
<!-- <div id="page-parent" style="background-image: url('<?php //echo base_url('assets/img/MGL08175DsR9449.jpg');              ?>'); background-position:center;background-size:cover;"> -->
<div id="page-parent" style="position:relative">
    <?php $this->load->view('slider-wildlife'); ?>
    <div id="page-layout" style="">
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url('package/info/beraandranthambore'); ?>">
                <div class="rotate tile">
                    <div class="front" style="background-color:rgba(48,50,49,1)">
                        <p class="title">Bera & Ranthambore</p>
                        <p class="description">
                            10 days trip covering Udaipur, Bera, Ranthambhore and Jaipur. One gets to see heritage, wildlife, ethnic shopping and local cuisines.
                        </p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_ranthambore.jpg'); ?>');">
                    </div>              
                </div>
            </a>
        </div>
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url('package/info/dudhwaphotography'); ?>">
                <div class="rotate tile">
                    <div class="front" style="background-color:rgba(21,37,43,1)">
                        <p class="title">Dudhwa (Photography Only)</p>
                        <p class="description">
                            5 Day trip to check out the Terai grass lands of the lower himalayas! Tiger, Barasinghas, Elephants, Rhinos and much more.
                        </p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_dudhwaimage.jpg'); ?>');">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url('package/info/dudhwawithbardia'); ?>">
                <div class="rotate tile">
                    <div class="front" style="background-color:rgba(20,47,48,1)">
                        <p class="title">Dudhwa (India) & Bardia (Nepal)</p>
                        <p class="description">
                            10 days trip covering Billy's area Dudhwa, Nepal and Lucknow. Wildlife, two countries with border crossing, local cuisine of Lucknow. 
                        </p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_dudhwaimage.jpg'); ?>');">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url('package/info/winterspitivalley'); ?>">
                <div class="rotate tile">
                    <div class="front" style="background-color:rgba(50,78,93,1)">
                        <p class="title">Winter Spiti Valley Snow Leopard Expedition</p>
                        <p class="description">
                            11 days trip to the Snow Leopard country in comfortable home stays and high probability of good snow leopard sightings.
                        </p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_snow_leopard_spiti_valley_winter.jpg'); ?>');">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url('package/info/beraphotography'); ?>">
                <div class="rotate tile dark">
                    <div class="front" style="background-color:rgba(229,225,228,1)">
                        <p class="title">Bera (Photography Only)</p>
                        <p class="description">
                            5 Day trip of Bera and Udaipur. Wildlife photography in Bera and heritage sightseeing in Udaipur.
                        </p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_bera.jpg'); ?>');">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 tile-parent">
            <a href="<?php echo base_url(''); ?>">
                <div class="rotate tile dark">
                    <div class="front" style="background-color:rgba(166,170,159,1)">
                        <p class="title">Contact</p>
                        <p class="description"></p>
                        <p class="readmore">More</p>
                    </div>
                    <div class="back" style="background-image: url('<?php echo base_url('assets/img/packages/wildlife_snow_leopard_spiti_valley_winter.jpg'); ?>');">
                    </div>
                </div>
            </a>
        </div>        
    </div>
</div>
