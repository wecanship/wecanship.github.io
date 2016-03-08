<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>We Can Ship</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script src="email/validation.js" type="text/javascript"></script>
  </head>
  <body>
  
	<nav class = "navbar navbar-default" role = "navigation">   
		<div class = "navbar-header">
			<a class = "navbar-brand" href = "#">We Can Ship</a>
		 </div>
		   
		<div>
			<ul class = "nav navbar-nav">
				<li class = "active"><a href = "#">Home</a></li>
				<li><a href = "#">Contact</a></li>
			 </ul>
		</div>   
	</nav>
			
	<div class="jumbotron">	
		<div class ="container">		
			<h1>We Can Ship!</h1>
			<p>Ship your favorite Canadian products to HK</p>			
		</div>		
	</div>	
	
	<section class="shop">
		<div class="container">
			<h2>Shop from these sites</h2>
			<p>Now offering products from the following sites! Click to launch the site and remember to save the links so you can make your order below!</p>
		</div>	
	</section>

	<section class="details">
		<div class="container">
		<ul>
			<li>Commission: Only 10% of order total!</li>
			<li>Tracking number will be provided on all orders over $50</li>
			<li>Payment accepted via Paypal</li>
			<li>Orders shipped within 5 business days</li>
		</ul>	
		</div>
	</section>

	<section class="contact">
		<div class="container">
		<div class="row">
			<h2>Submit your order!</h2>
			<h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>																
			<form name="enq" method="post" action="email/" onsubmit="return validation();">
				<fieldset>				
				<div class = "form-group">
					<label for = "name" class = "col-sm-2 control-label">First and Last Name</label>
					<div class = "col-sm-10">
						<input type = "text" class = "form-control" id = "firstName" name ="firstName" value=""  class="input-block-level" placeholder = "Enter First Name" required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "email" class = "col-sm-2 control-label">E-mail</label>
					<div class = "col-sm-10">
						<input type = "text" class = "form-control" id = "email" name="email" value=""  class="input-block-level" placeholder = "Enter E-mail" required>
					</div>
				</div>
				<div class = "form-group">
					<label for = "name" class = "col-sm-2   control-label">Wish List</label>
					<div class = "col-sm-10">
						<textarea id="message" name="message" class = "form-control" rows = "15" value=""  class="input-block-level" placeholder = "List all items you want to order, price, website link, and any other details. We will contact you if we require further clarification.
						
Example:						
1. Nars Blush - Outlaw $38, http://www.sephora.com/blush-P2855?skuId=1774587" required></textarea>
					</div>	
				   
				<div class="actions">
				<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
				</div>					
				</fieldset>
			</form> 								
        </div>		
		</div>
		</div>
	</section>	
	
	<br>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>