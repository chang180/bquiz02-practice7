<fieldset>
        <legend>目前位置：首頁 > 問卷調查 > <?=$Que->find($_GET['id'])['text'];?></legend>
        <h3><?=$Que->find($_GET['id'])['text'];?></h3>
<?php
$parent=$Que->find($_GET['id']);
$total=($parent['count']==0)?1:$parent['count'];
$rows=$Que->all(['parent'=>$_GET['id']]);
foreach($rows as $row){
    $rate=$row['count']/$total;
?>
<div class="contain" style="display:flex">
    <div style="width:30%"><?=$row['text'];?></div>
    <div style="width:<?=round(55*$rate);?>%;background:grey;height:20px;">&nbsp;</div>
    <div style="width:15%"><?=$row['count'];?>票(<?=round($rate*100);?>%)</div>
</div>
<?php }?>
        <div class="ct"><button onclick="location.href='?do=que'">返回</button></div>
</fieldset>