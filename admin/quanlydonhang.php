<div class="container-fluid">

	<div class="row">

	  
	  		<div class="table-responsive">          
			  <table class="table">
			    <thead>
			      <tr>
			        <th width="1%">Mã đơn</th>
			        <th>Trạng thái</th>
			        <th>Khách</th>
			        <th>Địa chỉ</th>
			        <th>SDT</th>
			        <th>Thời gian đặt hàng</th>
			        <th>Chi tiết</th>
			        <th>Ghi chú</th>
			        <th>Tổng</th>
			        <th>Cọc</th>
			        <th>Còn lại</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php  
				$sql="select * from donhang dh
				join khachhang kh on dh.kh_ma=kh.kh_ma
				where trangthai=0
				ORDER BY thoigian";
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
					$trangthai = $dh['trangthai'];

					//lay ra cac mon an le? trong don hang
					$sql2 = "select * from chitietdonhang1 a join thucan b on a.ta_ma=b.ta_ma 
					WHERE a.dh_ma=$madonhang";
					$do2 = mysqli_query($db,$sql2);

					//lay ra combo trong don hang
					$sql3 = "select * from chitietdonhang2 a join combo b on a.combo_ma=b.combo_ma 
					WHERE a.dh_ma=$madonhang";
					$do3 = mysqli_query($db,$sql3);
					?>

					

			      <tr class="success">
			        <td><?=$madonhang?></td>
			        <td>Chưa xong</td>
			        <td><?=$tenkhach?></td>
			        <td><?=$diachi?></td>
			        <td>0<?=$sdt?></td>
			        <td><?=$thoigian?></td>
			        <td>

			        <?php 
			        	//show mon le
			        	while($ct1 = mysqli_fetch_array($do2)){
			        		echo $ct1['ct1_soluong']." ".$ct1['ta_ten'].", ";
			        	}
			        	//show combo
			        	while($ct2 = mysqli_fetch_array($do3)){
			        		echo $ct2['ct2_soluong']." ".$ct2['combo_ten'].", ";
			        	}
			        ?>
			        	
			        </td>
			        <td><?=$ghichu?></td>
			        <td><?=number_format($tongtien)?></td>
			        <td><?=number_format($tiencoc)?></td>
			        <td><?=number_format($tongtien-$tiencoc)?></td>
			        <td><a href='?keyad=quanlydonhang.php&hoantat=<?=$madonhang?>'>Xong</a></td>
			      </tr>

			      <?php } ?>
			      













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
					$trangthai = $dh['trangthai'];

					//lay ra cac mon an trong don hang
					$sql2 = "select * from chitietdonhang1 a join thucan b on a.ta_ma=b.ta_ma 
					WHERE a.dh_ma=$madonhang";
					$do2 = mysqli_query($db,$sql2);

					//lay ra combo trong don hang
					$sql3 = "select * from chitietdonhang2 a join combo b on a.combo_ma=b.combo_ma 
					WHERE a.dh_ma=$madonhang";
					$do3 = mysqli_query($db,$sql3);

					?>
			      <tr class="danger">
			        <td><?=$madonhang?></td>
			        <td>Đã giao</td>
			        <td><?=$tenkhach?></td>
			        <td><?=$diachi?></td>
			        <td>0<?=$sdt?></td>
			        <td><?=$thoigian?></td>
			        <td>

			        <?php 
			        	//show mon le
			        	while($ct1 = mysqli_fetch_array($do2)){
			        		echo $ct1['ct1_soluong']." ".$ct1['ta_ten'].",";
			        	}
			        	//show combo
			        	while($ct2 = mysqli_fetch_array($do3)){
			        		echo $ct2['ct2_soluong']." ".$ct1['combo_ten'].",";
			        	}
			        ?>
			        	
			        </td>
			        <td><?=$ghichu?></td>
			        <td><?=number_format($tongtien)?></td>
			        <td><?=number_format($tiencoc)?></td>
			        <td><?=number_format($tongtien-$tiencoc)?></td>
			        <td></td>
			      </tr>



			      <?php 
			      }
			       ?>
			    </tbody>
			  </table>
			</div>

	  

	</div>
</div>




<?php  

//XULY//
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