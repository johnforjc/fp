<?php

$con = mysqli_connect('localhost', 'fp', 'fp12345', 'fp') or die("Cant Connect To DB");
$sql="SELECT * FROM soals";
$hasil = mysqli_query($con,$sql);

$data = array();
while($row = mysqli_fetch_assoc($hasil)){
    $data[] = $row;
}

echo json_encode($data);

?>