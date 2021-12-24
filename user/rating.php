<?php
session_start();
include('../config.php');

$username= $_SESSION['username'];
$res_home= $_GET['id'];

?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="star.css">
</head>
<body>

    <div class="container">
      <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#" method="post">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="Describe your experience.." name="review"></textarea>
          </div>
          <div class="btn">
            <button type="submit" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
<script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      
    </script>

    <?php
      if(isset($_POST['submit']))
      {
        $un=$_POST['review'];

      $query = "INSERT INTO rating (username, res_home, review) VALUES ('$username', '$res_home', '$un')";
                      
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    ?>
        <script type="text/javascript">
            alert("Review Successfull.");
            window.location.assign('menu.php');
        </script>
        <?php
    }
        ?>


</body>
</html>
