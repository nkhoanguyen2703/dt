<style>
	.tamhet{
        color: red;
  }
  .item_goiy{
  	background-color: white;
  	margin:auto;
  	text-align: center;
  	cursor: pointer;
  }
</style>

<div class="container">

<div class="row">
	<div class="col-md-6">

		<div class="panel panel-default">  
		    <h3 style="text-align: center;padding-top: 10px;">Giỏ hàng</h3>
		    	<div class="panel-body">


		    		<!--GIO HANG THUONG-->
			    	<a href="?key=cart.php&clearSession=1">Xóa tất cả</a>
			    	<table class="table">
				    	<thead>
					      <tr>
					        <th>Tên món</th>
					        <th>Số lượng</th>
					       	<th>Giá / 1 đơn vị</th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>
						<?php
						if(isset($_SESSION['cart'])){
							$tongtien1 = 0;
							foreach($_SESSION["cart"] as $key=>$row){
								$foodname = getFoodNameByID($row['foodid'],$db);
								$foodid = $row['foodid'];
								$foodprice = getFoodPriceByID($foodid,$db);
								$tongtien1 = $tongtien1 + $foodprice*$row['soluong'];
								echo "<tr>";
								echo "<td>".$foodname."</td>";
								?>

								<td>
									<input id="inputSL<?=$foodid?>" type="number" value="<?=$row['soluong']?>" 
									/>
									<input id="inputID<?=$foodid?>" type="hidden" value="<?=$row['foodid']?>" 
									/>
								</td>
								<td><?=number_format($foodprice)?></td>
								<td><a href="?key=cart.php&action=deleteFood&id=<?=$foodid?>">Xóa</a></td>

								<script>
									$(document).ready(function(){
								    $("#inputSL<?=$foodid?>").on('change', function thaydoisoluong(){
								        var sl = $(this).val(); // this.value
								        var foodid = $("#inputID<?=$foodid?>").val();
								        $.get("index.php?key=cart.php",{
								            changeSL: sl,
								            foodid: foodid,
								        })
								    });
								}); 
								</script>

								<?php
								echo "</tr>";
							}
						}
						?>
						</tbody>
					</table>






					<!--GIO HANG COMBO-->
					<a href="?key=cart.php&clearSession2=2">Xóa tất cả combo</a>
			    	<table class="table">
				    	<thead>
					      <tr>
					        <th>Tên combo</th>
					        <th>Số lượng</th>
					        <th>Giá / 1 đơn vị</th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>
						<?php
						if(isset($_SESSION['combocart'])){
							$tongtien2 = 0;
							foreach($_SESSION["combocart"] as $key=>$row){
								$comboName = getComboNameByID($row['comboid'],$db);
								$comboID = $row['comboid'];
								$comboPrice=getComboPriceByID($comboID,$db);
								$tongtien2 = $tongtien2 + $comboPrice*$row['soluong'];
								echo "<tr>";
								echo "<td>".$comboName."</td>";	
								?>

								<td>
									
									<input id="inputSLcombo<?=$comboID?>" type="number" value="<?=$row['soluong']?>" 
									/>
									<input id="inputIDcombo<?=$comboID?>" type="hidden" value="<?=$row['comboid']?>" 
									/>
								</td>
								<td><?=number_format($comboPrice)?></td>
								<td><a href="?key=cart.php&action=deleteCombo&id=<?=$comboID?>">Xóa</a></td>

								<script>
									$(document).ready(function(){
								    $("#inputSLcombo<?=$comboID?>").on('change', function thaydoisoluong(){
								        var sl = $(this).val(); // this.value
								        var comboID = $("#inputIDcombo<?=$comboID?>").val();
								        $.get("index.php?key=cart.php",{
								            changeComboSL: sl,
								            comboID: comboID,
								        })
								    });
								}); 
								</script>

								<?php
								echo "</tr>";
							}
						}
						?>
						</tbody>
					</table>
					<a href="?key=send_cart.php">
					<button type="button" class="btn btn-info btn-lg" >Tiếp tục </button>
					</a>
				</div>
		</div>
	</div>







  <!--TIET KIEM VS COMBO-->

	<div class="col-md-6">
		<div class="panel panel-default" style="background-color: orange;">
			<h3 style="text-align: center;padding-top: 10px;">Tiết kiệm hơn với combo </h3>
		  <div class="panel-body">
		  	<?php 
		  	$sql = '';
		  	$tmp = '';

			foreach($_SESSION["cart"] as $key=>$row){
						$id = $row['foodid'];
						// $tmp = "select * from combo cb  
						// join chitietcombo ct on ct.combo_ma=cb.combo_ma
						// where ct.ta_ma='".$row['foodid']."' UNION DISTINCT ";
						// $sql = $sql.$tmp;
						$tmp = $tmp."OR ct.ta_ma=$id ";
			}
			
			$tmp = ltrim($tmp, "OR");

			$sql = "select DISTINCT cb.combo_ma,cb.combo_hinhanh,cb.combo_gia from combo cb  
						join chitietcombo ct on ct.combo_ma=cb.combo_ma
						where ".$tmp;
			// $sql = rtrim($sql, "UNION DISTINCT");
			// $sql = $sql." GROUP BY cb.combo_ma";
			// echo $sql;
		  	$do = mysqli_query($db,$sql);
		  	if($do){


		  	while($combo = mysqli_fetch_array($do)){
		  		$comboid = $combo['combo_ma'];
		  		$stt = checkComboConHayHet($comboid,$db);
		  		if($stt==false){ //neu con
		  			$canbeadded = "?key=cart.php&addcombotocart=$comboid";
		  		}else{
		  			$canbeadded ='';
		  		}
		  		
		  	 ?>
		  		<div class="col-md-6 col-sm-12 " >
                    <div class="item_goiy item" style="border:1px solid #DDDDDD; z-index: -1;">
                        <a href="<?=$canbeadded?>	">
                            <img class="embed-responsive-item animated jello" 
                            src="images/combo/<?=$combo['combo_hinhanh']?>" alt="combo" style="max-height: 150px;">
                            <div class="caption" style="margin:0px;text-align: center;">
                                <b><?=$combo['combo_ten']?></b>

                                <?php 
                                if($stt==true){
                                    echo "<span class='tamhet'>Tạm hết</span>";
                                }

                                $sql2 = "select * from combo cb 
                                join chitietcombo ct on cb.combo_ma=ct.combo_ma 
                                join thucan ta on ta.ta_ma=ct.ta_ma
                                where cb.combo_ma='$comboid'
                                 ";
                                $qr = mysqli_query($db,$sql2);
                               	while($list = mysqli_fetch_array($qr)){
                                 echo "<br><i>".$list['ctcb_soluong']." ".$list['ta_ten']."<i>";
                                 }

                                 
                                ?>

                                <p><?=number_format($combo['combo_gia'])?></p>
                                
                            </div>
                        </a>
                    </div>
                    
                </div>
		  	<?php } 

		  	}?>
		  </div>
		</div>
	</div>
