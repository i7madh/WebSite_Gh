<?php
require_once '../core/init.php' ;
if (!is_logged_in()) {
  header('Location: login.php');
}
include 'includes/head.php' ;
include 'includes/navigation.php' ;

?>
<h2 class="text-center"> Administration Page </h2><hr>
<?php include 'includes/footer.php' ; ?>
