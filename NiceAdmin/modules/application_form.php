<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Application Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9fbfd;
      margin: 0;
      padding: 0;
    }

    .form-container {
      max-width: 3000px;   /* wider like the registration form */
      margin: 0px auto;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      color: #0d47a1;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .form-row {
      display: flex;
      gap: 15px;
    }

    .form-row .form-group {
      flex: 1;
    }

    .checkbox {
      margin: 15px 0;
    }

    .checkbox label {
      font-size: 14px;
    }

    .checkbox a {
      color: #1565c0;
      text-decoration: none;
    }

    .checkbox a:hover {
      text-decoration: underline;
    }

    .form-actions {
      margin-top: 20px;
    }

    .form-actions button {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    button {
  border: none;               /* Removes border line */
  outline: none;              /* Removes focus outline */
  box-shadow: none;           /* Removes shadow if any */
  cursor: pointer;            /* Adds pointer hand on hover */
  border-radius: 5px;         /* Optional: smooth corners */
  padding: 8px 15px;         /* Optional: space inside */
  font-size: 16px;
  color: #fff;                /* Text color */
}

/* Specific colors */
.btn-submit {
  background-color: #1976d2;  /* Blue */
}

.btn-reset {
  background-color: #757474ff;  /* Dark red */
}

/* Optional hover effects */
.btn-submit:hover {
  background-color: #1565c0;
}

.btn-reset:hover {
  background-color: #5f5d5dff;
}

/* Removes border even when clicked */
button:focus,
button:active {
  outline: none;
  box-shadow: none;
}


    /* Responsive layout */
    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Loan Application Form</h2>
    <form>
      <div class="form-group">
        <input type="text" placeholder="Full Name" required>
      </div>
      <div class="form-row">
        <div class="form-group">
          <input type="email" placeholder="Email Address" required>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Phone Number" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <input type="number" placeholder="Loan Amount" required>
        </div>
        <div class="form-group">
          <input type="number" placeholder="Loan Term" required>
        </div>
        <div class="form-group">
          <input type="number" placeholder="Monthly Income" required>
        </div>
      </div>
      <div class="form-group">
        <textarea rows="3" placeholder="Address" required></textarea>
      </div>
      <div class="form-group">
        <textarea rows="3" placeholder="Purpose of Loan" required></textarea>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" required> I agree to the <a href="#">terms and conditions</a>.
        </label>
      </div>
     <div class="text-center">
        <button type="submit" class="btn-submit">Submit</button>
        <button type="reset" class="btn-reset">Reset</button>
      </div>
    </form>
  </div>
  <!-- ✅ Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Enable tooltips for terms and conditions
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
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
            } else {
              alert('Form submitted successfully!')
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>
</html>
