<?php  $token_1 = $csrf_token->generate_token('reply_message'); ?>
<div class="primary_wrapper">

<?php if ($error_container->has_errors()) { ?>
<div class="msg_wrapper_mt">
<span class="msg_span">System message</span>
<div class="msg_default">
<ul>
<li class="li_un">Sending the message was not successful.</li>
<?php $i = 1; ?>
<?php foreach ($error_container->get_errors() as $error) { ?>
<li class="li_un"><?php echo sanitize($i);?>. <?php echo sanitize($error);?></li>
<?php $i++; ?>
<?php } ?>
</ul>
<a href="index.php?section=view_inbox"><button class="msg_btn">Return to inbox</button></a>
</div>
</div>
<?php require_once 'themes/default_template/footer.php'; ?>
<?php exit(); ?>
<?php } ?>

<div class="content_container_wrapper">
<div class="content_container_margin_bottom">
<p><span class="secondary_font_color">Subject:</span> <?php echo sanitize($message['message_title']);?></p>
<p><span class="secondary_font_color">Received by:</span> <?php echo sanitize_ucfirst($message['sender_username']);?></p>
<p><span class="secondary_font_color">Token:</span> <?php echo sanitize($message_token_get);?></p>
<p><span class="secondary_font_color">Received at:</span> <?php echo sanitize($message['message_created']);?></p>
<div class="message_container"><?php echo sanitize($message['message']);?></div>

</div>
</div>
<form method="post">
<label for="message_text_form">Reply</label>
<textarea class="textarea_default" name="message_text_form" id="message_text_form" placeholder="Reply to message."></textarea>
<input type="hidden" name="csrf_token" value="<?php echo $token_1;?>">
<button class="btn_dynamic_mt_mb_10" type="submit" name="reply_message">Reply message</button>
</form>
<a href="index.php?section=view_inbox"><button class="btn_dynamic_mt_mb_10">Return to inbox</button></a>
</div>
