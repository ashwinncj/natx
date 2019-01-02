<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Roboto+Mono" rel="stylesheet">
<div id="page-parent">
    <div id="page-layout" style="text-align: center;">
        <p style="font-size:50px;font-family:Raleway;">
            Coming soon...
            <br>
            <?php
            if (isset($msg)) {
                echo $msg;
            }
            ?>
        </p>
        <a href="<?php echo base_url(); ?>">
            <div style="text-align: center;background-image: url('<?php echo base_url('assets/img/NATXLogo.png'); ?>'); background-position:center;background-size:500px;height: 70vh;background-repeat:no-repeat">    
            </div>
        </a>
    </div>
</div>
