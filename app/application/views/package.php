<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$xml = simplexml_load_file('./assets/packages/'.$name.'.xml') or redirect('home');
        //die("Error: Cannot create object");
?>
<style>
    #page-layout{
        background-color: rgba(255,255,255,0.85);
    }
</style>
<title>NATX</title>
<div id="page-parent" style="background-image: url('<?php echo base_url($xml->package->background); ?>'); background-position:center;background-size:cover;"> 
    <!--<div id="page-parent" style="position:relative">-->
    <?php //$this->load->view('topslider'); ?>
    <div id="page-layout" style="padding: 20px">
        <div style="background-image: url('<?php echo base_url($xml->package->headerimage); ?>'); height: 300px;background-position:center;background-size:cover;"> 
        </div>
        <h1>
            <?php echo $xml->package->title; ?>
        </h1>
        <div style="padding-left:30px;padding-right: 30px">
            <?php
            foreach ($xml->package->details->day as $day) {
                ?>
                <div>
                    <h4 style="font-size: 14px;font-weight: bold;">
                        <?php echo $day->number . ' - '; ?>
                    </h4>
                </div>
                <div>
                    <p style="padding-left: 10px">
                        <?php echo $day->activity . '<br>'; ?>
                    </p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
