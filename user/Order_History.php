<?php
    session_start();

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        $name = $_SESSION['username'];
        ?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Update Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="style2.css">
     
  </head>

  
<div id="wrapper">
        <div class="sidenav">
                    <a href="userindex.php">Main Menu</a>
               
                    <a href="profile.php">Dashboard</a>

                    <a href="update.php">Update Profile</a>
               
                    <a href="Order_history.php">Order History</a>
               
                    <a href="logout.php?action=logOut">Logout</a>

        </div>
        
        <div class="main">
            <div>
                <h1 class="text-center"><span class="glyphicon glyphicon-cog"></span>Order History</h1>
                <h3 class="text-center">Welcome, <?php echo $name;?></h3>

            </div>
            <br><br>
            <div>
                <h3>These are previous Orders</h3>
            </div>
          
            
              <table class="table table-striped table-dark">
                <thead>
                    <tr>
                      <th scope="col">Serial No.</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            

                            $sqlquery="SELECT * FROM orderhistory where username='$name'";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery); ///PDOStatement
                                
                                $productstable=$returnval->fetchAll();

                                $totalprice = 0;
                                $serialCount = 1;
                                
                                foreach($productstable as $row){
                                    ?>
                  
                                      <tr>
                                        <th scope="row"><?php echo $serialCount ?></th>
                                        <td><?php echo $row['product_name'] ?></td>
                                        <td><?php echo $row['quantity'] ?></td>
                                        <td><?php echo $row['price'] ?> Tk</td>
                                      </tr>
                                      <?php
                                    
                                    $temp_price = $row['price'];
                                    $totalprice = $totalprice + $temp_price;
                                    $serialCount = $serialCount+1;
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="5">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="5">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                  </table>
              </div>
    </div>

    <?php
  }
  ?>

    </body>
</html>



 