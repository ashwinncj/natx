<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Roboto+Mono" rel="stylesheet">
        <style>    
            #page-layout{
                background-color: rgba(255,255,255,0);
                /*                box-shadow: 0px 0px 10px 0px #666;*/
                min-height: 100vh;
                width: 80%;
                float: none;
                margin: auto;
                margin-top: 15px;
                overflow: auto;
            }
            body{
                background-color: #F5EFE6;
                font-family: Roboto;
                background-image: url('<?php echo base_url('assets/img/MGL08175DsR9449.jpg'); ?>');
                background-position:center;
                background-size:cover;
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
            /*            .icon-img{
                            width:30px;
                            padding-top:5px;
                            transition:all 3s;
                            position:relative;
                        }
                        .icon-img:hover{
                            position: absolute;
                            top: 30px;          
                        }
            */            
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
                transition:all 1s;
                transition-property: top;
                transition-duration:1s;
                transition-timing-function: ease;
                transition-delay: 1s; 
            }
            .icon-img:hover{
                top: 600px;
                color: #009966;
            }
            /*            .tile-icons li:hover{
                            position: fixed;
                            bottom: 30px;
                        }*/
        </style>
    </head>
    <body>
        <div id="top-bar">
            <ul class="tile-icons">
                <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Facebook.png'); ?>"></span></li>
                <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Twitter.png'); ?>"></span></li>
                <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Youtube.png'); ?>"></span></li>
                <li><span><img class="icon-img" src="<?php echo base_url('assets/img/Instagram.png'); ?>"></span></li>
            </ul>
        </div>