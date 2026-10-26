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
    $nameInput = $_POST['name'] ?? '';
    $companyInput = $_POST['company'] ?? '';
    $emailInput = $_POST['email'] ?? '';
    $telephoneInput = $_POST['telephone'] ?? '';
    $messageInput = $_POST['message'] ?? '';

    $marketing = isset($_POST['marketing']) ? 1 : 0;

    if (is_string($nameInput)) {
        $name = trim($nameInput);
    } else {
        $errors['name'] = 'Please enter a valid name.';
    }
    if (is_string($companyInput)) {
        $company = trim($companyInput);
    } else {
        $errors['company'] = 'Please enter a valid company name.';
    }
    if (is_string($emailInput)) {
        $email = trim($emailInput);
    } else {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (is_string($telephoneInput)) {
        $telephone = trim($telephoneInput);
    } else {
        $errors['telephone'] = 'Please enter a valid telephone number.';
    }
    if (is_string($messageInput)) {
        $message = trim($messageInput);
    } else {
        $errors['message'] = 'Please enter a valid message.';
    }

    $fieldValues = [
        'name' => $name,
        'email' => $email,
        'telephone' => $telephone,
        'message' => $message,
    ];

    $requiredFields = [
        'name' => 'Please enter your name.',
        'email' => 'Please enter your email address.',
        'telephone' => 'Please enter your telephone number.',
        'message' => 'Please enter your message.'
    ];
    
    foreach ($requiredFields as $field => $errorMessage) {
        if ($fieldValues[$field] === '' && !isset($errors[$field])) {
            $errors[$field] = $errorMessage;
        }
    }

    if ($email !== '') {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($result === false) {
            $errors['email'] = 'Please enter a valid email address.';
        }
    }

    if (!preg_match("/^[\p{L}\p{M}]+(?:[ '\x{2019}-][\p{L}\p{M}]+)*$/u", $name)) {
        $errors['name'] = 'Please enter a valid name.';
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
    if (!preg_match('/^\+?[0-9\s().-]+$/', $telephone)) {
        $errors['telephone'] = 'Please enter a valid telephone number.';
    } elseif (preg_match_all('/[0-9]/', $telephone) < 7 || preg_match_all('/[0-9]/', $telephone) > 15) {
        $errors['telephone'] = 'Please enter a phone number containing between 7 and 15 digits.';
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

?>