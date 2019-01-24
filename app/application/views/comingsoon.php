<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Roboto+Mono" rel="stylesheet">
<title>NATX - Coming soon</title>
<div id="page-parent" style="position: relative;">
    <div id="page-layout" style="text-align: center;">
        <p style="font-size:40px;font-family:Raleway;position: relative;top: 50px">
            Coming soon...
            <br>
            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>
        </p>
<!--        <p style="font-size:30px;font-family:Raleway;position: relative;top: 50px">
            <a href="<?php //echo base_url(); ?>">
                <button>Home</button></a>
        </p>-->
        <a href="<?php echo base_url(); ?>">
<!--            <div style="text-align: center;background-image: url('<?php echo base_url('assets/img/NATXLogo.png'); ?>'); background-position:center;background-size:500px;height: 70vh;background-repeat:no-repeat">    
            </div>-->
        </a>
    </div>
</div>
