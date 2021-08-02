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
    <h4>
        <?php
        printTitle();
        ?>
    </h4>
    
    <p>
        <?php
        printBody();
        ?>
    </p>

    <form action="create_process.php" method="post">
            <p><input type='text' placeholder="제목" name="title"></p>
            <p><input type='text' placeholder="작성자" name="writer"></p>
            <p><textarea placeholder="본문" name="body"></textarea></p>
            <p><input type='submit' value="제출"></p>
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

