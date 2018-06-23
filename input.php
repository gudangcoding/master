<?php 
	include "connectdb.php";
	$data=json_decode(file_get_contents("php://input"));

//.......
	$btnName=$conn->real_escape_string($data->btnName);
	if($btnName=='Insert'){
//.......

//proses input data
	$id=$conn->real_escape_string($data->id);
	$nama=$conn->real_escape_string($data->nama);	
	$alamat=$conn->real_escape_string($data->alamat);
	$jenis=$conn->real_escape_string($data->jenis);

	$query="INSERT INTO murid VALUES($id,'".$nama."','".$alamat."','".$jenis."')";
	$conn->query($query);
}
// proses update data
	else{
	$id=$conn->real_escape_string($data->id);
	$nama=$conn->real_escape_string($data->nama);	
	$alamat=$conn->real_escape_string($data->alamat);
	$jenis=$conn->real_escape_string($data->jenis);
	$query="UPDATE murid SET nama = '".$nama."', alamat= '".$alamat."', jeniskelamin='".$jenis."' WHERE id=$id ";
	$conn->query($query);
	}
 ?>
