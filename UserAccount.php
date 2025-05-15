<?php


require_once 'config.php';

session_start();
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmpassword = $_POST['confirmpassword'] ?? '';
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    if (empty($firstname)) {
        $errors[] = 'First name is required';
    }

    if (empty($lastname)) {
        $errors[] = 'Last name is required';
    }

    if (empty($password)) {
        $errors[] = 'Password is required';
    }

    if ($password !== $confirmpassword) {
        $errors[] = 'Passwords do not match';
    }

    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $stmt->execute(['email' => $email]);

    if ($stmt->fetch() > 0) {
        $errors['user_exists'] = 'Email already exists';
    }
    if (!empty($errors)){
        $_SESSION['errors'] = $errors;
        header('Location: Signup.php');
        exit;
    }
    $hashedPassword= password_hash ($password, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)');
    $stmt->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $hashedPassword
    ]);
    header('Location: index.php');
    exit;
} 
