<?php # DISPLAY COMPLETE LOGIN PAGE.
# Set page title and display header section.
$page_title = 'Login' ;


include ( 'includes/headerselect.php' ) ;

?>

<?php # DISPLAY COMPLETE LOGIN PAGE.
# Set page title and display header section.
$page_title = 'Login' ;


# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or create account.</p>' ;
}

?>

<body>
<div  class="container >
	<p class="lead"><i class="fa fa-user"></i>  Login</p>
</div>

                
	<div class="container">
        <div class="row">
			<div class="col">
				<form action="scripts/login_action.php" method="post">
				
				<div class="form-group">
					<label for="email">Email</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
						</div>
				</div>
					
				
				<div class="form-group">
					<label for="password">Password: </label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control" placeholder="Password" name="pass">
							</div>
						</div>
				</div>
						
				<div class="form-group">
					<br>
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Login Now">
							</div>
						</div>
				</div>
				
			
				</form>


				
				<form method="get" action="register.php">
				<div class="form-group">
					
						<div class="row">
							<div class="col">
								<input class="btn btn-dark btn-lg btn-block" type="submit" value="Create Account">
							</div>
						</div>
				</div>
	</div>
			</div>	
				</form>

  </body>

<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.

include ( 'includes/footer.php' ) ;

# Display any error messages if present.


?>





