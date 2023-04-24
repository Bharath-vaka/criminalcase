<?php
// start the session
session_start();

// unset the session variables
session_unset();

// destroy the session
session_destroy();

// redirect to the login page
header('Location: \criminalcase/index.html');
exit();
?>
