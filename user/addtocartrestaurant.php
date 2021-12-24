
<?php
 session_start();
 if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

 	$var = $_GET['id'];
 	$var_name = $_SESSION['username'];
 	$var_count = $_GET['qt'];

 	 try{
                            ///php-mysql 3 way. We will use PDO - PHP data object
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

            	$sqlqueryforinsert = "INSERT INTO cart (username,product_name,quantity,price) VALUES('$var_name', '$item', $var_count, $total_price)";

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