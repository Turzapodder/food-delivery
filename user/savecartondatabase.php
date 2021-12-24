<?php
    session_start();

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        $name = $_SESSION['username'];
        ?>

                    <?php
                        try{
                            ///php-mysql 3 way. We will use PDO - PHP data object
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            

                            $sqlquery="SELECT * FROM cart where username='$name'";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $productstable=$returnval->fetchAll();

                               
                                foreach($productstable as $row){
                                    $pname = $row['product_name'];
                                    $quantity = $row['quantity'];
                                    $price = $row['price'];
                                    
                                    $orderInsert = "INSERT INTO orderhistory(username,product_name,quantity,price) VALUES('$name','$pname',$quantity,$price)";

                                    $dbcon->exec($orderInsert);
                                    
                                }

                                $deleteFromCart = "DELETE FROM cart WHERE username = '$name'";
                                $dbcon->exec($deleteFromCart);

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
                    ?>
              

             <input type="button" name="PlaceOrder_btn" value="Place Order" onclick="processPlaceOrder()">
            
            <script type="text/javascript">
           		function processPlaceOrder(){
           			window.location.assign('savecartondatabase.php?');
           			
           		}
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
}
   
?>