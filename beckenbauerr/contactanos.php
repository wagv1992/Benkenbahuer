<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contactanos.</title>
  <?php include 'inc/header.php';?>
  	 
		<link rel="stylesheet" href="style.css">
		 
  </head>

<body>
  
<div class="container">


  <?php include 'inc/menu.php';?>
  
  <center><H1>Contactanos</H1></center>
  
<div class="container">
    
	<div class="fcontacto">
				
				<form method="POSt" name="fcontacto" id="fcontacto" action="./">
					<div class="row">
						<div class="col-md-6">
							<label>Tu nombre:</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>

						<div class="col-md-6">
							<label>Tu Email:</label>
							<input type="text" name="email" id="email" class="form-control">
						</div>
					</div>
					<label>Asunto:</label>
					<input type="text" name="asunto" id="asunto" class="form-control">
					<label>Mensaje:</label>
					<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
					<input type="submit" class="btn btn-info" value="Enviar">

					<div id="respuesta" style="display: none;"></div>
				</form>
			</div>
    
	 
	<br>
	
  </div>
  
  <div class="container">
   
	
	</div> 
<?php include 'inc/footer.php';?>
</body>
</html>
