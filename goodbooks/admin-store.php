<?php session_start()?>
<?php require "app/db-config.php" ?>
<?php 
if($_SESSION["sessionAuth"]!=true){
	header("Location: index.php");
}
?>
<?php


$sql = "SELECT `pid`,`puser`, `bookname`, `bookprice`, `contactnumber` FROM `product`";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css.map">
    <title>Dashboard | GoodBooks!</title>
</head>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    
    
        <div class="container-fluid bg-secondary bg-warning">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto fs-1 text-light mb-1">GoodBooks</div>
				<div class="col-auto">
				<a class="btn btn-light" href="dashboard.php">Dashboard</a>
					<a class="btn btn-light" href="admin-store.php">Library</a>
					<a class="btn btn-light" href="salebook.php">Sale Book</a>
					<a class="btn btn-light" href="my-advertise.php">My Advertise</a>
					<a class="btn btn-dark" href="logout.php">Logout</a> <br> 
                    
				</div>
			</div>
		</div>
        
      
      
    </div>
  </div>
</nav>

<table class="table table-dark">
  <thead>
    <tr>
      <th class="col">seller name</th>
      <th class="col">book name</th>
      <th class="col">book price</th>
      <th class="col">contact number</th>
    </tr>
  </thead>

  

  <?php

if ($result->num_rows > 0) {
  
  while ($row=$result->fetch_assoc()) {

    

    echo '
    
    
     <tr>';
     echo'
    <td >'.$row["puser"].'</th>';
    echo '<td >'.$row["bookname"].'</th>';
    echo '<td >'.$row["bookprice"].'</td>';
    echo '<td>'.$row["contactnumber"].'</td>';
  echo '</tr>';
  echo '</tbody>';



  }

}



  
  ?>
    
    </table> 
  



</body>

</html>