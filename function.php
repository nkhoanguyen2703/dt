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

?>