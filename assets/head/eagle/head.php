<!-- Global Custom Head Code -->
<?php if( get_field('ts_custom_head_code__code', 'option') ) {
  echo get_field('ts_custom_head_code__code', 'option');
} ?>

<!-- Custom Head Code -->
<?php if( get_field('ts_custom_head_code__code') ) {
  echo get_field('ts_custom_head_code__code');
} ?>

<!-- Google reCAPTCHA -->
<script src='https://www.google.com/recaptcha/api.js'></script>
