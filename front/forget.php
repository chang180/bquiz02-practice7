請輸入信箱以查詢密碼<br>
<input type="text" name="email" id="email"><br>
<div class="answer"></div><br>
<button id="find">尋找</button>
<script>
$("#find").on("click",function(){
    $.get("api/chkemail.php",{"email":$("#email").val()},function(res){
        $(".answer").text(res);
    })
})
</script>