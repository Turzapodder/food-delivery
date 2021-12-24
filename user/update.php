<?php
  include '../config.php';
  session_start();
  $username=$_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM users where username='$username'")or die(mysqli_error());
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
                    <a href="userindex.php">Main Menu</a>
               
                    <a href="profile.php">Dashboard</a>

                    <a href="update.php">Update Profile</a>
               
                    <a href="Order_history.php">Order History</a>
               
                    <a href="logout.php?action=logOut">Logout</a>

        </div>
        
        <div class="main">
            <div>
                <h1 class="text-center"><span class="glyphicon glyphicon-cog"></span>User Dashboard</h1>
                <h3 class="text-center">Welcome, <?php echo $username;?></h3>
                <div class="text-center"><a href="logout.php" class="btn btn-warning" style="margin-left:10px;">Logout</a></div>
            </div>
            <br><br>
            <div>
                <h3>Update Information</h3>
            </div>
            <div class="container">
              <form action="#" method="post" class="login-email">
                      <p class="login-text" style="font-size: 2rem; font-weight: 800;">User Details</p>
                <div class="input-group">
                  <input type="text" placeholder="Username" name="username" value="<?php echo $result['username']; ?>" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Fullname" name="fullname" value="<?php echo $result['fullname']; ?>" >
                </div>
                <div class="input-group">
                  <input type="email" placeholder="Email" name="email" value="<?php echo $result['email']; ?>" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Date-of-Birth" name="DOB" value="<?php echo $result['DOB']; ?>">
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Gender" name="Gender" value="<?php echo $result['gender']; ?>" >
                </div>
                <div class="input-group">
                  <input type="text" placeholder="Address" name="address" value="<?php echo $result['address']; ?>" >
                </div>
                <div class="input-group">
                  <input type="password" placeholder="Password" name="password" value="$result['Password'];" >
                </div>
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-warning" style="width:20em; margin:0;">
                </div>


                      
              </form>
          </div>



      <?php
      if(isset($_POST['submit']))
      {
        $un=$_POST['username'];
        $fullname = $_POST['fullname'];
        $gender = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $address = $_POST['address'];
        $password= $_POST['password'];

      $query = "UPDATE users SET username='$un', fullname = '$fullname',
                      gender = '$gender', DOB= '$DOB', address = '$address'
                      WHERE username= '$username'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "profile.php";
        </script>
        <?php
             }              
?>
        </div>
    </div>

    </body>
</html>



 