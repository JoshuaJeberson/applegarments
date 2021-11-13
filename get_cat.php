<?php include 'db_connect.php';?>
<?php
$res=array();
$query="select * from categories";
$result=$con-> query($query);
while($row = $result->fetch_assoc()) {
   $r=array();
   $r['cat_name']=$row["cat_name"];
   $r['cat_img']=$row["cat_img"];
   array_push($res,$r);
}

echo json_encode($res);
?>
