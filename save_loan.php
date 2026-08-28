<?php
session_start();
require('includes/auth_check.php');
require('includes/conn_1dt.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: borrow.php');
    exit;
}

$item     = trim($_POST['item_name'] ?? '');
$author   = trim($_POST['author'] ?? '');
$borrower = trim($_POST['borrower_name'] ?? '');
$notes    = trim($_POST['notes'] ?? '');
$due      = $_POST['due_back'] ?? '';
$today    = date('Y-m-d');
$errors   = [];

if ($item === '') {
    $errors[] = 'Please enter an item name.';
}
if ($borrower === '') {
    $errors[] = 'Please enter a borrower name.';
}
if ($due === '' || $due < $today) {
    $errors[] = 'Due back date must be today or later.';
}
if ($author === '') {
    $errors[] = 'Please enter an author name.';
}


if ($errors) {
    $_SESSION['borrow_errors'] = $errors;
    $_SESSION['borrow_old']    = ['item_name' => $item, 'author' => $author, 'borrower_name' => $borrower, 'due_back' => $due, 'notes' => $notes];
    header('Location: borrow.php');
    exit;
}

$sql = "INSERT INTO loans (item_name, author, borrower_name, borrowed_date, due_back, logged_by, notes)
        VALUES (:item, :author, :borrower, :borrowed, :due, :logged_by, :notes)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':item'      => $item,
    ':author'    => $author,
    ':borrower'  => $borrower,
    ':notes'     => $notes,
    ':borrowed'  => $today,
    ':due'       => $due,
    ':logged_by' => $_SESSION['id'],
]);

header('Location: manage_loans.php?logged=1');
exit;
