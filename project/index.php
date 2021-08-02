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
        echo printTitle();
        ?>
    </h4>
    
    <p>
        <?php
        printBody();
        ?>
    </p>

    <a href="create.php">작성</a>
    <?php
    if(isset($_GET["id"])){
        echo "<a href='update.php?id=".$_GET['id']."'>수정</a>";
    }
    ?>
    <?php
    if(isset($_GET["id"])){
        echo "<form action='delete_process.php' method='post'>
        <input type='hidden' name='id' value=".$_GET['id'].">
        <input type='submit' value='삭제'>
        </form>";
    }
    ?>
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