</div>

</div>



<?php 
	//dat hang
	if(isset($_POST['btn_dathang'])){
		$name = $_POST['cart_name'];
		$sdt = $_POST['cart_sdt'];
		$diachi = $_POST['cart_diachi'];

	}



	//change Soluong of food in cart
	if(isset($_REQUEST['changeSL'])){
		$sl=$_REQUEST['changeSL'];
		$id=$_REQUEST['foodid'];
		$_SESSION["cart"][$id]["soluong"] = $sl;
	}
	

	//change Soluong of combo in cart
	if(isset($_REQUEST['changeComboSL'])){
		$sl=$_REQUEST['changeComboSL'];
		$comboID=$_REQUEST['comboID'];
		$_SESSION["combocart"][$comboID]["soluong"] = $sl;
	}



	//add 1 food to Cart
	if(isset($_REQUEST['addtocart'])){
		$foodid = $_GET['addtocart'];
		if (array_key_exists($foodid, $_SESSION['cart'])) { //kiem tra sp ton tai trong gio hang
                $_SESSION["cart"][$foodid]["soluong"] = $_SESSION["cart"][$foodid]["soluong"] + 1;
        }
        else {
            //tao san pham moi'
            $sl = 1;
            $food = array("foodid"=>"$foodid",
                          "soluong"=>"$sl"
            );
            $_SESSION["cart"][$foodid] = $food;
        }
	}


	//add 1 COMBO to Cart
	if(isset($_REQUEST['addcombotocart'])){
		$comboid = $_GET['addcombotocart'];
		if (array_key_exists($comboid, $_SESSION['combocart'])) { //kiem tra sp ton tai trong gio hang
                $_SESSION["combocart"][$comboid]["soluong"] = $_SESSION["combocart"][$comboid]["soluong"] + 1;
        }
        else {
            //tao san pham moi'
            $sl = 1;
            $combo = array("comboid"=>"$comboid",
                          "soluong"=>"$sl"
            );
            $_SESSION["combocart"][$comboid] = $combo;
        }
        echo "<script>window.location='?key=cart.php'</script>";

	}



	//just clear cart
	if(isset($_GET['clearSession'])){
		unset($_SESSION['cart']); 
		echo "<script>window.location='?key=cart.php'</script>";
	}

	//just clear combo cart
	if(isset($_GET['clearSession2'])){
		unset($_SESSION['combocart']); 
		echo "<script>window.location='?key=cart.php'</script>";
	}

	//clear food when click xoa
	if(isset($_GET['action']) && $_GET['action']=='deleteFood'){
	    $id=$_GET['id'];
	    unset($_SESSION["cart"][$id]);
	    echo "<script>window.location='?key=cart.php'</script>";
	}


	//clear combo when click xoa
	if(isset($_GET['action']) && $_GET['action']=='deleteCombo'){
	    $id=$_GET['id'];
	    unset($_SESSION["combocart"][$id]);
	    echo "<script>window.location='?key=cart.php'</script>";
	}
			
?>


	
