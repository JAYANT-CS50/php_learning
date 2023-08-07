<?php 
include"header.php";


if(isset($_SESSION["email"])){

  ?>
  <div>
  <p >Thanks For login you have been logged in with Email id <span  class="text-4xl font-thin text-gray-900  italic"><?php  echo $_SESSION["email"]; ?></span> </p><br>
  
  <p>Your password is <span class="text-4xl font-thin text-gray-900  italic"><?php  echo $_SESSION["password"]; ?></span></p>
</div>
<?php 

    
} else {

  ?>
  <div style="width: 800px; height: 500px;">
    <h1 style="text-align: center; margin-top: 200px; font-size:large"><?php echo "Please Login First"; ?></h1>
  </div>

  <?php


  
}

?>





<?php
include"footer.php";
?>