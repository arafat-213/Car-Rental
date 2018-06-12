<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.price{
			/*text-align: right;*/
			font-size: 18pt;
			float: right;
		}
		.description{
			float: left;
			padding-top: 1.5%;
		}
		html,body{
			height: 100%;
		}
		.fill { 
    min-height: 100%;
    height: 100%;
}
	</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
	function addsuccess()
	{
		alert("ITEM HAS BEEN ADDED TO YOUR CART");
	}
</script>

</head>
<body style="background-color: rgba(248,248,248,0.5);">
<?php 
	if(!isset($_REQUEST['sub'])){
		?>
	<form name="f1" action="<?php $_SERVER['PHP_SELF'] ?>">


	<nav class="navbar navbar-default">
	<div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
    		<a href="main.php" class="navbar-brand">caRental</a>
    	</div>
    	<div class="collapse navbar-collapse" id="mynavbar">
	    	<ul class="nav navbar-nav">
	    		<li onclick="document.location.href='menu.php'"><a href="#">Catalog</a></li>
	    		<!-- <li onclick="show(('order.php'))"><a href="#">Order</a></li>
	    		<li onclick="show(('bill.php'))"><a href="#">Bill</a></li> -->
          <li onclick="document.location.href='about-us.html'"><a href="#">About Us</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right">
          <li onclick="document.location.href='cart.php'"> <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="padding-top: 15%;"></span></a></li>
	    		<li onclick="document.location.href='cart.php'"><a href="#">MY CART</a></li> 
	    		<li  onclick="document.location.href='login.php'"><a href="#">LOG OUT </a></li> 
	    	</ul>
    	</div>
</div>
    </nav>

	<div class="container fill">
		
		<div class="row">
	      <div class="col-lg-4 col-md-6 col-xs-12">
	      	<div class="thumbnail">
	          <img src="images/images (1).jpeg" height="223px" width="226px">

	          <div class="description">Toyota Innova (Petrol)</div>
	        	<div class="price" > Rs. 1499</div>
	        <button class="btn btn-success btn-block" name="sub" value="innova-p">Add to cart</button>
	        </div>
	      </div>
	      
	    	<div class="col-lg-4 col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/images (1).jpeg" height="223px" width="226px">
	          <div class="description">Toyota Innova (CNG)</div>
	        <div class="price" > Rs. 1549</div>
	        <button class="btn btn-success btn-block" name="sub" value="innova-c">Add to cart</button>
	        </div>
	      </div>
	  	
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/images (4).jpeg" height="223px" width="226px">
	          <div class="description">Maruti Suzuki Swift (Petrol)</div>
	        <div class="price" > Rs. 1599</div>
	        <button class="btn btn-success btn-block" name="sub" value="swift-p">Add to cart</button>
	        </div>
	      </div>
	    </div>
	    <div class="row">  
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/images (4).jpeg" height="223px" width="226px">
	          <div class="description">Maruti Suzuki Swift (Diesel)</div>
	        <div class="price" > Rs. 1549</div>
	        <button class="btn btn-success btn-block" name="sub" value="swift-d">Add to cart</button>
	        </div>
	      </div>
	      <div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/images (6).jpeg" height="223px" width="226px">
	          <div class="description">Toyota Etios (CNG)</div>
	        <div class="price" > Rs. 1499</div>
	        <button class="btn btn-success btn-block" name="sub" value="etios-c">Add to cart</button>
	        </div>
	      </div>
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/images (6).jpeg" height="223px" width="226px">
	          <div class="description">Toyota Etios (Diesel)</div>
	   			<div class="price" > Rs. 1549</div>
	        <button class="btn btn-success btn-block" name="sub" value="etios-d">Add to cart</button>
	        </div>
	      </div>
	      </div>
<div style="float: right; color: red;">*Prices listed are for a single day and fuel costs are not included</div>

	    </div>
	</div>
</form>

<?php 
	} else
	{
			$sub = $_REQUEST['sub'];
			
			$link = new mysqli("localhost", "root", "" , "car");
			$res = $link->query("select name,price from price_list where name='$sub'");
			$row = mysqli_fetch_row($res);
			$item=$row[0];
			$price = $row[1];
			 $link -> query("insert into cart values('$item',$price)");
			$link -> close();
			header("location:cart.php");
		
	}	
?>
</body>
</html>