<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Roboto+Mono" rel="stylesheet">
        <style>
            #page-parent{
                width:100%;
            }
            #page-layout{
                background-color: rgba(255,255,255,0);
                /*                box-shadow: 0px 0px 10px 0px #666;*/
                min-height: 100vh;
                width: 80%;
                float: none;
                margin: auto;
                margin-top: 0px;
                overflow: auto;
            }
            body{
                background-color: #F5EFE6;
                font-family: Roboto;
            }
            #top-bar{
                background-color: rgba(0,0,0,0.7);
                height: 40px;
                position: relative;
                z-index: 5;

            }
            #page-layout-heading{
                background-color: #eee;
            }
            #page-layout-heading p{
                font-size: 24px;
                padding-left: 35px;
                font-weight: normal;
                color: #666;
            }
            .tile-icons li{
                display:inline;
                padding:2px;
                transition:all 2s;
                position: fixed;
            }
            .icon-img{
                width:30px;
                padding-top:5px;
                position: relative;
                top: 0vh;
                transition:all 1000ms;
                transition-property: top, width;
                transition-duration:1000ms;
                transition-timing-function: ease;
                transition-delay: 0.8s;
                -webkit-transition:all 1000ms;
                -webkit-transition-property: top, width;
                -webkit-transition-duration:1000ms;
                -webkit-transition-timing-function: ease;
                -webkit-transition-delay: 0.8s;
                z-index: 5;
            }
            .icon-img:hover{
                width:35px;
                top: 65%;
                color: #009966;
                z-index:10;
            }
            .icon-drop{
                top: 50vh;
            }
            .rotate:hover .front{
                z-index: 1;
                transform: rotateY(180deg);
                /*                transform: rotate3d(0, 1, 0, 180deg);
                                -ms-transform: rotate3d(0, 1, 0, 180deg);
                                -moz-transform: rotate3d(0, 1, 0, 180deg);
                                -webkit-transform: rotate3d(0, 1, 0, 180deg);*/
            }
            .rotate:hover .back{
                z-index: 3;
                transform: rotateY(0deg);
                /*                transform: rotate3d(0, 1, 0, 0deg);
                                -ms-transform: rotate3d(0, 1, 0, 0deg);
                                -moz-transform: rotate3d(0, 1, 0, 0deg);
                                -webkit-transform: rotate3d(0, 1, 0, 0deg);*/
            }
            .rotate{
                transition:all 1s;
                -moz-transition:all 1s;
                -ms-transition:all 1s;
                -webkit-transition:all 1s;
            }
            .front{
                z-index:2;
                transition:all 1s;
                -moz-transition:all 1s;
                -ms-transition:all 1s;
                -webkit-transition:all 1s;
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
                transform: rotateY(180deg);
                /*                transform: rotate3d(0, 0.5, 0, 180deg);
                                -webkit-transform: rotate3d(0, 0.5, 0, 180deg);
                                -moz-transform: rotate3d(0, 0.5, 0, 180deg);
                                -ms-transform: rotate3d(0, 0.5, 0, 180deg);
                                                transition-delay: 300ms;*/
                transition-duration:1s;
                -webkit-transition-duration:1s;
                -moz-transition-duration:1s;
                -ms-transition-duration:1s;
                background-position: center;
                background-size: cover;
                position:absolute;
                width:95%;
                height:100%;
                padding: 20px;
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
    </head>
    <body>
        <div id="top-bar">
            <div class="hidden-md hidden-lg text-center">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/NATXLogo.png'); ?>" style="width: 250px;"></a>
                <ul class="tile-icons" style="padding: 0">
                    <li style="left: 0px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></span></li>
                    <li style="left: 40px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Twitter.png'); ?>"></span></li>
                    <li style="left: 80px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Youtube.png'); ?>"></span></li>
                    <li style="left: 120px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Instagram.png'); ?>"></span></li>
                </ul>
            </div>
            <div class="hidden-sm hidden-xs">
                <div class="col-md-4 text-left">
                    <ul class="tile-icons">
                        <li style="left: 40px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></span></li>
                        <li style="left: 80px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Twitter.png'); ?>"></span></li>                    
                    </ul>
                </div>
                <div class="col-md-4 text-center" style="z-index: 5">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/NATXLogo.png'); ?>" style="width: 250px;"></a>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="tile-icons">
                        <li style="right: 40px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Youtube.png'); ?>"></span></li>
                        <li style="right: 80px;"><span><img class="icon-img" src="<?php echo base_url('assets/img/Instagram.png'); ?>"></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="background-color: #e4e4e4; height: 35px; width:150px; border-radius: 25px; padding-left: 8px;position: fixed;z-index: 7;right: -15px;bottom: 50px">
            <a href="https://api.whatsapp.com/send?phone=919845044599" target="blank">
                <div class="col-xs-3"  style="height:30px; background-image: url('<?php echo base_url('assets/img/whatsapp.png'); ?>'); background-repeat: no-repeat; background-size: contain; margin-top:2px"></div>
                <div class="col-xs-9" style="height: 30px;padding: 8px">
                    <p>Nanda</p>
                </div>
            </a>
        </div>
        <div style="background-color: #e4e4e4; height: 35px; width:150px; border-radius: 25px; padding-left: 8px;position: fixed;z-index: 7;right: -15px;bottom: 10px">
            <a href="https://api.whatsapp.com/send?phone=919815791910" target="blank">
                <div class="col-xs-3"  style="height:30px; background-image: url('<?php echo base_url('assets/img/whatsapp.png'); ?>'); background-repeat: no-repeat; background-size: contain; margin-top:2px"></div>
                <div class="col-xs-9" style="height: 30px;padding: 8px">
                    <p>Sanjeet</p>
                </div>
            </a>
        </div>
        <script>
            $(document).ready(function () {
                $('.icon-img').css('top', '70vh');
                //$('.icon-img').css('position','fixed');
            });
        </script>