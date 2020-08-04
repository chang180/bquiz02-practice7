<?php
include_once "../base.php";
$rows=$News->all(['type'=>$_GET['type']]);
foreach($rows as $row){
    echo "<div onclick=getPost(".$row['id'].")>".$row['title']."</div>";
}