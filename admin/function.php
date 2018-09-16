<?php
	

	function getFoodNameByID($mathucan){
		include "../database.php";
		$sql="select * from thucan where ta_ma='$mathucan'";
		$do = mysqli_query($db,$sql);
		$food = mysqli_fetch_array($do);
		return $food['ta_ten'];
	}

	function getNextIDValueByTable($tablename){
		include "../database.php";
		$sql2 = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name='$tablename'";
		$do=mysqli_query($db,$sql2);
		$x = mysqli_fetch_array($do);
		$nextID = $x[0];
		return $nextID;
	}
?>