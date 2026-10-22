<?php

require_once __DIR__ . '/../config/database.php';

$errors = [];
$name = '';
$company = '';
$email = '';
$telephone = '';
$message = '';
$marketing = 0;

$successMessage = $_SESSION['success-message'] ?? '';
unset($_SESSION['success-message']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telephone = trim($_POST['telephone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $marketing = isset($_POST['marketing']) ? 1 : 0;

    $requiredFields = [
        'name' => 'Please enter your name.',
        'email' => 'Please enter your email address.',
        'telephone' => 'Please enter your telephone number.',
        'message' => 'Please enter your message.'
    ];
    
    foreach($requiredFields as $field => $errorMessage) {
        $value = trim($_POST[$field] ?? '');

        if ($value === '') {
            $errors[$field] = $errorMessage;
        }
    }

    if ($email !== '') {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($result === false) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    }

    if (mb_strlen($name) > 100) {
        $errors['name'] = 'Please enter a name no longer than 100 characters.';
    }
    if (mb_strlen($email) > 254) {
        $errors['email'] = 'Please enter an email address no longer than 254 characters.';
    }
    if (mb_strlen($company) > 150) {
        $errors['company'] = 'Please enter a company name no longer than 150 characters.';
    }
    if (mb_strlen($telephone) > 30) {
        $errors['telephone'] = 'Please enter a phone number no longer than 30 characters.';
    }
    if (mb_strlen($message) > 5000) {
        $errors['message'] = 'Please enter a message no longer than 5000 characters.';
    }

    if ($errors === []) {
        $sql = 'INSERT INTO enquiries(name, company, email, telephone, message, marketing)
        VALUES (:name, :company, :email, :telephone, :message, :marketing)';

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'telephone' => $telephone,
            'message'=> $message,
            'marketing' =>$marketing
        ]);

        $_SESSION['success-message'] = 'Your enquiry has been submitted successfully.';
        
        header('Location: contact-us.php#contact-form', true, 303);
        exit;
    }
}