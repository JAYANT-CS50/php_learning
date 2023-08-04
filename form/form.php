<?php

include"data.php";
include"header.php";

?>
    <div class="container" style="margin-bottom: 50px;">
      <button type="button" class="btn btn-dark" style="margin-left: 900px;"><a style="text-decoration: none; color: white;" href="show.php" />Existing Data</a></button>
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
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
                <select class="form-select" aria-label="Default select example" name="city">
                  <option selected>City</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
            <div class="col">
              Gender : 
              <input class="form-check-input" type="radio"  name="gender" value="1">Male
              <input class="form-check-input" type="radio"  name="gender" value="2">Female
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
          </div>

        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top: 25px;">Submit</button>
      </form>
    </div>
  </body>
</html>

<?php
include"footer.php"; 
?>