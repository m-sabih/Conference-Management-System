    <?php
    // Make sure an ID was passed
    require_once('connect.php');
    if(isset($_GET['id'])) {
    // Get the ID
        $id = intval($_GET['id']);
     
        // Make sure the ID is in fact a valid ID
        if($id <= 0) {
            die('The ID is invalid!');
        }
        else {
            $query = "
                SELECT `mime`, `f_name`, `size`, `data`
                FROM `register`
                WHERE `id` = {$id}";
            $result = mysqli_query($connection, $query);
     
            if($result) {
                if($result->num_rows == 1) {
                    $row = mysqli_fetch_assoc($result);
                    header("Content-Type: ". $row['mime']);
                    header("Content-Length: ". $row['size']);
                    header("Content-Disposition: attachment; filename=". $row['name']);
                    echo $row['data'];
                }
                else {
                    echo 'Error! No data exists with that ID.';
                }
                @mysqli_free_result($result);
            }
            else {
                echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
            }
        }
    }
    else {
        echo 'Error! No ID was passed.';
    }
    ?>

