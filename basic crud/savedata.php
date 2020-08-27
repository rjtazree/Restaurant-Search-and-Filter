<?php

echo $stu_id=$_POST['sid'];
echo $stu_name=$_POST['sname'];
echo $stu_class=$_POST['sclass'];


$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql = "INSERT INTO school(sid,sname,sclass) VALUES('{$stu_id}','{$stu_name}','{$stu_class}')";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("Location: http://localhost/school/index.php"); //after adding page will go to  main page

mysqli_close($conn);

?>