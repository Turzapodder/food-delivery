
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
          <?php
          $connection  = mysqli_connect('localhost','root','','sadlab');
          if(isset($_POST['search'])){
            $searchKey = $_POST['search'];
            $sql ="SELECT * FROM homemadefoodmenu WHERE item_name LIKE '%$searchKey%'";
          }else
          $sql ="SELECT * FROM homemadefoodmenu";
          $result = mysqli_query($connection,$sql);
          ?>

				<form action="" method="POST">
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="" >
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Item_Name</th>
						<th>Price</th>
            <th>Home_Name</th>
					</tr>

           <?php while($row = mysqli_fetch_object($result)){  ?>
					<tr>
						<td><?php echo $row->id  ?></td>
            <td><?php echo $row->item_name ?></td>
            <td><?php echo $row->price ?></td>
            <td><?php echo $row->homemaderestaurant_name ?></td>
          </tr>

        <?php  } ?>


					</tr>

				</table>

			</div>
		</div>
	</div>
</body>
</html>
