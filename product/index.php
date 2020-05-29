<!DOCTYPE html>
<html>
<head>
	<title>Produts list</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet"type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">

</head>
<body class="container">
    <h1 class="text-center text-danger mb-5"
    style="font-family: 'Cardo', serif;">Online order</h1>
   <div class="row">
   


   <?php
   $con= mysqli_connect('localhost','root');
   mysqli_select_db($con,'onlineorder');
   //if ($con) {
   	//echo "connection successful";
   //}else{
   	//echo "no connection";
   //}
   $query ="SELECT `name`, `image`, `price`, `discount` FROM `productlist` order by id ASC";
   $queryfire = mysqli_query($con, $query);
   $num = mysqli_num_rows($queryfire);
   if ($num>0) {
   	 while ($product = mysqli_fetch_array($queryfire)) {
   	 	?>
     <div class="col-lg-3 col-md-3 col-sm-12">
     	<form>
     		<div class="card">
     			<h6 class="card-title bg-info text-white p-2">
     				<?php 
     				echo $product['name'];
                    ?>
                </h6>
     			<div class="card-body">
     				<img src="<?php
     				           echo $product['image'];
     				          ?>" alt= "cake" class = "img-fluid mb-2">
     				<h6> &#8377;
     					<?php
     					 echo $product['price'];
                        ?>
                   <span>(<?php
     					 echo $product['price'];?>% off)</span> </h6>
     					 <h6 class="badge badge-success">4.3
    		  				<i class="fas fa-star"></i>
    		  			</h6>
    		  			<input type="text" name="" class="form-control" placeholder="Quantity">
     			</div>
     			<div class="btn-group d-flex">
     				<button class="btn btn-success flex-fill">Add 
     				to Cart</button><button class="btn btn-warning flex-fill text-white">Buy Now</button>
     			</div>
     		</div>
     	</form>
     </div>


   	 	<?php

   	 }
   }
   ?>











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</div>
</body>
</html>