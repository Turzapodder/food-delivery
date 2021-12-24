<?php
 session_start();
 if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

 	$var = $_GET['id'];
 	$var_username = $_SESSION['username'];
 	$var_count = $_GET['qt'];

 	 try{

         $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
         $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
         $sqlquery="SELECT * FROM restaurantmenu where id='$var'";

         try{
               $returnval=$dbcon->query($sqlquery); ///PDOStatement
                                
               $productstable=$returnval->fetchAll();
                                
               foreach($productstable as $row){
               	$price = $row['price'];
               	$item = $row['item_name'];
               	$total_price = $price * $var_count;

            	}

            	$sqlqueryforinsert = "INSERT INTO cart (username,product_name,quantity,price) VALUES('$var_username', '$item', $var_count, $total_price)";

            	$dbcon->exec($sqlqueryforinsert);
            	?>
			 		<script>
			 			window.location.assign('menu.php');
			 		</script>
			 	<?php
            	
           }
           catch(PDOException $ex){
           ?>
             <tr>
                <td colspan="5">Data read error ... ...</td>    
             </tr>
            <?php
        }

     }catch(PDOException $ex){
          ?>
            <tr>
              	<td colspan="5">Data read error ... ...</td>    
             </tr>
       <?php
     }
 	
 	

 	?>	
 	<?php

 }

 	?>
