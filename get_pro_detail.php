<?php include 'db_connect.php';?>
<?php
 $pro_id=$_GET['pro_id'];
$query="select * from products where pro_id = $pro_id";
$result=$con-> query($query);
if($row = $result->fetch_assoc()) {
    echo json_encode($row);
}
?>