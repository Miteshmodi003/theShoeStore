<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Shoe Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>The Shoe Store</h1>      
    <p>We believe in 100% customer satisfaction. Your satisfaction is the only success for us.</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">January Release</div>
        <div class="panel-body"><img src="janshoe.jpg" class="img-responsive" style="width:100%;height:100%;" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">February Release</div>
        <div class="panel-body"><img src="febshoe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">March Release</div>
        <div class="panel-body"><img src="marchshoe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">April Release</div>
        <div class="panel-body"><img src="aprilshoe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">May Release</div>
        <div class="panel-body"><img src="mayshoe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">June Release</div>
        <div class="panel-body"><img src="juneshoe.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><strike>Regular Price: $49.99 USD</strike> Our Price: $29.99 </div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>The ShoeStore Copyright</p>  
  <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >Register for Monthly Deals:
    <input type="email" class="form-control" name="cusEmail" size="50" placeholder="Email Address">
    <input type="submit" class="btn btn-success" />
  </form>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['cusEmail'];
		if(!empty($email)){
			echo "<p>Congratulation! You have signed up for our lastest monthly deals!</p>";
		}
		else {
		echo "<p>Please enter the valid email address or the email input was empty</p>";
		}		
	}	
?>
</footer>

</body>
</html>
