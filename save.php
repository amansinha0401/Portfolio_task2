<?php
$name = $_POST["aname"];
$mail = $_POST["mail"];
$ques = $_POST["ques"];
$conn = mysqli_connect("localhost", "root", "", "pp") or die("connection failed");
$sql = "INSERT INTO ppt( name, mail, ques) VALUES ('{$name}','{$mail}','{$ques}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
// header("location: http://localhost/database%20form/contactfrom.php");
// mysqli_close($conn);
?>