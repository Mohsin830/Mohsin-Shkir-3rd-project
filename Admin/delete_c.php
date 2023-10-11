<?php
$id = $_GET['id'];

include 'conn.php';

$delete = mysqli_query($conn, "DELETE FROM `contacts` WHERE id =$id");

if($delete)
{
    header('location:display_c.php');
}
else{
    ?>
    <script>
        // alert('Successfyl delete data');
    </script>

    <?php
}
?>