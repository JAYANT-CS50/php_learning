<?php 
include("header.php");
include("connection.php");
?>

<?php

$sql = "SELECT * FROM form";
$result = $conn->query($sql);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Pincode</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <th><?php echo $row["id"]; ?></th>
      <td><?php echo $row["firstname"]. " ". $row["middlename"]. " " .$row["lastname"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["fathername"]; ?></td>
      <td><?php echo $row["mothername"]; ?></td>
      <td><?php echo $row["mobileno"]; ?></td>
      <td><?php echo $row["phoneno"]; ?></td>
      <td><?php echo $row["pincode"]; ?></td>
      <td><?php echo $row["state"]; ?></td>
      <td><?php echo $row["city"]; ?></td>
      <td><?php 
              if($row["gender"] == 1){
                echo "male";
              }
              else {
                echo "female";
              }

              ?></td>
      <td><a href="edit.php/?q=<?php echo $row['id'];?>"> Edit </a>
    <?php
   }
     }
    ?>
  </tbody>
</table>



 



<?php
include"footer.php"; 
?>