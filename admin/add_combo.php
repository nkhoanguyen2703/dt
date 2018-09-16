<div class="panel panel-default">
  <div class="panel-body">




  	<?php 
  	// print_r($_SESSION); 
  	//tao san~ 1 combo de san sang them vao
  	if(isset($_SESSION["addcombo"])==false){
        $_SESSION["addcombo"]=array();
    }
  	?>



  	<h2>Thêm combo</h2>
  	<p>Chọn các món trong combo, sau đó nhập thông tin combo</p>
  	


  	</p>            
  	<div class="row">
  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món Gà</th>
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    	$sql="select * from thucan where ta_loai=1";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		</div>

  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Món Bò</th>
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			    	$sql="select * from thucan where ta_loai=2";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
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
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			     <?php
			    	$sql="select * from thucan where ta_loai=3";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		</div>

  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Thức ăn nhẹ</th>
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			    	$sql="select * from thucan where ta_loai=4";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
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
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			    	$sql="select * from thucan where ta_loai=6";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		</div>

  		<div class="col-md-2">
  			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Tráng miệng</th>
			        <th>Giá</th>
			        
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			    	$sql="select * from thucan where ta_loai=5";
			    	$do=mysqli_query($db,$sql);
			    	while($row=mysqli_fetch_array($do)){
			    ?>
			      <tr>
			        <td><a href="?keyad=add_combo.php&addcombo=<?=$row['ta_ma']?>"><?=$row['ta_ten']?></a></td>
			        <td><?=$row['ta_gia']?></td>
			        
			      </tr>

			     <?php } ?> 
			    </tbody>
			 </table>
  		</div>
  
	</div>


	<div class="row">
		<div class="col-md-6" style="background-color: #fff0d8;">
  				<a href="?keyad=add_combo.php&clearSession=1">Xóa combo hiện tại</a>
  				<h4>Combo gồm: </h4>
  				<table class="table">
				    <thead>
				      <tr>
				        <th>Tên món</th>
				        <th>Số lượng</th>
				      </tr>
				    </thead>
				    <tbody>
				      	<?php
	  					if(isset($_SESSION['addcombo'])){
				  			foreach($_SESSION["addcombo"] as $key=>$row){
				  				$foodname = getFoodNameByID($row['mathucan']);
				  				echo "<tr><td>".$foodname."</td><td>".$row['soluong']."</td></tr>";
				  			}
				  		}	
		  				?>  
				    </tbody>
				</table>
  		</div>


  		<div class="col-md-6">
  			<h3>Thông tin combo cần thêm</h3>
  			<form method="POST" action="" enctype="multipart/form-data">
			  <div class="form-group">
			    <label">Tên combo:</label>
			    <input type="text" name="tencombo" class="form-control">
			  </div>

			  <div class="form-group">
			    <label">Giá combo:</label>
			    <input type="number" name="gia" class="form-control">
			  </div>

			  <div class="form-group">
			    <label">Số người:</label>
			    <input type="number" name="songuoi" class="form-control">
			  </div>

			  <label >Hình combo  </label>
		        <div style="position:relative;">
		            <!-- <a class='btn btn-primary' href='javascript:;'></a> -->
		                <input type="file" name="photo"/>
		            &nbsp;
		            <span class='label label-info' id="upload-file-info"></span>
		        </div>

			  <div class="form-group">
				  <label>Mô tả:</label>
				  <textarea class="form-control" rows="5" name="mota"></textarea>
			  </div>

			  <button type="submit" name="btnAdd_Combo" class="btn btn-default">Thêm combo </button>
			</form>
  		</div>

  		
  		
  	</div><!--row-->

  	<div class="row">
  		<h2>Danh sách combo hiện có</h2>
  		<?php 
  			$sql = "select * from combo";
  			$do=mysqli_query($db,$sql);
  			while($row=mysqli_fetch_array($do)){
  				$comboma = $row['combo_ma'];
  				$price = $row['combo_gia'];
  			?>

  		<div class="col-sm-6 col-md-2">
	  		<div class="panel panel-default">
			  <div class="panel-heading"><?=$row['combo_ten']?>
			  	<a onclick="return deleteConfirm()" href="?keyad=add_combo.php&xoacombo=<?=$comboma?>">Xóa</a>
			  </div>
			  <div class="panel-body">

			  		<?php 
			  			
			  			$sql2="select * from combo cb join chitietcombo ct on cb.combo_ma=ct.combo_ma
  			join thucan ta on ta.ta_ma=ct.ta_ma where cb.combo_ma='$comboma'";
  						$do2 = mysqli_query($db,$sql2);
  						while($food=mysqli_fetch_array($do2)){
  							echo $food['ta_ten']."<br>";
  						}
			  		 ?>
			  		

			  		<form method="POST" action="">
					  <div class="input-group">
					    <input type="text" required name="newprice" class="form-control" placeholder="<?=number_format($price)?>">
					    <input type="hidden" value="<?=$comboma?>" name="comboid">
					    <div class="input-group-btn">
					      <button class="btn btn-default" name="btnChangePrice" type="submit">
					        <span class="glyphicon glyphicon-pencil"></span>
					      </button>
					    </div>
					  </div>
					</form>


			  </div>
			</div>
		</div>



		<?php } ?>
  	</div>





  </div>
 </div>


