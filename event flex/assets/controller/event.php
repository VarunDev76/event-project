<?php   
	require_once('connection.php');
	class Event{
		public function eventIns($ename,$tag){
			$query = "INSERT into events(name,tags) VALUES ('{$ename}', '{$tag}')";
			$connect = new Connection();
			$connect->runQuery($query);
			return 1;
		}
	}
	

?>
