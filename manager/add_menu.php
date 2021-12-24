<?php
  include '../config.php';
  session_start();
  $username=$_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM manager where username='$username'")or die(mysqli_error());
  $result=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Update Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="../login-signup.css">
  </head>

  
<div id="wrapper">
        <div class="sidenav">
                    <a href="managerindex.php">Main Menu</a>
               
                    <a href="profile.php">Dashboard</a>

                    <a href="update.php">Update Profile</a>

                    <a href="add_res.php">Add Restaurant</a>

                    <a href="add_home.php">Add Homemadefood</a>

                    <a href="add_menu.php">Add Item</a>
               
                    <a href="logout.php?action=logOut">Logout</a>

        </div>
        
        <div class="main">
            <div>
                <h1 class="text-center"><span class="glyphicon glyphicon-cog"></span>ADD Food Menu</h1>
                <h3 class="text-center">Welcome, <?php echo $username;?></h3>
                <div class="text-center"><a href="logout.php" class="btn btn-warning" style="margin-left:10px;">Logout</a></div>
            </div>
            <br><br>
            <div>
                <h3>ADD Food Item Info</h3>
            </div>
            <div class="container">
              <form action="#" method="post" class="login-email">
                      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Food Item Details</p>
                <div class="input-group">
                  <input type="text" placeholder="Enter Item Name" name="item_name" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Enter Price" name="price" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Enter Restaurant Name" name="res_name" >
                </div>
                <div class="input-group">
                <input type="file" name="image" class="form-control">
                </div>
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-warning" style="width:20em; margin:0;">
                </div>
              </form>
          </div>



      <?php
      if(isset($_POST['submit']))
      {
        $name=$_POST['item_name'];
        $price = $_POST['price'];
        $res_name= $_POST['res_name'];
        $file = $_FILES['image']['name'];
        

      $query = "INSERT INTO Homemadefoodmneu (item_name,price, imagepath, homemaderestaurent_name ) Values ('$name', '$location', '$file', '$res_name')";
                      
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                      move_uploaded_file($_FILES['image']['tmp_name'], "$file");
                    }
                    ?>
                     <script type="text/javascript">
            alert("ADD Successfull.");
            window.location = "profile.php";
        </script>
        <?php
             }              
?>
        </div>
    </div>

    </body>
</html>



 