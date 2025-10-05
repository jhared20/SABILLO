<h5 class="card-title">Registration Form</h5>

<!-- Floating Labels Form -->
<form class="row g-3 needs-validation" novalidate>
  <!-- Name -->
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required>
      <label for="floatingName">Full Name</label>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>
  </div>

  <!-- Email -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email" required>
      <label for="floatingEmail">Email Address</label>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
  </div>

  <!-- Password -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required pattern=".{8,}" title="Password must be at least 8 characters long">
      <label for="floatingPassword">Password</label>
      <div class="invalid-feedback">Please enter a valid password (min 8 characters).</div>
    </div>
  </div>

  <!-- Address -->
  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" required></textarea>
      <label for="floatingTextarea">Address</label>
      <div class="invalid-feedback">Please enter your address.</div>
    </div>
  </div>

  <!-- City -->
  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingCity" placeholder="City" required>
      <label for="floatingCity">Province</label>
      <div class="invalid-feedback">Please enter your Province.</div>
    </div>
  </div>

  <!-- State -->
  <div class="col-md-4">
    <div class="form-floating mb-3">
      <select class="form-select" id="floatingSelect" aria-label="State" required>
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
      <input type="text" class="form-control" id="floatingZip" placeholder="Zip" required pattern="\d{4}" title="Zip code should be 4 digits">
      <label for="floatingZip">Zip</label>
      <div class="invalid-feedback">Please enter a valid zip code (4 digits).</div>
    </div>
  </div>

  <!-- Terms and Conditions -->
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
      <label class="form-check-label" for="termsCheck">
        I agree to the <a href="#" data-bs-toggle="tooltip" title="Read the terms and conditions">terms and conditions</a>.
      </label>
      <div class="invalid-feedback">You must agree to the terms and conditions to proceed.</div>
    </div>
  </div>

  <!-- Submit Button -->
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form><!-- End floating Labels Form -->

<!-- Script for form validation -->
<script>
  // Enable tooltips for terms and conditions
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Form Validation
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
