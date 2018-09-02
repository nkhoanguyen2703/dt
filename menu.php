<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Menu</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>


    <div class="panel panel-default box">
    <div  class="box_title"><div class="panel-heading box_title" >Menu</div></div>
    <div class="panel-body" style="z-index: 0;">

        <div class="row">
            <?php
            
            for($i=0;$i<8;$i++){
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                    <div class="thumbnail item" style="border:none; z-index: -1;">
                        <a href="" target="_blank">
                            <img class="embed-responsive-item animated jello" 
                            src="images/pizza.jpg" alt="fastfood" style="max-height: 150px;">
                            <div class="caption" style="margin:0px;text-align: center;">
                                <b>Pizza </b>
                                <p><?=number_format(245000)?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php 
            } 
            
            ?>
        </div>
    </div>
</div></br>



   </div>
</div>