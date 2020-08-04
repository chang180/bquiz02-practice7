<?php
include_once "../base.php";
$Que->save(['text'=>$_POST['parent']]);
foreach($_POST['option'] as $o){
    $parent=$Que->find(['text'=>$_POST['parent']])['id'];
    $Que->save(['text'=>$o,'parent'=>$parent]);
}
to("../admin.php?do=que");