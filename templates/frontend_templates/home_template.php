<div class="primary_wrapper">
<div class="content_container_wrapper">
<div class="content_container_margin_bottom">
<p><?php echo sanitize(name); ?> <?php echo sanitize(version); ?></p>
<?php if ($number_of_new_messages >= 1) { ?>
<?php if ($number_of_new_messages === 1) { ?>
<p>You have <span class="secondary_font_color">1</span> message in your inbox.</p>
<?php } ?>
<?php if ($number_of_new_messages > 1) { ?>
<p>You have <span class="secondary_font_color"><?php echo sanitize($number_of_new_messages); ?></span> messages in your inbox.</p>
<?php } ?>
<?php } ?>
<p>This is the <?php echo sanitize(name); ?>, a system for sending and receiving private messages.</p>
</div>
</div>

</div>
