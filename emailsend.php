<?php


// Replace with your actual website details
$websiteName = "Your Website";

$senderEmail = "shahed32156@gmail.com";
$adminEmail = "shahed32156@gmail.com";

// Retrieve the user's email from the database
$userEmail = "shahed32156@gmail.com"; // Replace with the actual email retrieved from your database

// Subject of the email
$subject = "Order Confirmation - $websiteName";

// Load the HTML content from the file
$message = file_get_contents("email.php");

// Replace placeholders with actual order details
$message = str_replace("Product Name", "Your Product Name", $message);

// Additional replacements can be made for quantity, price, and other details

// Set the headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $senderEmail\r\n";
$headers .= "Reply-To: $adminEmail\r\n";

// Send the email
mail($userEmail, $subject, $message, $headers);

echo "Order confirmation email sent to $userEmail.";
?>
