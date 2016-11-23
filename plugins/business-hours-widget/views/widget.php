<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen(trim ($mon_fri) ) > 0 ) : ?>
<p>
   <span class="dow"> Monday-Friday:</span> <?php echo $mon_fri; ?>
</p>
<?php endif; ?>

<?php if ( strlen(trim ($sat) ) > 0 ) : ?>
<p>
   <span class="dow"> Saturday:</span> <?php echo $sat; ?>
</p>
<?php endif; ?>

<?php if ( strlen(trim ($sun) ) > 0 ) : ?>
<p>
   <span class="dow"> Sunday:</span> <?php echo $sun; ?>
</p>
<?php endif; ?>