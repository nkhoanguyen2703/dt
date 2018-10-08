<style>
    .box_title{
        font-size:40px;
        color:black;
        text-align: center;
    }
    .text-center{
        font-size: 45px;
    }
    .thumbnail{
        height:250px;
    }
    .tamhet{
        color: red;
    }
    .item{
        cursor: pointer;
    }
</style>

<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Menu</h3>
    <div class="panel panel-default box">
    <div  class="box_title"><div class="panel-heading box_title" >Món</div></div>
    <div class="panel-body" style="z-index: 0;">

        <div class="row">
            <?php

            $sql="select * from thucan";
            $do = mysqli_query($db,$sql);

            while($food=mysqli_fetch_array($do)){
            $foodid=$food['ta_ma'];
            $stt = $food['ta_tinhtrang'];
            ?>



                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                    <div class="thumbnail item" style="border:none; z-index: -1;">
                        <a <?php if($stt==1){ ?> id="submit<?=$foodid?>" <?php } ?> > <!--cannot buy--> 
                            <img class="embed-responsive-item animated jello" 
                            src="images/food/<?=$food['ta_hinhanh']?>" alt="fastfood" style="max-height: 150px;">
                            <div class="caption" style="margin:0px;text-align: center;">
                                <b><?=$food['ta_ten']?> </b>
                                <p><?=number_format($food['ta_gia'])?></p>
                                <?php
                                if($stt==0){
                                    echo "<span class='tamhet'>Tạm hết</span>";
                                }
                                ?>
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
            } 
            ?>
        </div>
    </div>
    </div></br><!--panel-->










    <div class="panel panel-default box">
    <div  class="box_title"><div class="panel-heading box_title" >Combo</div></div>
    <div class="panel-body" style="z-index: 0;">
        <div class="row">
            <?php
            $sql="select * from combo";
            $do = mysqli_query($db,$sql);

            while($combo=mysqli_fetch_array($do)){
                $comboid=$combo['combo_ma'];
                $stt = checkComboConHayHet($comboid,$db);
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                    
                    <div class="thumbnail item" style="border:none; z-index: -1;">

                        <a <?php if($stt==false){ ?> id="submitcombo<?=$comboid?>" <?php } ?> >
                            <img class="embed-responsive-item animated jello" 
                            src="images/combo/<?=$combo['combo_hinhanh']?>" style="max-height: 150px;">
                            <div class="caption" style="margin:0px;text-align: center;">
                                <b><?=$combo['combo_ten']?> </b>
                                <p><?=number_format($combo['combo_gia'])?></p>
                                <?php
                                if($stt==true){
                                    echo "<span class='tamhet'>Tạm hết</span>";
                                }
                                ?>
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
            } 
            ?>
        </div>
    </div>







   </div>
</div>