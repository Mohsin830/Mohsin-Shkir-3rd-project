<?php
$id = $_GET['id'];

include 'conn.php';

$delete = mysqli_query($conn, "DELETE FROM `booking` WHERE id =$id");

if($delete)
{
    header('location:display_b.php');
}
else{
    ?>
    <script>
        // alert('Successfyl delete data');
    </script>

    <?php
}
?>