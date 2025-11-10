<?php  $token_1 = $csrf_token->generate_token('send_message'); ?>

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
<a href="index.php?section=register"><button class="msg_btn">Return to new message</button></a>
</div>
</div>
<?php require_once 'themes/default_template/footer.php'; ?>
<?php exit(); ?>
<?php } ?>

<form method="post">
<label for="username_form">Recipient</label>
<input class="form_text_default" type="text" name="username_form" id="username_form" placeholder="Username">
<label for="message_title_form">Subject</label>
<input class="form_text_default" type="text" name="message_title_form" id="message_title_form" placeholder="Subject">
<label for="message_text_form">Message</label>
<textarea class="textarea_default" name="message_text_form" id="message_text_form" placeholder="Write a message."></textarea>
<input type="hidden" name="csrf_token" value="<?php echo $token_1;?>">
<button class="btn_dynamic_mt_mb_10" type="submit" name="send_message">Send message</button>
</form>
<a href="index.php"><button class="btn_dynamic_mt_mb_10">Return to home page</button></a>
</div>
