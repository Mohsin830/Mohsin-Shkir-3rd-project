<?php
$id = $_GET['id'];

include 'conn.php';

$delete = mysqli_query($conn, "DELETE FROM `records` WHERE id =$id");

if($delete)
{
    header('location:display_r.php');
}
else{
    ?>
    <script>
        alert('Successfyl delete data');
    </script>

    <?php
}
?>