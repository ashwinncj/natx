<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/summernote.css'); ?>">
<script src="<?php echo base_url('assets/js/summernote.js'); ?>"></script>

<div style="width: 80%">
    <form method="POST" action="<?php echo base_url('admin/update'); ?>">
        <label>Package UID</label>
        <input type="text" name="pid" style="width: 80%"><br>
        <label>Package Description</label>
        <textarea id="summernote" name="description" style="width: 80%;"></textarea>
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