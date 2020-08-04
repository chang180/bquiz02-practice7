<form action="api/add_que.php" method="post">
    <fieldset>
    <legend>新增問卷</legend>
    問卷名稱<input type="text" name="parent" id="moreOpt"><br>
    選項<input type="text" name="option[]"><button type="button" id="more">更多</button><br>
    <button>新增</button><button type="reset">清空</button>
    </fieldset>
</form>
<script>
    let el=`
    <br>選項<input type="text" name="option[]">
    `;
    $("#more").on("click",function(){
        $("#moreOpt").after(el);
    })
</script>