<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados enviados pelo formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Aqui você faria a atualização no banco de dados, exemplo:
    // $query = "UPDATE users SET name='$name', email='$email', address='$address' WHERE id='$user_id'";

    // Simulando uma atualização bem-sucedida
    $_SESSION['user_data'] = [
        'name' => $name,
        'email' => $email,
        'address' => $address
    ];

    // Redirecionando de volta para o dashboard
    header('Location: dashboard.php');
    exit;
}
