<?php # DISPLAY COMPLETE LOGGED OUT PAGE.

# Access session.
session_start() ;
# Set page title and display header section.
$page_title = 'Logout' ;

include ( 'includes/headerselect.php' ) ;

include ( 'includes/logoutcontent.php' ) ;
  

include ( 'includes/footer.php' ) ;

?>