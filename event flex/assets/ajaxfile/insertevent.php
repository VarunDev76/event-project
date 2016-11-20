<?php
	require_once('../controller/event.php');
	$ename = $_POST["ename"];
	$tag = $_POST["tag"];
    if($ename=="" && $tag==""){
        header('location: ../../index.php');
        exit();
    }
    else{
        $user = new Event();  
        $res = $user->eventIns($ename,$tag);
        echo("Save Records");
        header('Location: ../../index.php');
        exit();
    }
?>