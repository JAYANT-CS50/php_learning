<?php
session_start();

include"data.php";
include"header.php";

?>

<?php 
if (isset($_GET['colorsubmit'])) {
  

  if($_SESSION["favcolor"] == "gray"){

    $_SESSION["favcolor"] = "white";

  } else {
    $_SESSION["favcolor"] = $_GET['color'];
  }
  header("Location: form.php");



  
  // Set the favorite color to "yellow" (change it to your desired color)
}


$gender = array("male"=>"1", "female"=>"2", "other"=>"3");
$languages = array("Hindi", "English", "Tamil", "Telagu", "Kannad", "Orriya", "Malyali", "Punjabi");
$arrlength = count($languages);



$sql = "SELECT * FROM states";
$result = $conn->query($sql);

$sql = "SELECT * FROM cities";
$city = $conn->query($sql);


?>





<div style="background-color: <?php echo $_SESSION['favcolor']; ?>">
    <div class="container" style="margin-bottom: 50px;">
      <button type="button" class="btn btn-dark" style="margin-left: 900px;"><a style="text-decoration: none; color: white;" href="show.php" />Existing Data</a></button>
      <form action="form.php"  method="get">
        <input type="hidden" value="gray" name="color">
      <button type="submit" name="colorsubmit" class="btn btn-secondary"><?php  
        if($_SESSION["favcolor"] == "gray"){

          echo "White";
      
        } else {
      
          echo "Gray";
      
        }
      
      ?></button>
      </form>
    </div>
    

    <div class="container " style="margin-top: 50px;">
      <form action="data.php" method="post">
        <div class="container">
          <div class="row align-items-start">
            <div class="mb-4 col" >
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" >
            </div>
            <div class="mb-4 col" >
              <label for="middlename" class="form-label">Middle Name</label>
              <input type="text" class="form-control" id="middlename" name="middlename" >
            </div>
            <div class="mb-4 col" >
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="mb-4 col " >
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-4 col" >
              <label for="fathername" class="form-label">Father Name</label>
              <input type="text" class="form-control" id="fathername" name="fathername">
            </div>
            <div class="mb-4 col" >
              <label for="mothername" class="form-label">Mother Name</label>
              <input type="text" class="form-control" id="mothername" name="mothername">
            </div>
          </div>
          <div class="row align-items-end">
            <div class="mb-4 col " >
              <label for="mobileno" class="form-label">Mobile No.</label>
              <input type="mobileno" class="form-control" id="mobileno" name="mobileno">
            </div>
            <div class="mb-4 col" >
              <label for="phoneno" class="form-label">Phone No.</label>
              <input type="text" class="form-control" id="phoneno" name="phoneno">
            </div>
            <div class="mb-4 col" >
              <label for="pincode" class="form-label">Pin Code</label>
              <input type="text" class="form-control" id="pincode" name="pincode">
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <select class="form-select" aria-label="Default select example" name="state">
                <option selected>State</option>
                <?php
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                    <?php

                  }
                }
                ?>
              </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="city">
                <option value="" selected>City</option>
                  <?php 
                  if ($city->num_rows > 0){
                    while($row = $city->fetch_assoc()) {

                      ?><option value="<?php echo $row['id']; ?>"><?php echo $row['city']?></option>
                      <?php
                    }
                }
                  ?>
                </select>
            </div>
            <div class="col">
              Gender : 
              <?php 
              foreach($gender as $x => $x_value){

                ?><input class="form-check-input" type="radio"  name="gender" value="<?php echo "$x_value"; ?>"><?php echo "$x";
              }
              ?>
            </div>
          </div>
          <div class="row align-items-start" style="margin-top: 50px;">
            <div class="col">
              Language:
              <?php 
              for($x = 0; $x < $arrlength; $x++){

                ?>
                <label for="<?php echo $languages[$x]; ?>" style="margin-left: 50px;"><?php echo $languages[$x];?></label>
                <input type="checkbox" id="<?php echo $languages[$x];?>" name="language[]" value="<?php echo $languages[$x];?>" >

                <?php
              }
              ?>

            </div>
          </div>

          </div>
          </div>

        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
      </form>
    </div>
    </div>
  </body>
</html>

<?php

include"footer.php"; 
?>