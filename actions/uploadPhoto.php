 <?php
session_start();
include_once "../classes/user.php";

$id = $_SESSION['id'];

// $_FILES is a 2-dimensional array. The first array is the name of the element. The second element is the property of the file.
// [name] -> name of the filee
// [tmp_name] ->  path of the file inside the temporary storage in your computer (Example: /tmp/php/php6hst32)
// [size] -> size of the file in bytes
// [error] -> the error code of the file (0 if no error)
$image_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];


$user = new User;
$user->uploadPhoto($id, $image_name, $tmp_name);