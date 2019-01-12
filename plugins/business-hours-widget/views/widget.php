<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim($weekdays)) > 0): ?>

<p>
    <span class="business-weekdays">
         Monday-Friday:
        <?php echo  $weekdays; ?>
       
    </span>
</p>

<?php endif; ?>

<?php if(strlen(trim($saturday)) > 0): ?>
<p>
    <span class="business-saturday">
        Saturday:
        <?php echo  $saturday; ?>
    </span>
</p>
<?php endif; ?>


<?php if(strlen(trim($sundayy)) > 0): ?>
<p>
    <span class="business-sunday">
        Sunday:
        <?php echo  $sunday; ?>
    </span>
</p>
<?php endif; ?>