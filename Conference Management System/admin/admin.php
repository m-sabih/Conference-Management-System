<?php
  include_once('library.php');
  $obj=  new Connection();
class admin
{
	function admin_panel(){
		if (Connection::$conn->connect_error) {
        die("Connection failed: " . Connection::$conn->connect_error);
    	}
    $sql = 'SELECT * FROM `register`';
    $result = mysqli_query(Connection::$conn,$sql);
		?>
		<div style="padding-top: 80px;" class="container">
		<div class="row">
		    <table class="table" width="500">
		        <tr>
		            <th>S.No</th>
		            <th>Name</th>
		            <th>File Name</th>
		            <th>Conference</th>
		            <th>Mobile Number</th>
		            <th>Education</th>                                
		            <th>Publication</th>
		            <th>Employment</th>
		            <th>Delete</th>                                
		            <th>View</th>
		        </tr>     
		        <?php 
		           // while ($r = mysqli_fetch_assoc($result)) {
		while($r = $result->fetch_assoc()) {
		            $idd2=$r['conf_id'];
		            $sql2 = "SELECT * FROM `conferences` WHERE `conf_id`=$idd2";
		                $result2 = mysqli_query(Connection::$conn,$sql2);
		        ?>
		        <tr>
		            <td><?php echo $r['id']; ?></td>
		            <td><?php echo $r['name']; ?></td>
		            <td><?php echo $r['f_name']; ?></td>
		            <?php while($r2 = $result2->fetch_assoc()) { ?>
		            <td><?php echo $r2['con_name']; ?></td>
		            <?php } ?>
		            <td><?php echo $r['mobile_number']; ?></td>
		            <td><?php echo $r['education']; ?></td>
		            <td><?php echo $r['publications']; ?></td>
		            <td><?php echo $r['employment']; ?></td>
		            <td><a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
		            <td><a href="get_file.php?id=<?php echo $r['id']; ?>">Preview</a></td>
            </tr>
            <?php } ?>
            </table>

<?php
connection::$conn->close();
	}
	}
	?>