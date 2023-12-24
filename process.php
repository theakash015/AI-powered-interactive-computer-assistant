<?php

$message = $_POST['message'];

// Always sanitize user input before processing or storing it
$sanitized_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Write the message to a file
$file = fopen("message.txt", "a"); // "a" mode will append the message to the file
fwrite($file, $sanitized_message . "\n");
fclose($file);

// Redirect to a thank you page or the message display page
header("Location: show_code.html");
exit;

?>
