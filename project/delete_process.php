<?php
echo $_POST['id'];
unlink("data/".$_POST['id']);
header('Location: index.php');
?>