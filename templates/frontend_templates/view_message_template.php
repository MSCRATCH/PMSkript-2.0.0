<div class="primary_wrapper">

<div class="content_container_wrapper">
<div class="content_container_margin_bottom">
<p><span class="secondary_font_color">Subject:</span> <?php echo sanitize($message['message_title']);?></p>
<p><span class="secondary_font_color">Sent to:</span> <?php echo sanitize($message['sender_username']);?></p>
<p><span class="secondary_font_color">Sent on:</span> <?php echo sanitize($message['message_created']);?></p>
<div class="message_container"><?php echo sanitize($message['message']);?></div>
</div>
</div>

</div>
