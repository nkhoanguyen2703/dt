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