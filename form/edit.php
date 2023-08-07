<?php 
include"header.php";
include"connection.php";
?>  

<?php 

if (isset($_GET['q'])) {

  $id = $_GET['q'];
 
  $sql = "SELECT * FROM form WHERE id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
} else {
  // Default value if 'name' parameter is not present in the URL
  
  $id = "Default Name";
}

if(isset($_POST['submit'])){

  $id = $_POST['hidden_id'];
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $mobileno = $_POST['mobileno'];
  $phoneno = $_POST['phoneno'];
  $pincode = $_POST['pincode'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $gender = $_POST['gender'];
  $language = $_POST['hindi'] . " " . $_POST['english'];
  


  $sql = "UPDATE form
  SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', fathername='$fathername', mothername='$mothername', mobileno='$mobileno', phoneno='$phoneno', pincode='$pincode', state='$state', city='$city', gender='$gender', language='$language'  
  WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Data updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: http://localhost:8080/php_practice/form/show.php");
    
 
}


?>

<div class="container " style="margin-top: 50px;">
      <form action="edit.php" method="post">
        <div class="container">
          <div class="row align-items-start">
            <div class="mb-4 col" >
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row["firstname"]?>" >
            </div>
            <div class="mb-4 col" >
              <label for="middlename" class="form-label">Middle Name</label>
              <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $row["middlename"]?>">
            </div>
            <div class="mb-4 col" >
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row["lastname"]?>">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="mb-4 col " >
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $row["email"]?>">
            </div>
            <div class="mb-4 col" >
              <label for="fathername" class="form-label">Father Name</label>
              <input type="text" class="form-control" id="fathername" name="fathername" value="<?php echo $row["fathername"]?>">
            </div>
            <div class="mb-4 col" >
              <label for="mothername" class="form-label">Mother Name</label>
              <input type="text" class="form-control" id="mothername" name="mothername" value="<?php echo $row["mothername"]?>">
            </div>
          </div>
          <div class="row align-items-end">
            <div class="mb-4 col " >
              <label for="mobileno" class="form-label">Mobile No.</label>
              <input type="mobileno" class="form-control" id="mobileno" name="mobileno" value="<?php echo $row["mobileno"]?>">
            </div>
            <div class="mb-4 col" >
              <label for="phoneno" class="form-label">Phone No.</label>
              <input type="text" class="form-control" id="phoneno" name="phoneno" value="<?php echo $row["phoneno"]?>">
            </div>
            <div class="mb-4 col" >
              <label for="pincode" class="form-label">Pin Code</label>
              <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $row["pincode"]?>">
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <select class="form-select" aria-label="Default select example" name="state" >
               <option selected value="<?php echo $row["state"]?>"><?php echo $row["state"]?></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="city" >
                <option selected value="<?php echo $row["city"]?>"><?php echo $row["city"]?></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
            <div class="col">
              Gender : 
              <input class="form-check-input" type="radio"  name="gender" value="1" required >Male
              <input class="form-check-input" type="radio"  name="gender" value="2" required>Female
              <input type="hidden" name="hidden_id" value="<?php echo $row["id"]?>">
            </div>
          </div>
          <div class="row align-items-start" style="margin-top: 50px;">
            <div class="col">
              Language:
              <label for="checkbox1" style="margin-left: 50px;">Hindi</label>
              <input type="checkbox" id="checkbox1" name="hindi" value="hindi" >

              <label for="checkbox2" style="margin-left: 50px;">English</label>
              <input type="checkbox" id="checkbox2" name="english" value="english" >

            </div>
          </div>

        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 25px;">Update Data</button>
      </form>

    </div>
  </body>
</html>




<?php 
include"footer.php";
?>