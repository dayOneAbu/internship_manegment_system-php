<?php
$userName = ' ';

$userName = $_SESSION['name'] ?? null;
$email = $_SESSION['email'] ?? null;
if ($userName && $email) {

    global $userName, $email;
    $userName = $_SESSION['name'];
    $email = $_SESSION['email'];
}
require_once 'db.php';

$sql = "SELECT * FROM USERS WHERE Email = '" . $email . "'";
$user = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($user);

$_SESSION['USERID'] = $user['USERID'];