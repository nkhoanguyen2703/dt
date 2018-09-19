
<div class="container">
<!--THONG TIN KHACH HANG-->


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  		<div class="panel panel-default"> 
		<h3 style="text-align: center; padding:0;margin-bottom: 0px;">Đơn hàng của bạn</h3>
		<div class="panel-body" style="margin:auto; ">
			<?php  
			$tongtien = 0;
			foreach($_SESSION["cart"] as $key=>$row){
					$foodname = getFoodNameByID($row['foodid'],$db);
					$foodid = $row['foodid'];
					$foodprice = getFoodPriceByID($foodid,$db);
					$tongtien = $tongtien + $foodprice*$row['soluong'];
					echo "<br>".$foodname." x".$row['soluong'];
			}
			foreach($_SESSION["combocart"] as $key=>$row){
					$comboName = getComboNameByID($row['comboid'],$db);
					$comboID = $row['comboid'];
					$comboPrice=getComboPriceByID($comboID,$db);
					$tongtien = $tongtien + $comboPrice*$row['soluong'];
					echo "<br>".$comboName." x".$row['soluong'];;	
			}
			echo "<br><b>Tổng:".number_format($tongtien);
			?>
		</div>
		</div>

  </div>	
  <div class="col-md-4"></div>	
</div>



<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  		<div class="panel panel-default"> 
		<h3 style="text-align: center;">Thông tin khách hàng</h3>
		<div class="panel-body">

			<form method="POST" action="">

			 <div class="form-group">
                <label for="usr">Tên người nhận</label>
                <input type="text" class="form-control" name="cart_name" required placeholder="Họ và tên chủ đơn hàng">
            </div>
            <div class="form-group">
                <label for="pwd">Số điện thoại</label>
                <input type="text" class="form-control" name="cart_sdt"  required placeholder="Nhập số điện thoại di động">
            </div>

            <?php 
            if(isset($_SESSION['admin'])){
             ?>
             <div class="form-group">
                <label>Tiền cọc</label>
                <input type="number" required class="form-control" name="cart_tiencoc"  placeholder="Số tiền cọc">
            </div>
             <?php
            }
            ?>

            <div class="form-group">
                <label for="pwd">Địa chỉ giao hàng</label>
                <input type="text" class="form-control" name="cart_diachi" required  placeholder="Nhập địa chỉ giao hàng">
            </div>

            <div class="form-group">
                <label for="pwd">Ghi chú</label>
                <input type="text" class="form-control" name="cart_ghichu"  placeholder="Ghi chú đơn hàng ">
            </div>
            
            <input type="submit" name="btn_dathang" class="btn btn-default" value="Gửi đơn hàng">
           
            </form>

            
		</div>
		</div>
  </div>
  <div class="col-md-4"></div>
</div>
</div><!--container-->



<?php


	if(isset($_POST['btn_dathang'])){
		$name = $_POST['cart_name'];
		$sdt = $_POST['cart_sdt'];
		$diachi = $_POST['cart_diachi'];
		$ghichu = $_POST['cart_ghichu'];
		$tiencoc = NULL;
		$today = date("Y-m-d H:i:s"); 

		if(isset($_POST['cart_tiencoc'])){
			$tiencoc = $_POST['cart_tiencoc'];
		}

		//tao khach hang moi
		$khachid = getNextIDValueByTable(khachhang,$db);
		
		$sql1 = "insert into khachhang values($khachid,'$name','$diachi',$sdt)";
		$do1 = mysqli_query($db,$sql1);
		if($do1){
			//tao don hang moi
			$donhangid = getNextIDValueByTable(donhang,$db);
			
			$sql2 = "insert into donhang values($donhangid,$tongtien,'$tiencoc','$ghichu','$today',0,$khachid)";
			$do2 = mysqli_query($db,$sql2);
			if($do2){
				$check_error = 0;
				//vong lap insert into chitietdonhang
				if(!empty($_SESSION['cart'])){
					foreach($_SESSION["cart"] as $key=>$row){
						$foodid = $row['foodid'];
						$sl = $row['soluong'];
						$sql_tmp = "insert into chitietdonhang1 values('',$sl,$donhangid,$foodid)";
						$do_tmp = mysqli_query($db,$sql_tmp);
						if(!$do_tmp) $check_error = 1; //co loi xay ra
					}
				}
				if(!empty($_SESSION['combocart'])){
					foreach($_SESSION["combocart"] as $key=>$row){		
						$comboID = $row['comboid'];
						$sl = $row['soluong'];
						$sql_tmp = "insert into chitietdonhang2 values('',$sl,$donhangid,$comboID)";
						$do_tmp = mysqli_query($db,$sql_tmp);
						if(!$do_tmp) $check_error = 1; //co loi xay ra
					}
				}

				if($check_error == 0){
					echo "<script>alert('Cám ơn bạn ! Chúng tôi đã ghi nhận đơn hàng');</script>";
					unset($_SESSION['cart']); 
					unset($_SESSION['combocart']); 
					echo "<script>window.location='index.php'</script>";
					
				}{
					echo "<script>alert('Lỗi chi tiết đơn hàng 0022x');</script>";
				}
			}else{
				echo "<script>alert('Lỗi tạo đơn hàng 0021x');</script>";
			}
		}else{
			echo "<script>alert('Lỗi tạo khách hàng 002xx');</script>";
		}
	}

?>