<?php
rename("data/".$_POST["old_title"], "data/".$_POST['time']."_".$_POST["title"]."_".$_POST["writer"]);
file_put_contents("data/".$_POST['time']."_".$_POST["title"]."_".$_POST["writer"], $_POST['body']);
header("Location: /project/index.php?id=".$_POST["time"]."_".$_POST["title"]."_".$_POST["writer"], $_POST["body"]);

?>