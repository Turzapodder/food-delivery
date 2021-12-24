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
                <h1 class="text-center"><span class="glyphicon glyphicon-cog"></span>ADD Restaurants</h1>
                <h3 class="text-center">Welcome, <?php echo $username;?></h3>
                <div class="text-center"><a href="logout.php" class="btn btn-warning" style="margin-left:10px;">Logout</a></div>
            </div>
            <br><br>
            <div>
                <h3>ADD Restaurant Info</h3>
            </div>
            <div class="container">
              <form action="#" method="post" class="login-email">
                      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Restaurant Details</p>
                <div class="input-group">
                  <input type="text" placeholder="Enter Restaurant Name" name="name" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Enter Location" name="location" >
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
        $name=$_POST['name'];
        $location = $_POST['location'];
        $file = $_FILES['image']['name'];
        $tmp_name = $_FILES["uploadfile"]["tmp_name"];
        $folder = "image/".$file;
        

      $query = "INSERT INTO Homemadefood (name, location, imagepath) Values ('$name', '$location', '$file')";
                      
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    if($result){
                      move_uploaded_file($tmp_name, $folder);
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



 