
<?php
//my work dahir mohamed ali
//connection to the databse
$slu = mysql_connect("localhost", "root", "")or die ("cannot contect to server !!!,contact");
mysql_select_db("education_db", $slu)or die ("cannot connect to mysql database");
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$f = $_POST['f'];
$fee = $_POST['fee'];
//inserting into my table
$sql = "insert into tbcredit_card(id,name,age,gender,nationality,tel,email,f,fee) values('$id','$name','$age','$gender','$nationality','$tel','$email','$f','$fee')";
$result = mysql_query($sql);
if($result){

echo "<a href='money.php'>Successful Again</a>";
}else{

echo "Error...Try Again ";
}
?>
