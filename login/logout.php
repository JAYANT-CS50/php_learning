<?php 
include"header.php";


if(isset($_POST['logout'])){

  session_destroy();

  header("Location: http://localhost:8080/php_practice/login/logout.php");
    
}
?>



<div>

<p>Thanks for using out website</p><br>

<a href="login.php" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login</a>





</div>







<?php 
include"footer.php";
?>