<?php
//my work dahir mohamed ali
//connection to the databse
$slu = mysql_connect("localhost", "root", "")or die ("cannot contect t server !!!,contact");
mysql_select_db("education_db", $slu)or die ("cannot connect to mysql database");
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$nationality= $_POST['nationality'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$comment = $_POST['comment'];
//inserting into my table
$sql = "insert into suggestions(id,name,gender,nationality,tel,email,comment) values('$id','$name','$gender','$nationality','$tel','$email','$comment')";
$result = mysql_query($sql);
if($result){

echo "<a href='home.php'>suggest Again</a>";
}else{

echo "Error...Try Again ";
}
?>