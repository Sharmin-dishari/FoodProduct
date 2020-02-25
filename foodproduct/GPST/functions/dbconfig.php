<?php
	class dbconfig{
		public function connection(){
			$conn = new mysqli("localhost","root","","foodproduct");
			return $conn;
		}
	}
?>