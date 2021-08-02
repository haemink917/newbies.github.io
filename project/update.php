<?php
require_once('lib/print.php')
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1><a href="index.php">게시판</a></h1>

    <form action="update_process.php" method="post">
        <input type="hidden" name="time" value="<?php
        $list=explode(" // ", printTitle());
        $list2=explode("_", $list[1]);
        echo $list2[1]
        ?>">
        <input type="hidden" name="writer" value="<?php
        $list=explode(" // ", printTitle());
        $list2=explode("_", $list[1]);
        echo $list2[0]
        ?>">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p><input type="text" placeholder="제목" name="title" value="<?php 
        $list=explode(" // ", printTitle());
        echo $list[0]?>"></p>
        <p><textarea placeholder="본문" name="body"><?php printBody(); ?></textarea></p>
        <p><input type="submit" value="submit"></p>
    </form>
    <br>


    <table style="width:100%">
        <tr>
            <th>이름</th>
            <th>작성자</th>
            <th>시간</th>
        </tr>
        <?php
            printTable();
        ?>
    </table>
    <br>

    
</body>
</html>