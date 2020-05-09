<!--  partly working not bkrase with the coundown timer -->
<?php

include ( './scripts/connect_db.php' ) ;
# Retrieve items from 'products' database table.
$q = "SELECT * FROM comingsoon";
$r = mysqli_query( $link, $q ) ;

date_default_timezone_set('uk/London');


if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
 
  echo '
  <div class="container">
		<div class="col">
			';

  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
  	

  	//the dates
  	//end date
  	$endtime =$row['mov_release'];

  	//conver to time stamps
  	//now
	$date1Timestamp = time();
	//dest
	$date2Timestamp = strtotime($endtime);

  	//math
	$diff = ($date2Timestamp - $date1Timestamp);
	$days = floor($diff / (60*60*24) );

	if ($days<=0)
	{
		$days = "The movie has been alredy releced";
	}

	$movieid = $row['mov_id'];



    echo '
			<div class="row-pb-b-5">
				 <div class="col-sm-9">
					<h2>'.$row['mov_title'].'</h2>
					<h4>Release on '.$row['mov_release'].'</h4>

					
					<h5>Days till release '.$days.' </h5>
					<div class="row">
					
							<div class="col-8 col-sm-6">
								<img class="card-img-top" src='. $row['mov_img'].'>
							</div>
							<div class="col-sm-6">
								'.$row['mov_desc'].'
							</div>
					</div>
				</div>
			</div>';

	}
		echo '</div></div>';
		
		echo '</div></div>';
  # Close database connection.
 # mysqli_close( $link ) ; 
}
	# Or display message.
	else { echo '<p>There are currently no movies showing at this cinema.</p>' ; }
	


?>

</html>