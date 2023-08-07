<?php 
include"connection.php";

if(isset($_POST['submit'])){






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
  // $arrlength = count($_POST['language']);
  // $lang = ($_POST['language']);
  //   for($x = 0; $x < $arrlength; $x++){
    
  //   $language = $lang[$x] . " " . "$language";

  // }
  $language = implode(" ",$_POST['language']);

    $sql = "INSERT INTO form (firstname, middlename, lastname, email, fathername, mothername, mobileno, phoneno, pincode, state, city, gender, language)
    VALUES ('$firstname', '$middlename','$lastname','$email','$fathername','$mothername','$mobileno','$phoneno','$pincode','$state','$city', '$gender', '$language')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();

  header("Location: http://localhost:8080/php_practice/form/show.php");
    
}

?>