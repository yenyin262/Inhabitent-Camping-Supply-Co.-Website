<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('telephone'); ?>"><i class="fas fa-phone"></i><span class="contact-icon">Telephone:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telephone'); ?>" name="<?php echo $this->get_field_name('telephone'); ?>" type="text" value="<?php echo $telephone; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email'); ?>"><i class="fas fa-envelope"></i><span class="contact-icon">Email:</span></label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('address'); ?>"> <i class="fa fa-map-marker"></i><span class="contact-icon">Address</span></label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>

</div>
