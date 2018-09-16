
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
                <input type="number" class="form-control" name="cart_tiencoc"  placeholder="Số tiền cọc">
            </div>
             <?php
            }
            ?>

            <div class="form-group">
                <label for="pwd">Địa chỉ giao hàng</label>
                <input type="text" class="form-control" name="cart_diachi"  placeholder="Nhập địa chỉ giao hàng">
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