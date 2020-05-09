<?php session_start();
//require this page to tops to database

//make booking data base
require ( './scripts/connect_db.php' ) ;
# Retrieve items from 'products' database table.
$q = "SELECT * FROM movie";
$r = mysqli_query( $link, $q ) ;
 # Display body section.


if ( mysqli_num_rows( $r ) > 0 )
{
  echo '
  <div class="container">
		<div class="col">
				
			';
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {

//Swap contend of the button so only logged in users can leve a review else are proped to log in
  	if ( isset( $_SESSION[ 'user_id' ] ) )
	{
	$revbtntext='leave a review for';
	
	//give url mov id
	$booking='added.php?id='.$row['mov_id'].'';

	}
	else
		{
				$revbtntext='login to review: ';
				$booking='./login.php';
				$time1='';
				$time2='';
		}

		
    echo '
			<div class="row">
				 <div class="col-sm-9">

					<h2>'.$row['mov_title'].'</h2>
					<div class="row">
					
							<div class="col-8 col-sm-6">
								<img class="card-img-top" src='. $row['mov_img'].'>
							</div>
							
							<div class="col-sm-6">
								<div class="row">
									'.$row['mov_desc'].'
									<br>
									<br>
								</div>

									<div class="row">
									Select a showing time :	<br>
									<button type="button" class="btn btn-dark">

									<a href=' . $booking.'>
									'.$row['showing1'].'</a>
									</button>
									
									<button type="button" class="btn btn-dark">
									<a href=' . $booking . '>
									'.$row['showing2'].'</a>
									</button>
								</div>	

								<div class="row">
									<button type="button"class="btn btn-dark">
									<a href=' . $path2 . '>'.wordwrap($revbtntext,16,'<br>').' 
									'.$row['mov_title'].'</a>
									</button>
							
								</div>
								
							</div>
					</div>
				</div>

			</div>
			';
	}
	
	
		echo '</div></div>';
  # Close database connection.
  mysqli_close( $link ) ; 
}
	# Or display message.
	else { echo '<p>There are currently no movies showing at this cinema.</p>' ; }
?>