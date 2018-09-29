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
            }
            .icon-img{
                width:30px;
                padding-top:5px;
                position: relative;
                top: 0;
                transition:all 700ms;
                transition-property: top, width;
                transition-duration:700ms;
                transition-timing-function: ease;
                transition-delay: 0.5s;
                z-index: 5;
            }
            .icon-img:hover{
                width:35px;
                top: 600px;
                color: #009966;
                z-index:10;
            }
        </style>
    </head>
    <body>
        <div id="top-bar">
            <div class="hidden-md hidden-lg">
                <ul class="tile-icons">
                    <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></span></li>
                    <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Twitter.png'); ?>"></span></li>
                    <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Youtube.png'); ?>"></span></li>
                    <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Instagram.png'); ?>"></span></li>
                </ul>
            </div>
            <div class="hidden-sm hidden-xs">
                <div class="col-md-6 text-left">
                    <ul class="tile-icons">
                        <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></span></li>
                        <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Twitter.png'); ?>"></span></li>                    
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="tile-icons">
                        <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Youtube.png'); ?>"></span></li>
                        <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Instagram.png'); ?>"></span></li>
                    </ul>
                </div>
            </div>s
        </div>
