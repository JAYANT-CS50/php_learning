<?php
include"sql.php";


if(isset($_POST['submit'])){

  echo "helo";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $userid = $_POST['userid'];
  $mobileno = $_POST['mobileno'];




    $sql = "INSERT INTO user (name, email, userid, mobile)
    VALUES ('$name', '$email', '$userid', '$mobileno')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


 // $conn->close();

}
if(isset($_GET['submittwo'])){

  $sql = "SELECT * FROM user";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["name"]. " - Name: " . $row["email"]. " " . $row["userid"]. " " .$row["mobile"]. "<br>";
    }
  } else {
    echo "0 results";
  }
 // $conn->close();

}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <div>
    <form action="index.php" method="post">
    Name: <input type="text" name="name" /><br>
    Email: <input type="text" name="email"><br>
    UserId: <input type="text" name="userid"><br>
    Mobile No. <input type="number" name="mobileno">
    <button type="submit" name='submit'>Submit</button> 
    </form>
  </div>
  <div>
    <form action="index.php" method="get">
      <button type="submit" name="submittwo">Show</button>
    </form>
  </div>
  
</body>
</html>


   
