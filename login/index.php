<?php 
include"header.php";
session_start();


if(isset($_POST['submit'])){



  $_SESSION["email"] = $_POST['email'];
  $_SESSION["password"] = $_POST['password'];
  

  
  header("Location: http://localhost:8080/php_practice/login/index.php");
    
}
?>


<div>
  <p>Thanks For login you have been logged in with Email id " <?php  echo $_SESSION["email"] ?> "</p><br>

  <p>Your password is "<?php  echo $_SESSION["password"] ?> "</p>
</div>

<div>

  <form action="logout.php" action="post">
    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" name="logout">Logut</button>
  </form>
</div>

















<?php
include"footer.php";
?>