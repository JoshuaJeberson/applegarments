
<?php include 'db_connect.php';?>
<?php
$companyname = $_POST['name'];
$contact = $_POST['contact'];
$mailid = $_POST['email'];
$datetime = date('Y-m-d H:i:s');
$proid = $_POST["pro_id"];
$sql ="INSERT INTO customers VALUES ('$companyname', '$contact', '$mailid','$datetime',$proid)";

 
if ($con->query($sql) === TRUE) {
    echo "We will contact you soon!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>