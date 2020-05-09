<html lang="en">
   <head>
  
  <title>Booking</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="./css/mystyle.css.css">
  </head>
  </body>

<?php # DISPLAY COMPLETE LOGGED IN PAGE.
include ('includes/connect_db.php');


# Set page title and display header section.
$page_title = 'Reservation' ;
//working no user display
include ( 'includes/headerselect.php' ) ;

//not working 
 # DISPLAY ADDITIONS PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
$page_title = 'Cart Addition' ;

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.
require ( 'scripts/connect_db.php' ) ;

# Retrieve selective item data from 'movie' database table. 
$q = "SELECT * FROM movie WHERE mov_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one movie id.
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
# Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '<div class="container">
      <div class="table-responsive">
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">Movie Title</th>
        <th scope="col">Now Showing</th>
        <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>'. $row['mov_title'].'</td>
          <td><a href="cart.php"> <button type="button" class="btn btn-secondary" role="button"> ' . $row['showing1'] . '</button></a>
          <a href="cart1.php"> <button type="button" class="btn btn-secondary" role="button">' . $row['showing2'] . '</button></a></td>
          <td> £ ' . $row['mov_price'] . '</td>
        </tr>
        </tbody>
        </table>
          
      </div>
      </div>';
  }
else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['mov_price'] ) ;
 echo '<div class="container">
      <div class="table-responsive">
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">Movie Title</th>
        <th scope="col">Now Showing</th>
        <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>'. $row['mov_title'].'</td>
          <td><a href="cart.php"> <button type="button" class="btn btn-secondary" role="button"> ' . $row['showing1'] . '</button></a>
          <a href="cart1.php"> <button type="button" class="btn btn-secondary" role="button">' . $row['showing2'] . '</button></a></td>
          <td> £ ' . $row['mov_price'] . '</td>
        </tr>
        </tbody>
        </table>
          
      </div>
      </div>';
  }
}

# Close database connection.


  
//working but missing css
include ( 'includes/footer.php' ) ; 
//working

mysqli_close($link);
?>

</body>

</html>



