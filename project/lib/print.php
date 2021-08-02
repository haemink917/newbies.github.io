<?php
function printTitle(){
    if (isset($_GET['id'])){
        $list= explode('_', $_GET['id']);
        return $list[1]." // ".$list[2]."_".$list[0];
    }
}
function printBody(){
    if (isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }
}
function printTable(){
    $listFile=array_reverse(scandir('data'));
    $len=count($listFile);
    $i=0;
    while ($i<$len){
        if($listFile[$i]!='.'&& $listFile[$i]!='..'){
            $listFileInfo=explode('_', $listFile[$i]);
            echo '<tr><td><a href="index.php?id='.$listFile[$i].'">'.$listFileInfo[1].'</a></td><td>'.$listFileInfo[2].'</td><td>'.$listFileInfo[0].'</td></tr>';
        }
        $i=$i+1;
    }
} 

?>
