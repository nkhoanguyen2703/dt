<div class="container">
	<div class="row">
	  <div class="col-md-2"></div>

	  <div class="col-md-4">
	  	<div class="panel panel-default">
			  <div class="panel-body">
				<h3>Đơn hàng đang chờ</h3>

				<?php  
				$sql="select * from donhang dh
				join khachhang kh on dh.kh_ma=kh.kh_ma
				where trangthai=0
				ORDER BY thoigian DESC";
				$do = mysqli_query($db,$sql);
				while($dh = mysqli_fetch_array($do)){
					$madonhang = $dh['dh_ma'];
					$tongtien = $dh['tongtien'];
					$tiencoc = $dh['tiencoc'];
					$ghichu = $dh['ghichu'];
					$thoigian = $dh['thoigian'];
					$tenkhach = $dh['kh_ten'];
					$diachi = $dh['kh_diachi'];
					$sdt = $dh['kh_sdt'];
					?>
					<div class='well'>
					<i><?=$thoigian?></i><br>
					<b>Tên: <?=$tenkhach?><br>
					Địa chỉ: <?=$diachi?><br>
					Sdt: 0<?=$sdt?></b><br>
					Ghi chú: <?=$ghichu?><br>
					Tổng tiền: <?=$tongtien?><br>
					Tiền cọc: <?=$tiencoc?><br>
					Tiền trả lại: <?=$tongtien-$tiencoc?>


					<p style="padding:0px; color:orange;">
					<?php
					$ct1 = check_if_DH_have_food($madonhang); // neu khach mua Food Le~ , return true;
					if($ct1 == true){
						$sql2 = "select * from chitietdonhang1 ct1 join thucan ta on ct1.ta_ma=ta.ta_ma WHERE ct1.dh_ma='$madonhang'";
						$do2 = mysqli_query($db,$sql2);
						while($food = mysqli_fetch_array($do2)){
							echo "<br>".$food['ta_ten']." x".$food['ct1_soluong'];
						}
					}
					$ct2 = check_if_DH_have_combo($madonhang);
					if($ct2 == true){
						$sql2 = "select * from chitietdonhang2 ct2 join combo cb on ct2.combo_ma=cb.combo_ma WHERE ct2.dh_ma='$madonhang'";
						$do2 = mysqli_query($db,$sql2);
						while($food = mysqli_fetch_array($do2)){
							echo "<br>".$food['combo_ten']." x".$food['ct2_soluong'];
						}
					}
					?>
					</p>
			  		
			  		<a href="?keyad=quanlydonhang.php&hoantat=<?=$madonhang?>">Hoàn tất đơn hàng </a>
			  		</div><!--well-->

			  	<?php } ?><!--end loop-->
			  </div>
		</div>
	  </div>

	  

	  <div class="col-md-4">
	  	<div class="panel panel-default" style="background-color:#222222;">
			  <div class="panel-body">
				<h3 style="color:white;">Đơn hàng cũ </h3>

				<?php  
				$sql="select * from donhang dh
				join khachhang kh on dh.kh_ma=kh.kh_ma
				where trangthai=1
				ORDER BY thoigian DESC LIMIT 0,20";
				$do = mysqli_query($db,$sql);
				while($dh = mysqli_fetch_array($do)){
					$madonhang = $dh['dh_ma'];
					$tongtien = $dh['tongtien'];
					$tiencoc = $dh['tiencoc'];
					$ghichu = $dh['ghichu'];
					$thoigian = $dh['thoigian'];
					$tenkhach = $dh['kh_ten'];
					$diachi = $dh['kh_diachi'];
					$sdt = $dh['kh_sdt'];
					?>
					<div class='well'>
					<i><?=$thoigian?></i><br>
					<b>Tên: <?=$tenkhach?><br>
					Địa chỉ: <?=$diachi?><br>
					Sdt: 0<?=$sdt?></b><br>
					Ghi chú: <?=$ghichu?><br>
					Tổng tiền: <?=$tongtien?><br>
					Tiền cọc: <?=$tiencoc?><br>
					Tiền trả lại: <?=$tongtien-$tiencoc?>


					<p style="padding:0px; color:orange;">
					<?php
					$ct1 = check_if_DH_have_food($madonhang); // neu khach mua Food Le~ , return true;
					if($ct1 == true){
						$sql2 = "select * from chitietdonhang1 ct1 join thucan ta on ct1.ta_ma=ta.ta_ma WHERE ct1.dh_ma='$madonhang'";
						$do2 = mysqli_query($db,$sql2);
						while($food = mysqli_fetch_array($do2)){
							echo "<br>".$food['ta_ten']." x".$food['ct1_soluong'];
						}
					}
					$ct2 = check_if_DH_have_combo($madonhang);
					if($ct2 == true){
						$sql2 = "select * from chitietdonhang2 ct2 join combo cb on ct2.combo_ma=cb.combo_ma WHERE ct2.dh_ma='$madonhang'";
						$do2 = mysqli_query($db,$sql2);
						while($food = mysqli_fetch_array($do2)){
							echo "<br>".$food['combo_ten']." x".$food['ct2_soluong'];
						}
					}
					?>
					</p>
			  		
			  		
			  		</div><!--well-->

			  	<?php } ?><!--end loop-->
			  </div>
		</div>
	  </div>

	  <div class="col-md-2"></div>
	  
	</div>
</div>




<?php  
if(isset($_GET['hoantat'])){
	$dh = $_GET['hoantat'];
	$sql = "update donhang set trangthai=1 where dh_ma='$dh'";
	$do = mysqli_query($db,$sql);
	if($do){
		echo "<script>window.location='?keyad=quanlydonhang.php';</script>";
	}else{
		echo "<script>alert('Lỗi cập nhật trạng thái đơn hàng 001xx');</script>";
	}
}
?>