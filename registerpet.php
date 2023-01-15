<?php 

$pet_name=$_POST['pet_name'];
$pet_gender=$_POST['pet_gender'];
$pet_breed=$_POST['pet_breed'];
$pet_color=$_POST['pet_color'];
$pet_birthday=$_POST['pet_birthday'];
$pet_weight=$_POST['pet_weight'];
$pet_blood_type=$_POST['pet_blood_type'];
$pet_chars=$_POST['pet_chars'];

if($_FILES['inpFile']['name']!= "")
{
    move_uploaded_file($_FILES['inpFile']['tmp_name'],"uploads/{$_FILES['inpFile']['name']}");
}
else {
    die("no file to upload");
}
 



$con=mysqli_connect('localhost','root','','test');

if(!$con) {
    die("could not connect:".mysql_error());
}

mysqli_select_db($con,'test');

$query="INSERT INTO pets (pet_name,pet_gender,pet_breed,pet_color,pet_birthday,pet_weight,pet_blood_type,pet_chars) VALUES ('$pet_name','$pet_gender','$pet_breed','$pet_color','$pet_birthday','$pet_weight','$pet_blood_type','$pet_chars')";

if(!mysqli_query($con,$query)) {
    die('Error inserting records:'.mysql_error);
}
else {
    echo "We did it";
}