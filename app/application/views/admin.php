<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/summernote.css'); ?>">
<script src="<?php echo base_url('assets/js/summernote.js'); ?>"></script>

<div class="col-md-10 col-md-offset-1">
    <h4>List of packages</h4>
    <ul>
        <li><a>Beera - [URL : beera]</a></li>
        <li><a>Dudhwa - [URL : dudhwa]</a></li>
    </ul>
</div>
<div class="col-md-10 col-md-offset-1" style="min-height: 110vh">
    <form method="POST" action="<?php echo base_url('admin/update'); ?>">
        <label>Package URL</label>
        <?php if (isset($package)) { ?>
            <input value="<?php echo $package->package_name; ?>" readonly type="text" name="pid" style="width: 80%"><br>
        <?php } else { ?>
            <input type="text" name="pid" style="width: 80%"><br>
        <?php } ?>
        <label>Package Description</label>
        <?php if (isset($package)) { ?>
            <textarea id="summernote" name="description"><?php echo $package->package_description; ?></textarea>
        <?php } else { ?>
            <textarea id="summernote" name="description"></textarea>
        <?php } ?>

        <input type="submit" name="Submit">
    </form>
</div>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            height: 400,
            // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor $(document).height()
        });
    });
</script>