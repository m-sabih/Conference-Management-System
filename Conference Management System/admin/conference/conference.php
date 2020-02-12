<?php
  include_once('library.php');
class conference
{
	function conferences(){
      $sql = 'SELECT * FROM `Conferences`';
      $result = query($sql);
      ?>

      <div style="padding-top: 80px;" class="container">
    <div class="row">
        <table class="table" width="500">
            <tr>
                <th>Conference</th>
                <th>Conference Date</th>
                <th>Location</th>
                <th>Edit</th>
            </tr>     

            <?php 
               // while ($r = mysqli_fetch_assoc($result)) {
            foreach ($result as $key => $r){
            ?>
            <tr>
                <td><?php echo $r['con_name']; ?></td>
                <td><?php echo $r['con_date']; ?></td>
                <td><?php echo $r['location']; ?></td>
                <td><a href="register/index.php?id=<?php echo $r['conf_id']; ?>">Edit</a></td>
            </tr>
            <?php } ?>
<?php
	}

	function edit_conference(){
		if(isset($_GET) & !empty($_GET)){
		  $id = $_GET['id'];
		  //echo $id; 
		}?>
		  <br>
		  <br>
		  <br>
		  <form method="post" class="file-uploader" action="add_file.php?id=<?php echo $id ?>" enctype="multipart/form-data">
		  <h1 align="center"> Update Conference </h1>
		  <div style="padding: 15px;" >  <input type="text" name="c_name" class="input" placeholder="Conference Name"> </div>
		  <div style="padding: 15px;" >  <input type="text" name="c_des" class="input" placeholder="Conference Discription"> </div>
		  <div style="padding: 15px;" >  <input type="text" name="c_date" class="input" placeholder="Conference Date"> </div>
		   <div style="padding: 15px;" >  <input type="text" name="c_loc" class="input" placeholder="Conference Location"> </div>
		  <input class="file-uploader__submit-button" type="submit" value="Edit">
		</form>

		  

		    <script  src="js/index.js"></script>

<?php

	}
	}
	?>