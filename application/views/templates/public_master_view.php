<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/_parts/public_master_header_view');
?>
<div class="container">
    <?php echo $the_view_content; ?>
</div>
<?php $this->load->view('templates/_parts/public_master_footer_view'); ?>