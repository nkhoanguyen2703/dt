<div class="container">
HELLO
<?php 
	$sql = '';
	foreach($_SESSION["cart"] as $key=>$row){
				$id = $row['foodid'];
				$tmp = "select * from thucan where ta_ma='".$row['foodid']."' UNION DISTINCT ";
				$sql = $sql.$tmp;
			}
	echo $sql."<br>";
	echo rtrim($sql, "UNION DISTINCT");
	// $do = mysqli_query($db,$sql);
	// if($do){
	// 	echo "OK OK OK";
	// }else echo "FAILESE SSE";


 ?>

	
</div>