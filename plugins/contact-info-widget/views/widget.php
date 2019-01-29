<!-- This file is used to markup the public-facing widget. -->

<?php if(strlen(trim($telephone)) > 0): ?>
    <p>
        <span class="telephone">
        <i class="fas fa-phone"></i><span class="contact-icon"></span>
            <span class="contact-widget"> <?php echo  $telephone; ?></span>
         </span>
    </p>

<?php endif; ?>

<?php if(strlen(trim($email)) > 0): ?>
    <p>
      <span class="contact-email">
      <i class="fas fa-envelope"></i><span class="contact-icon"></span>
      <span class="contact-widget"><?php echo  $email; ?></span>
      </span>
    </p>
<?php endif; ?>


<?php if(strlen(trim($address)) > 0): ?>
    <p>
    <span class="contact-address">
 <i class="fas fa-map-marker-alt"></i><span class="contact-icon"></span>
 <?php echo  $address; ?>
        </span>
    </p>
<?php endif; ?>