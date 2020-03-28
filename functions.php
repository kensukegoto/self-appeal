<?php
// functions.php

function my_ajax_url() {
?>
  <script>var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';</script>
<?php
}
add_action('wp_head', 'my_ajax_url', 1);
?>