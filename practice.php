<?php

$email = '';

$result = filter_var($email, FILTER_VALIDATE_EMAIL);

$errors = [];

if ($result === false) {
    $errors['email'] = 'Please enter email';
}

var_dump($errors);