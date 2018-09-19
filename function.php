<?php
	
	include "database.php";
	function getFoodNameByID($mathucan,$db){
		// include "../database.php";
		$sql="select * from thucan where ta_ma='$mathucan'";
		$do = mysqli_query($db,$sql);
		$food = mysqli_fetch_array($do);
		return $food['ta_ten'];
	}

	function getComboNameByID($mathucan,$db){
		// include "../database.php";
		$sql="select * from combo where combo_ma='$mathucan'";
		$do = mysqli_query($db,$sql);
		$food = mysqli_fetch_array($do);
		return $food['combo_ten'];
	}

	function getComboPriceByID($comboid,$db){
		$sql = "select combo_gia from combo where combo_ma='$comboid'";
		$do = mysqli_query($db,$sql);
		$price = mysqli_fetch_array($do);
		return $price[0];
	}

	function getFoodPriceByID($foodid,$db){
		$sql = "select ta_gia from thucan where ta_ma='$foodid'";
		$do = mysqli_query($db,$sql);
		$price = mysqli_fetch_array($do);
		return $price[0];
	}

	function getNextIDValueByTable($tablename,$db){
		$sql2 = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name='$tablename'";
		$do=mysqli_query($db,$sql2);
		$x = mysqli_fetch_array($do);
		$nextID = $x[0];
		return $nextID;
	}
	function neu_tim_thay_monan($ten,$gia,$db){ //return true if have
		
		$sql = "select count(*) from thucan where ta_ten LIKE '%$ten%' ".$gia;
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$count = $result[0];
		if($count > 0){
			return true;
		}else{
			return false;
		} 
	}

	function neu_tim_thay_combo($ten,$gia,$songuoi,$db){
		$sql = "select count(*) from combo where combo_ten LIKE '%$ten%' ".$gia.$songuoi;
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$count = $result[0];
		if($count > 0){
			return true;
		}else{
			return false;
		} 
	}

	function checkComboConHayHet($comboid,$db){ // check nếu combo còn hoặc đã hết dựa vào các món trong combo, trả về true nếu HẾT
		$sql = "select count(*),c.ta_ma,c.ta_ten from combo a join chitietcombo b on a.combo_ma=b.combo_ma join thucan c on c.ta_ma=b.ta_ma where a.combo_ma=$comboid and c.ta_tinhtrang=0";
		$do = mysqli_query($db,$sql);
		$result = mysqli_fetch_array($do);
		$count = $result[0];
		if($count > 0){
			return true;
		}else{
			return false;
		} 
	}
?>