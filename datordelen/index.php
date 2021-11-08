


<?php
require('centermenu.php');?>

<?php
$page = $_GET['p'];
if($_GET){
require($page.'.php'); 
} 
if(!$_GET){
$title = "test";
require('annonser.php');  

} 
?>

<?php 
require('footer.php');?>



</body>

</html>
