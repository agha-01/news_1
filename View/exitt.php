<?php 

session_unset();
session_destroy();

 ?>
 <script>
 	setTimeout(function(){
 		location.replace("login");
 	});
 </script>