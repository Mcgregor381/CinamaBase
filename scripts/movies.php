<?php
require( 'Connect_db.php' ) ;

$q = "SELECT * FROM movie" ;
$r = mysqli_query( $link, $q ) ;

//testing 
if ( mysqli_num_rows( $r ) > 0 )
	{ # Display body section. 
	  {
		echo "<table>"
		 echo "<tr>"
			echo '<th>Movie:</th>';
			echo '<th>Screen:</th>';
			echo '<th>Price:</th>';
		 echo "</tr>";
			while($row=mysqli_fetch_array($r))
			{
				echo"<div class="row">"
					echo "<tr>"
						echo "<td>" . $row['mov_img']  . "</td>";
						echo "<td>" . $row['mov_title'] . "</td>";
						echo "<td>" . $row['mov_desc'] . "</td>";
						echo "<td>" . $row['showing1'] . "</td>";
						echo "<td>" . $row['showing2'] . "</td>";
						echo "<td>" . $row['price']  . "</td>";
					echo "</tr>";
				echo "</div>"
			}
		echo "</table>";
		//free result set
		mysqli_free_result($result);
		}
		else
			echo"Error : could not connect to DB ".
			mysqli_close( $link ) ;
		}
?>
<?php
$sql = "SELECT * FROM persons";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>