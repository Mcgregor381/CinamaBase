<?php
#Comeing soon page
# DISPLAY COMPLETE LOGGED IN PAGE.
session_start() ; 
# Set page title and display header section.
$page_title = 'Coming Soon' ;
//working but displaying nothing
include ( 'includes/headerselect.php' ) ;
#working 
include ( 'includes/comeingsooncontent.php' ) ; 
//working but missing css
include ( 'includes/footer.php' ) ; 
//working
require ('scripts/connect_db.php');
?>

</body>
</html>





