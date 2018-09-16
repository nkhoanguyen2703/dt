<?php
	$sql2 = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'thucan'";
	$do=mysqli_query($db,$sql2);
	$x = mysqli_fetch_array($do);
	$nextFoodID = $x[0];
?>

<div class="panel panel-default">
  <div class="panel-body">
  	<h2>THÊM MÓN ĂN</h2>

  	<form method="POST" action="" enctype="multipart/form-data">

	  <div class="form-group">
	    <label">Tên món:</label>
	    <input type="text" name="tenmon" class="form-control">
	  </div>

	  <div class="form-group">
	    <label">Giá:</label>
	    <input type="number" name="gia" class="form-control">
	  </div>


	  <label for="sel2">Loại:</label>
      <select multiple class="form-control" name="loai">
      	<?php
      		$sql="select * from loaithucan";
      		$do=mysqli_query($db,$sql);
      		while($loai=mysqli_fetch_array($do)){
      			?>
      				<option value="<?=$loai['loai_ma']?>"><?=$loai['loai_ten']?></option>
      			<?php
      		}
      	?>
      </select>



	 <label >Hình món ăn </label>
        <div style="position:relative;">
            <!-- <a class='btn btn-primary' href='javascript:;'></a> -->
                <input type="file" name="photo"/>
            &nbsp;
            <span class='label label-info' id="upload-file-info"></span>
        </div>




	  <button type="submit" name="btnAdd_Food" class="btn btn-default">Submit</button>
	</form>

  </div>
</div>



<?php
if(isset($_POST['btnAdd_Food'])){
    $tenmon = $_POST['tenmon'];
    $gia = $_POST['gia'];
    $loai = $_POST['loai'];
    $newfilename="no_image.png";
    $date=date("Y/m/d");

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
                    if(file_exists("../images/food/" . $_FILES["photo"]["name"])){
                        $loihinhanh=$_FILES["photo"]["name"] . " đã tồn tại tên hình này.";
                    } else{
                    	$temp = explode(".", $_FILES["photo"]["name"]);
          						// $newfilename = round(microtime(true)) . '.' . end($temp);
          						$newfilename = $nextFoodID . '.' . end($temp);
          						move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/food/" . $newfilename);       
                    }
                } else{
                    echo  $loihinhanh="Lỗi upload hình ảnh";
                }
            }else  $loihinhanh="Lỗi hình không được quá 6MB";
        } else $loihinhanh="Không đúng định dạng ảnh";


    }
    echo $loihinhanh;

    $sql="insert into thucan values('','$tenmon',$gia,1,'$newfilename',$loai)";

    $qr=mysqli_query($db,$sql);

    if($qr){
        echo "<script>alert('Thêm thành công');</script>";
        // echo "<script>window.location='index.php';</script>";
        header("Refresh:0");
    }else{
        echo "<script>alert('Thất bại".$loihinhanh."');</script>";
    }




}
?>