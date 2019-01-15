<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim($weekdays)) > 0): ?>

<p>
    <span class="business-weekdays">
       <b>  Monday-Friday:</b>
        <?php echo  $weekdays; ?>
       
    </span>
</p>

<?php endif; ?>

<?php if(strlen(trim($saturday)) > 0): ?>
<p>
    <span class="business-saturday">
        <b>Saturday:</b>
        <?php echo  $saturday; ?>
    </span>
</p>
<?php endif; ?>


<?php if(strlen(trim($sunday)) > 0): ?>
<p>
    <span class="business-sunday">
       <b>Sunday:</b>
        <?php echo  $sunday; ?>
    </span>
</p>
<?php endif; ?>