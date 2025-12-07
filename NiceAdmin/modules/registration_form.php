<?php
  include "../includes/connections.php";

  if(isset($_POST['btn_submit'])){

    $fullname = $_POST['registration_fullname'];
    $email = $_POST['registration_email'];
    $password = $_POST['registration_password'];
    $address = $_POST['registration_address'];
    $city = $_POST['registration_city'];
    $barangay = $_POST['registration_barangay'];
    $zip = $_POST['registration_zip'];
    $terms = isset($_POST['registration_terms']) ? 1 : 0;


    $sql = "INSERT INTO registration (fullname, email, password, address, city, barangay, zip, terms)
            VALUES ('$fullname', '$email', '$password', '$address', '$city', '$barangay', '$zip', '$terms')";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Submitted Successfully!");</script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }
    if(isset($_POST['btn_reset'])){
      echo '<script>alert("Reset Successfully!");</script>';
    }

  $conn->close();


?>

<h5 class="card-title">Registration Form</h5>
<!-- Floating Labels Form -->
<form class="row g-3 needs-validation" method="POST" action="index.php?page=Registration_form">
  <!-- Name -->
  <div class="col-md-12"> 
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingName" placeholder="Full Name" name="registration_fullname">
      <label for="floatingName">Full Name</label>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>
  </div>

  <!-- Email -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="registration_email">
      <label for="floatingEmail">Email Address</label>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
  </div>

  <!-- Password -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="registration_password">
      <label for="floatingPassword">Password</label>
      <div class="invalid-feedback">Please enter a valid password (min 8 characters).</div>
    </div>
  </div>

  <!-- Address -->
  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Address" name="registration_address"></textarea>
      <label for="floatingTextarea">Address</label>
      <div class="invalid-feedback">Please enter your address.</div>
    </div>
  </div>

  <!-- City -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingCity" placeholder="City" name="registration_city">
      <label for="floatingCity">Province</label>
      <div class="invalid-feedback">Please enter your Province.</div>
    </div>
  </div>

  <!-- State -->
  <div class="col-md-4">
    <div class="form-floating mb-3">
      <select class="form-select" id="floatingSelect" aria-label="State" name="registration_barangay">
        <option selected disabled>Choose your barangay</option>
        <option value="1">Carmen</option>
        <option value="2">Patag</option>
        <option value="3">Bulua</option>
      </select>
      <label for="floatingSelect">State</label>
      <div class="invalid-feedback">Please select your state.</div>
    </div>
  </div>

  <!-- Zip -->
  <div class="col-md-2">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingZip" placeholder="Zip" name="registration_zip">
      <label for="floatingZip">Zip</label>
      <div class="invalid-feedback">Please enter a valid zip code (4 digits).</div>
    </div>
  </div>

  <!-- Terms and Conditions -->
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="termsCheck" name="registration_terms" required>
      <label class="form-check-label" for="termsCheck">
        I agree to the <a href="#" data-bs-toggle="tooltip" title="Read the terms and conditions">terms and conditions</a>.
      </label>
      <div class="invalid-feedback">You must agree to the terms and conditions to proceed.</div>
    </div>
  </div>

  <!-- Submit Button -->
  <div class="text-center">
    <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
    <button type="submit" class="btn btn-secondary" name="btn_reset">Reset</button>
  </div>
</form>
<!-- End floating Labels Form -->
</div>

