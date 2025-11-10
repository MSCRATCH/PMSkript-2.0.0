<div class="primary_wrapper">

<div class="content_container_wrapper">
<div class="content_container_margin_bottom">
<?php  if ($rows !== false) { ?>
<ul>
<?php foreach ($rows as $row) { ?>
<?php $message_status = (INT) $row['message_status']; ?>
<?php  if ($message_status === 1) { ?>
<li class="li_un"><span class="secondary_font_color">Subject:</span> <a class="link_default" href="index.php?section=reply_message&id=<?php echo sanitize($row['message_token']);?>"><?php echo sanitize($row['message_title']);?></a></li>
<?php } else { ?>
<li class="li_un"><span class="secondary_font_color">Subject:</span> <a class="link_secondary" href="index.php?section=reply_message&id=<?php echo sanitize($row['message_token']);?>"><?php echo sanitize($row['message_title']);?></a></li>
<?php } ?>
<li class="li_un"><span class="secondary_font_color">Received by:</span> <?php echo sanitize_ucfirst($row['sender_username']);?></li>
<li class="li_mb"><span class="secondary_font_color">Received at:</span> <?php echo sanitize($row['message_created']);?></li>
<?php } ?>
</ul>
<?php } ?>
</div>
<div class="pagination">
<?php echo $pagination->render_pagination('index.php?section=view_inbox'); ?>
</div>
</div>

</div>
