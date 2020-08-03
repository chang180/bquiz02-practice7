<?php
include_once "../base.php";
$email=$Admin->find(['email'=>$_GET['email']]);
if(empty($email)){
    echo "查無此資料";
}else{
    echo "您的密碼為：".$email['pw'];
}