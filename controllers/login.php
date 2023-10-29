<?php

use Core\DataBase_G;
use Core\Validator;

require_once(__DIR__ . '/../Core/Validator.php');

// session_start();
// require_once(__DIR__ . '/../DataBase_G.php');


$config = require(__DIR__ . '/../config.php');
$db = DataBase_G::getInstance($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $frist = trim($_POST['Fname']);
    $last = trim($_POST['Lname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $compose = trim($_POST['compose']);

    // if (empty($first) || strlen($first) < 3 || strlen($first) > 15) {
    //     $errors['Fname'] = 'your frist name of 3-15 characters is required.';
    // }
    // if (empty($last) || strlen($last) < 3 || strlen($last) > 15) {
    //     $errors['Lname'] = 'your last name of 3-15 characters is required.';
    // }
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors['email'] = 'Please enter a valid email address.';
    // }
    // if (empty($password) || strlen($password) < 5 || strlen($password) > 15) {
    //     $errors['password'] = 'A password of 5-15 characters is required.';
    // }
    // if (strlen($compose) > 200) {
    //     $errors['compose'] = 'A message of maximum 200 characters is required.';

    // }

    if (!Validator::string($_POST['Fname'], 3, 15)) {
        $errors['Fname'] = 'A name of 3-15 characters is required.';
    }
    if (!Validator::string($_POST['Lname'], 3, 15)) {
        $errors['Lname'] = 'A name of 3-15 characters is required.';
    }
    if (!Validator::email($_POST['email'])) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (!Validator::string($_POST['password'], 5, 15)) {
        $errors['password'] = 'A password of 5-15 characters is required.';
    }
    if (!Validator::string($_POST['compose'], 0, 200)) {
        $errors['compose'] = 'A message of maximum 200 characters is required.';
    }

    // if (!empty($errors)) {
    //     require('views/login.view.php');
    // }



    else {
        $db->query("INSERT INTO clients (Fname, Lname, email, c_password, compose) VALUES(?, ?, ?, ?, ?)", [
            $frist,
            $last,
            $email,
            $password,
            $compose
        ]);

        header('Location: http://localhost:8000/request');
        exit;
    }
}
require('views/login.view.php');
