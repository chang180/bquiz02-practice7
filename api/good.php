<?php
include_once "../base.php";

switch($_POST['type']){
    case "1":
        $good=$News->find($_POST['id']);
        $good['good']++;
        $News->save($good);
        $Log->save(['news'=>$_POST['id'],'user'=>$_POST['user']]);
    break;
    case "2":
        $good=$News->find($_POST['id']);
        $good['good']--;
        $News->save($good);
        $Log->del(['news'=>$_POST['id'],'user'=>$_POST['user']]);
    break;
}
to("../index.php?do=news");