<fieldset>
    <table>
        <tr>
            <td width="10%">編號</td>
            <td width="60%">標題</td>
            <td width="10%">顯示</td>
            <td width="10%">刪除</td>
        </tr>
        <?php

        $now = $_GET['p'] ?? "1";
        $div = 5;
        $total = $News->count(['sh' => 1]);
        $pages = ceil($total / $div);
        $start = ($now - 1) * $div;
        $prev = (($now - 1) > 0) ? ($now - 1) : 1;
        $next = (($now + 1) <= $pages) ? ($now + 1) : $pages;

        $rows = $News->all([], " LIMIT $start,$div");
        foreach ($rows as $row) {
        ?>
            <form action="api/edit_news.php" method="post">
                <tr>
                    <td><?= ($start + 1) ?>.</td>
                    <td class="change">
                        <div><?= $row['title']; ?></div>
                    </td>
                    <td> <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?=($row['sh']==1)?"checked":"";?>> </td>
                    <td> <input type="checkbox" name="del[]" value="<?= $row['id']; ?>"> </td>
                    <td> <input type="hidden" name="id[]" value="<?= $row['id']; ?>"> </td>
                </tr>
            <?php } ?>
        </table>
        <div class="ct"><button>確定修改</button></div>
            </form>
    <?php
    echo "<a href='?do=news&p=$prev'> < </a>";
    for ($i = 1; $i <= $pages; $i++) {
        $font = ($now == $i) ? "32px" : "20px";
        echo "<a href='?do=news&p=$i' style='font-size:$font'>$i</a>";
    }
    echo "<a href='?do=news&p=$next'> > </a>";
    ?>
</fieldset>