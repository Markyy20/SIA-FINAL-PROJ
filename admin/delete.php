
<?php
include( "connection.php");
$id = $_GET["ID"];
$sql = "DELETE FROM `info_table` WHERE ID = $id";
$result = mysqli_query($connections, $sql);

if ($result) {
header("location: admin.php");
} else {
  echo "Failed: " . mysqli_error($connection);
}
