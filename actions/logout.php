<?php

session_start();
// $_SESSION['id'] = 4;
session_unset();
// $_SESSION['id'];
session_destroy();
// 

header("location: ../views"); // go to index.php / login
exit;





// Create
// $_SESSION = ['id' => 5, 'username' => 'john'];

// Unset
// $_SESSION = ['id' => NULL, 'username' => NULL];

// Destroy
// $_SESSION = [];