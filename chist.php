<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $birthdate = $_POST['birthdate'];
    $civil_status = $_POST['civil_status'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    // Basic email confirmation
    $message = "Thank you for registering, $name!\n";
    $message .= "We wish you a Merry Christmas!";
    mail($email, "Christmas Registration Confirmation", $message);

    echo "<h2>Thank you, $name! Your registration has been submitted.</h2>";
}
?>
