
<div class="panel panel-default">
  <div class="panel-body">
  	<h2>Cập nhật trạng thái món ăn</h2>
  	
  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món Gà</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=1 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món bò</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=2 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>






		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Pizza</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=3 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món ăn nhẹ</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=4 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món tráng miệng</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=5 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>





		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Thức uống</th>
			        <th>Trạng thái</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=6 ";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    		$status = $row['ta_tinhtrang'];
			    		$foodid = $row['ta_ma'];
			    ?>
			      <tr>
			        <td><?=$row['ta_ten']?></td>
			        <td>
			        <?php
			        	if($status==1){
			        		?>
			        		<a style="color:green;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=1">Còn</a>
			        		<?php
			        	}else{
			        		?>
			        		<a style="color:red;" href="?keyad=update_status_food.php&updatestatus=<?=$foodid?>&status=0">Hết</a>
			        		<?php
			        	}
			        ?>
			        
			        </td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		
		</div>

  </div><!--panelbody-->
</div><!--panel-->



<?php 
	if(isset($_GET['updatestatus'])){
		$foodid = $_GET['updatestatus'];
		$status = $_GET['status'];
		
		if($status == 1){
			$stt = 0;
		}else{
			$stt = 1;
		}
		$sql ="update thucan set ta_tinhtrang='$stt' where ta_ma='$foodid'";
		$do=mysqli_query($db,$sql);
		if($do){
			
 			echo "<script>window.location='?keyad=update_status_food.php'</script>";
		}else{
 			echo "<script>alert('Cập nhật thất bại')</script>";
 		}
	}
?>
