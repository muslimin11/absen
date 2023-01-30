<?php
session_start();
session_destroy();

//kembali halaman index.php
?> 
	<script>
 		window.location='./index.php';
 	</script>
<?php

?>