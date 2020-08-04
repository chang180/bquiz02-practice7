<?php
include_once "../base.php";
foreach ($_POST as $p) {
    if (empty($p)) {
        echo "<script>alert('不可為空值');location.href='../admin.php?do=admin';</script>";
        exit;
    }
}

$acc = $_POST['acc'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$email = $_POST['email'];
if ($Admin->count(['acc' => $acc]) > 0) {
    echo "<script>alert('帳號重複');location.href='../admin.php?do=admin';</script>";
    exit;
}

if ($pw != $pw2) {
    echo "<script>alert('密碼錯誤');location.href='../admin.php?do=admin';</script>";
    exit;
}

$Admin->save(['acc' => $acc, 'pw' => $pw, 'email' => $email]);
echo "<script>location.href='../admin.php?do=admin';</script>";
