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

	function check_if_DH_have_food($madonhang){ //return true if have
		include "../database.php";
		$sql = "select count(*) from chitietdonhang1 where dh_ma='$madonhang'";
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$count = $result[0];
		if($count > 0){
			return true;
		}else{
			return false;
		} 
	}

	function check_if_DH_have_combo($madonhang){ //return true if have
		include "../database.php";
		$sql = "select count(*) from chitietdonhang2 where dh_ma='$madonhang'";
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$count = $result[0];
		if($count > 0){
			return true;
		}else{
			return false;
		} 
	}

	function getFoodImageByID($id){
		include "../database.php";
		$sql = "select * from thucan where ta_ma='$id'";
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$img = $result['ta_hinhanh'];
		return $img;
	}
	function getComboImageByID($id){
		include "../database.php";
		$sql = "select * from combo where combo_ma='$id'";
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$img = $result['combo_hinhanh'];
		return $img;
	}

?>