<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $driving_license_number = $_POST['driving_license_number'];
    $license_type = $_POST['license_type'];
    $description = $_POST['description'];

    $to = "info@mysuruhawking.com";
    $subject = "Form Submission";
    $message = "First Name: $first_name\nLast Name: $last_name\nFather Name: $father_name\nQualification: $qualification\nTotal no of experience: $experience\nMobile number: $mobile_number\nEmail: $email\nAddress: $address\nState: $state\nCity: $city\nDriving licence number: $driving_license_number\nLicense type: $license_type\nDescription: $description";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
