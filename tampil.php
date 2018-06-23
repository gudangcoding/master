<?php 
include "connectdb.php";

$query="SELECT * FROM murid";
$rs=$conn->query($query);

while($row=$rs->fetch_assoc()) {
	$data[]=$row;

}
print json_encode($data);
 ?>
