<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$path= "Uploads/Files/";

if (isset($name)) {

if (empty($name))
{
echo "Please choose a file";
}
else
{
if (move_uploaded_file($tmp_name, $path . $name)) {
echo 'Uploaded!';
}
}
}
?>