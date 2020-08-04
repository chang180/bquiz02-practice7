

    <fieldset>
        <form action="api/del_admin.php" method="post">
            <legend>帳號管理</legend>
    <table>
        <tr>
            <td>帳號</td>
            <td>密碼</td>
            <td>刪除</td>
        </tr>
<?php 
$rows=$Admin->all();
foreach($rows as $row){
    if($row!='admin'){
    ?>
        <tr>
            <td><?=$row['acc'];?></td>
            <td><?=str_repeat("*",strlen($row['pw']));?></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
        </tr>
        <?php
}} ?>

</table>
<button>確定刪除</button><button type="reset">清空選取</button>
        </form>

        <form action="api/add_admin.php" method="post">
        <h1>新增會員</h1>
    *請設定您要註冊的帳號及密碼(最長12個字元) <br>
    Step1：登入帳號<input type="text" name="acc" id="acc"><br>
    Step2：登入密碼<input type="password" name="pw" id="pw"><br>
    Step3：再次確認密碼<input type="password" name="pw2" id="pw2"><br>
    Step4：信箱（忘記密碼時使用）<input type="text" name="email" id="email"><br>
    <button>註冊</button><button type="reset">清除</button>
    </fieldset>
</form>