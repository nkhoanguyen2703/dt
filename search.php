
 
<div class="container" style="margin: auto; text-align: center;">
	<h2>Tìm kiếm</h2>

	<div style="margin-top: 9%; margin-bottom: 2%; ">
		<button type="button" class="btn btn-default btn-lg" onclick="showTimMonLe()">
			Bạn cần tìm món lẻ ?
		</button>
		<button type="button" class="btn btn-default btn-lg" onclick="showTimCombo()">
			Bạn cần tìm phần ăn combo ?
		</button>
	</div>

	<div id="monle" style="max-width: 500px;margin:0px auto;padding:0px; ">
	  	<form class="form-horizontal" action="" method="POST">
		    <div class="form-group">
		      <label class="control-label col-sm-2">Tên món:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" name="txtTen">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2">Giá thấp hơn:</label>
		      <div class="col-sm-10">
		        <input type="number" class="form-control" name="txtGia">
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" name="btnSubmitMonle" class="btn btn-default">Tìm</button>
		      </div>
		    </div>
		</form>
	</div>	


	<div id="combo" style="max-width: 500px;margin:0px auto;padding:0px; ">
	  	<form class="form-horizontal" action="" method="POST">
		    <div class="form-group">
		      <label class="control-label col-sm-3">Tên combo:</label>
		      <div class="col-sm-9">
		        <input type="text" class="form-control" name="txtTen">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3">Giá thấp hơn:</label>
		      <div class="col-sm-9">
		        <input type="number" class="form-control" name="txtGia">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3">Số người:</label>
		      <div class="col-sm-9">
		        <input type="number" class="form-control" name="txtSonguoi">
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button onclick="hideAll()" type="submit" name="btnSubmitCombo" class="btn btn-default">Tìm</button>
		      </div>
		    </div>
		</form>
	</div>	





	<!--WHEN USER SEARCH FOR FOOD-->
	<?php 
 	
	if(isset($_POST['btnSubmitMonle'])){
		$ten = $_POST['txtTen'];
		$gia_sql ='';
		if(isset($_POST['txtGia']) and $_POST['txtGia']!=''){
			$gia = $_POST['txtGia'];
			$gia_sql = " AND ta_gia<='$gia'";
		}
		$sql_food_result = "select * from thucan where ta_ten LIKE '%$ten%' ".$gia_sql;
		$count = neu_tim_thay_monan($ten,$gia_sql,$db);
		
		?>
		
		<div class="col-md-12" id="resultpanel">

			<div class="panel panel-default" style="box-shadow: 0px 0px 20px orange;">
				<h3 style="text-align: center;padding-top: 10px;">Kết quả tìm kiếm </h3>
			  <div class="panel-body">
			  	<?php 
			  	if($count==true){ 
			  	$do = mysqli_query($db,$sql_food_result);
				  	if($do){
				  		while($food = mysqli_fetch_array($do)){
				  		$foodid = $food['ta_ma'];
				  	 ?>
				  		<div class="col-md-3 col-sm-12 " >
		                    <div class="thumbnail item" style="height:250px;border:1px solid #DDDDDD; z-index: -1;">
		                        <a id="submit<?=$foodid?>"">
		                            <img class="embed-responsive-item animated jello" 
		                            src="images/food/<?=$food['ta_hinhanh']?>" style="max-height: 150px;">
		                            <div class="caption" style="margin:0px;text-align: center;">
		                                <b><?=$food['ta_ten']?></b>
		                                <p><?=number_format($food['ta_gia'])?></p>
		                            </div>
		                        </a>
		                    </div>
		                    
		                </div>

		                <!--submit add to cart without F5 page-->
			            <script>
			                $('#submit<?=$foodid?>').click(function() {
			                    $.get("index.php?key=cart.php",{
			                        addtocart: <?=$foodid?>,
			                        success: function(msg){
			                            alert("Đã thêm vào giỏ hàng !");
			                        }
			                    })
			                });
			            </script>


				  	<?php 
				  	} //while loop 
				  	}
				}else{ // count == false
					echo "<h2>Không tìm thấy kết quả</h2>";
				}
			  	?>
			  </div>
			</div>
		</div>
	<?php
	}
 	?>










 	<!--WHEN USER SEARCH FOR COMBO-->
 	<?php 
	if(isset($_POST['btnSubmitCombo'])){
		$ten = $_POST['txtTen'];
		$gia_sql ='';
		$songuoi_sql ='';
		if(isset($_POST['txtGia']) and $_POST['txtGia']!=''){
			$gia = $_POST['txtGia'];
			$gia_sql = " AND combo_gia<='$gia'";
		}
		if(isset($_POST['txtSonguoi']) and $_POST['txtSonguoi']!=''){
			$songuoi = $_POST['txtSonguoi'];
			$songuoi_sql = " AND combo_songuoi=$songuoi";
		}

		$sql_combo_result = "select * from combo where combo_ten LIKE '%$ten%' ".$gia_sql.$songuoi_sql;
		$count = neu_tim_thay_combo($ten,$gia_sql,$songuoi_sql,$db);
		
		?>
		
		<div class="col-md-12" id="resultpanel">

			<div class="panel panel-default" style="box-shadow: 0px 0px 20px orange;">
				<h3 style="text-align: center;padding-top: 10px;">Kết quả tìm kiếm </h3>
			  <div class="panel-body">
			  	<?php 
			  	if($count==true){ 
			  	$do = mysqli_query($db,$sql_combo_result);
				  	if($do){
				  		while($combo = mysqli_fetch_array($do)){
				  		$comboid = $combo['combo_ma'];
				  	 ?>
				  		<div class="col-md-3 col-sm-12 " >
		                    <div class="thumbnail item" style="height:250px;border:1px solid #DDDDDD; z-index: -1;">
		                        <a id="submitcombo<?=$comboid?>">
		                            <img class="embed-responsive-item animated jello" 
		                            src="images/combo/<?=$combo['combo_hinhanh']?>" style="max-height: 150px;">
		                            <div class="caption" style="margin:0px;text-align: center;">
		                                <b><?=$combo['combo_ten']?></b>
		                                <p><?=number_format($combo['combo_gia'])?></p>
		                            </div>
		                        </a>
		                    </div>
		                    
		                </div>

		                <!--submit add to cart without F5 page-->
			            <script>
			                $('#submitcombo<?=$comboid?>').click(function() {
			                    $.get("index.php?key=cart.php",{
			                        addcombotocart: <?=$comboid?>,
			                        success: function(msg){
			                            alert("Đã thêm vào giỏ hàng !");
			                        }
			                    })
			                });
			            </script>

				  	<?php 
				  	} //while loop 
				  	}
				}else{ // count == false
					echo "<h2>Không tìm thấy kết quả</h2>";
				}
			  	?>
			  </div>
			</div>
		</div>
	<?php
	}
 	?>


</div><!--container-->





<script>
 	var x = document.getElementById("monle");
	var y = document.getElementById("combo");
	var result = document.getElementById("resultpanel");
	x.style.display = "none";
	y.style.display = "none";
	

	function hideAll(){
		x.style.display = "none";
		y.style.display = "none";
	}

	function showTimMonLe() {
	    var x = document.getElementById("monle");
	    var y = document.getElementById("combo");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	        y.style.display = "none";
	    } else {
	        x.style.display = "none";
	        y.style.display = "none";
	    }
	}
	function showTimCombo() {
	    var x = document.getElementById("combo");
	    var y = document.getElementById("monle");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	        y.style.display = "none";
	    } else {
	        x.style.display = "none";
	        y.style.display = "none";
	    }
	}
</script>