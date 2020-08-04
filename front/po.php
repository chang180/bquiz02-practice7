目前位置：首頁 >分類網誌 ><span id="head"></span>
<div class="contain" style="display:flex">
    <fieldset style="width:30%">
        <legend>分類網誌</legend>
        <a href='#' id="l1" onclick="getList(1)">健康新知</a><br>
        <a href='#' id="l2" onclick="getList(2)">菸害防制</a><br>
        <a href='#' id="l3" onclick="getList(3)">癌症防治</a><br>
        <a href='#' id="l4" onclick="getList(4)">慢性病防治</a>
    </fieldset>
    <fieldset style="width:60%">
        <legend>文章列表</legend>
        <div class="content"></div>
    </fieldset>
</div>
<script>
    getList(1);

    function getList(type) {
        $("#head").text($("#l" + type).text());
        $.get("api/getlist.php", {
            type
        }, function(res) {
            $(".content").html(res);
        })
    }
    function getPost(id) {
        $.get("api/getpost.php", {
            id
        }, function(res) {
            $(".content").html(res);
        })
    }

    
</script>