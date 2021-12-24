<?php
session_start();
include('../config.php');

    if(!isset($_SESSION['username'])  ) {
        header("Location: userlogin.php");
        exit();
    
} else{


$username= $_SESSION['username'];
$query=mysqli_query($conn,"select * from users where username='$username'");
$result=mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>User Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="../login-signup.css">

</head>

<body>

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
                <div class="text-center"><a href="logout.php" class="btn btn-warning" style="margin-left:10px;" class="text-center">Logout</a></div>
            </div>
            <br><br>
            <div class="container">
              <form action="" method="" class="login-email">
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
                      
              </form>
          </div>
        </div>
        

    </div>
    
    

    
    

</body>
</html>
<?php }?>