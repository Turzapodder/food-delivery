<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js">
</head>
<body>

<?php
    session_start();

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        $name = $_SESSION['username'];
        ?>
<style>
body {
  background: #eecda3;
  background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
  background: linear-gradient(to right, #ffd59f, #f9a323);
  min-height: 100vh;

</style>
<div class="px-4 px-lg-0">
  <div class="container text-white py-5 text-center">
    <h1 class="display-4">All Reviews</h1>
  </div>

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                <th scope="col" class="border-0 bg-light text-center">
                    <div class="p-2 px-3 text-uppercase">Serial No.</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Restaurant Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase">Reviewer</div>
                  </th>
                  <th scope="col" class="border-0 bg-light text-center">
                    <div class="py-2 text-uppercase">Comment</div>
                  </th>

                </tr>
              </thead>
              <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            

                            $sqlquery="SELECT * FROM rating";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery); ///PDOStatement
                                
                                $productstable=$returnval->fetchAll();

                                $serialCount = 1;
                                
                                foreach($productstable as $row){
                                    ?>
                                        
                                        <tr>
                                            <td class="border-0 align-middle text-center"><strong><?php echo $serialCount ?></strong></td>
                                              <td scope="row" class="border-0">
                                                <div class="p-2">
                                                  <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $row['res_home'] ?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Owner</span>
                                                  </div>
                                                </div>
                                              </td>
                                              <td class="border-0 align-middle text-center"><strong><?php echo $row['username'] ?></strong></td>
                                              <td class="border-0 align-middle text-center"><?php echo $row['review'] ?></td>
                                              
                                            </tr>
                                    <?php
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
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
             <input type="button" name="PlaceOrder_btn" class="btn btn-warning btn-lg"  value="Back To Home" onclick="processPlaceOrder()">
         </div>
            
            <script type="text/javascript">
                function processPlaceOrder(){
                    window.location.assign('userindex.php?'); 
                }
                
           </script>

        <?php
    }
?>

    </div>
  </div>
</div>


                


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

</body>
</html>