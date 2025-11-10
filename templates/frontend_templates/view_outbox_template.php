<div class="primary_wrapper">

<div class="content_container_wrapper">
<div class="content_container_margin_bottom">
<?php  if ($rows !== false) { ?>
<ul>
<?php foreach ($rows as $row) { ?>
<li class="li_un"><span class="secondary_font_color">Subject:</span> <a class="link_default" href="index.php?section=view_message&id=<?php echo sanitize($row['message_token']);?>"><?php echo sanitize($row['message_title']);?></a></li>
<li class="li_un"><span class="secondary_font_color">Sent to:</span> <?php echo sanitize_ucfirst($row['receiver_username']);?></li>
<li class="li_mb"><span class="secondary_font_color">Sent on:</span> <?php echo sanitize($row['message_created']);?></li>
<?php } ?>
</ul>
<?php } ?>
</div>
<div class="pagination">
<?php echo $pagination->render_pagination('index.php?section=view_outbox'); ?>
</div>
</div>

</div>