<!--XU LY-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->


 <?php

 //add new combo
 	if(isset($_POST['btnAdd_Combo'])){
 		$nextComboID = getNextIDValueByTable(combo);
 		$newfilename="no_image.png";
 		$loihinhanh='';
 		if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
	        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
	        $filename = $_FILES["photo"]["name"];
	        $filetype = $_FILES["photo"]["type"];
	        $filesize = $_FILES["photo"]["size"];

	        // Verify file extension
	        $ext = pathinfo($filename, PATHINFO_EXTENSION);
	        if(array_key_exists($ext, $allowed)){
	            $maxsize = 6 * 1024 * 1024;
	            if($filesize < $maxsize){
	                if(in_array($filetype, $allowed)){
	                    // Check whether file exists before uploading it
	                    if(file_exists("../images/combo/" . $_FILES["photo"]["name"])){
	                        $loihinhanh=$_FILES["photo"]["name"] . " đã tồn tại tên hình này.";
	                    } else{
	                    	$temp = explode(".", $_FILES["photo"]["name"]);
	          						// $newfilename = round(microtime(true)) . '.' . end($temp);
	          						$newfilename = $nextComboID . '.' . end($temp);
	          						move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/combo/" . $newfilename);       
	                    }
	                } else{
	                    echo  $loihinhanh="Lỗi upload hình ảnh";
	                }
	            }else  $loihinhanh="Lỗi hình không được quá 6MB";
	        } else $loihinhanh="Không đúng định dạng ảnh";
    	}

    	if($loihinhanh==''){ //khong co loi hinh anh
    		
    		$ten = $_POST['tencombo'];
	 		$gia = $_POST['gia'];
	 		$songuoi = $_POST['songuoi'];
	 		$mota = $_POST['mota'];

	 		$sql="insert into combo values($nextComboID,'$ten',$gia,$songuoi,'$mota','$newfilename')";
	 		$do = mysqli_query($db,$sql);
	 		if($do){
	 			$test = 1; // check if something go wrong while foreach loop
	 			foreach($_SESSION["addcombo"] as $key=>$row){
	 				$mathucan = $row['mathucan'];
	  				$sl = $row['soluong'];
	  				$sql2 = "insert into chitietcombo values('',$sl,$nextComboID,$mathucan)";
	  				$do2 = mysqli_query($db,$sql2);
	  				if($do2){
	  					$test = 0;
	  				}
	  			}
	  			if($test == 1){
	  				echo "<script>alert('Error from foreach loop session 002xx')</script>";
	  			}else{
	  				unset($_SESSION['addcombo']); 
  					echo "<script>alert('Thêm combo thành công');window.location='?keyad=add_combo.php'</script>";
	  			}
	 		}else{
	 			echo "<script>alert('Error from add_combo.php 001xx')</script>";
	 		}
    		
    	}else{
    		echo "<script>alert('".$loihinhanh."')</script>";
    	}

 	}


///change price
 	if(isset($_POST['btnChangePrice'])){
 		$comboid = $_POST['comboid'];
 		$newprice = $_POST['newprice'];
 		
 		$sqlupd = "update combo set combo_gia='$newprice' where combo_ma='$comboid'";
 		$do = mysqli_query($db,$sqlupd);
 		if($do){
 			echo "<script>alert('Đã cập nhật giá')</script>";
 			echo "<script>window.location='?keyad=add_combo.php'</script>";
 		}else{
 			echo "<script>alert('Cập nhật giá thất bại')</script>";
 		}
 	}



//when user click on Clear Button to Clear current session combo
	if(isset($_GET['clearSession'])){
		// session_destroy("addcombo");
		unset($_SESSION['addcombo']); 
		echo "<script>window.location='?keyad=add_combo.php'</script>";
	}



//add a food to session combo

	if(isset($_GET['addcombo'])){
		$foodid = $_GET['addcombo'];
		$sl = 1;
		if (array_key_exists($foodid, $_SESSION['addcombo'])) { //kiem tra sp ton tai roi
    	$_SESSION["addcombo"][$foodid]["soluong"] = $_SESSION["addcombo"][$foodid]["soluong"] + 1;
    	echo "<script>window.location='?keyad=add_combo.php'</script>";
    }
    else {
        $thucan = array("mathucan"=>"$foodid",
                        "soluong"=>"$sl",
                        );
        $_SESSION["addcombo"][$foodid] = $thucan;
        echo "<script>window.location='?keyad=add_combo.php'</script>";
    }

	}


// to delete a combo

	if(isset($_GET['xoacombo'])){
		$comboid = $_GET['xoacombo'];
		$sql = "delete from combo where combo_ma='$comboid'";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã xóa')</script>";
 			echo "<script>window.location='?keyad=add_combo.php'</script>";
		}else{
 			echo "<script>alert('Xóa thất bại')</script>";
 		}
	}
 ?>











