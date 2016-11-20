<?php
	require_once('config.php');
	class Connection{
		private static $con;
		function __Construct(){
			self::$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			mysqli_set_charset(self::$con, 'utf8');
			if(mysqli_connect_errno()){
				die("DATABASE connection Failed:").mysqli_connect_error();
			}
		}
		public function runQuery($query){
			$result=mysqli_query(self::$con,$query);
			$this->confirm_query($result);
			return $result;
		}
		private function confirm_query($result){
			if(!$result)
			{
				$output ="Database query failed ".mysqli_error(self::$con);
				die($output);
			}
		}
	}
?>