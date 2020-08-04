<?php
include_once "../base.php";

foreach(@$_POST['del'] as $id){
    $Admin->del($id);
}
to("../admin.php?do=admin");