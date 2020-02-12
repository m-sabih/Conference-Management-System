<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php 
  	  echo "<font color='#0000FF'>" . $error . "</font>";
  	  ?>	
  	  </p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>