<?php
date_default_timezone_set("America/New_York");
$time=date("YmdHis");
file_put_contents("data/".$time."_".$_POST["title"]."_".$_POST["writer"], $_POST["body"]);
header("Location: /project/index.php?id=".$time."_".$_POST["title"]."_".$_POST["writer"], $_POST["body"]);
?>